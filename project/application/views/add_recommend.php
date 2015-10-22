<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">   
        </br>
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
                
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>เพิ่มร้านแนะนำ</h3></span>
                <div  class="col-sm-12 col-xs-12 col-sm-offset-2 col-xs-offset-2">
                    <link href="<?php echo base_url(); ?>front_page/css/multi-select.css" media="screen" rel="stylesheet" type="text/css">

                    <form role="form" action="<?php echo base_url();?>index.php/formres_controller/addrecom" method="POST" enctype="multipart/form-data">                      
                        <select multiple class="searchable" name="searchable[]">
                            <?php
                            if (count($resid)) {
                                foreach ($resid as $resids) {
                                    ?>
                                    <option value = '<?php echo $resids['res_id']; ?>'><?php echo $resids['res_name']; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        </br><div class="col-xs-offset-6">
                            <input type="submit" class="btn btn-success  btn-sm" value="ตกลง" />
                        </div>
                        </br> 
                    </form>
                </div>

                <script src="<?php echo base_url(); ?>front_page/js/jquery.min.js"></script>
                <script src = "<?php echo base_url(); ?>front_page/js/jquery.multi-select.js" type = "text/javascript"></script>
                <script src="<?php echo base_url(); ?>front_page/js/jquery.quicksearch.js"></script>
                <script type="text/javascript">
                    $('.searchable').multiSelect({
                        selectableHeader: "<div class='custom-header'>ร้านทั้งหมด</div><input type='text' class='search-input' autocomplete='off' placeholder='เลือกร้าน'>",
                        selectionHeader: "<div class='custom-header'>ร้านที่เลือก</div><input type='text' class='search-input' autocomplete='off' placeholder='เลือกร้าน'>",
                        afterInit: function (ms) {
                            var that = this,
                                    $selectableSearch = that.$selectableUl.prev(),
                                    $selectionSearch = that.$selectionUl.prev(),
                                    selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                                    selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                                    .on('keydown', function (e) {
                                        if (e.which === 40) {
                                            that.$selectableUl.focus();
                                            return false;
                                        }
                                    });
                            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                                    .on('keydown', function (e) {
                                        if (e.which == 40) {
                                            that.$selectionUl.focus();
                                            return false;
                                        }
                                    });
                        },
                        afterSelect: function (values) {
                            this.qs1.cache();
                            this.qs2.cache();
                            alert("เลือก: " + values);
                        },
                        afterDeselect: function (values) {
                            this.qs1.cache();
                            this.qs2.cache();
                            alert("ยกเลิก: " + values);
                        }
                    });
                </script>
