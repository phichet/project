<div class="container" style="background-color:rgba(220,220,220,0.2)">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 moblie-mode">
                <!--<a href="index.php">�????�??�??</a> --&gt; <a href="food.php">??������??�??�����/�??��??�??��??�</a> --&gt; ����õ����????          </div>-->
                <br>
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                <span class="glyphicon-class"><h3>ร้านอาหาร</h3></span>
                <?php
                if (count($resAll)) {
                    foreach ($resAll as $row) {
                        ?>
                        <div class="col-xs-6 col-sm-4">
                            <img width="100%" height="200" class="img-rounded img-responsive" src="<?php echo base_url(); ?>front_page/images/restaurants/no-img.jpg"></br >
                            <article><p> ชื่อร้าน : <?php echo "<a href='" . base_url() . "index.php/formres_controller/resdetail/$row->res_id'>$row->res_name"; ?></a></p></article>
                            <article><p class="font-gary">ที่อยู่ : <?php echo $row->address ?></p></article>
                            <article><p class="font-gary">โทร : <?php echo $row->phone ?></p></article>
                        </div>
                        <?php
                    }
                }
                ?>

                <!--                        <div class="col-sm-12">
                              <center>
                                  <nav>
                                      <ul class="pagination">
                                        <li class="active"><a>1 <span class="sr-only">(current)</span></a></li>                      </ul>
                                  </nav>
                              </center>
                              <hr>
                            </div>-->
                <script type="text/javascript">
                    $.fn.pageMe = function (opts) {
                        var $this = this,
                                defaults = {
                                    perPage: 7,
                                    showPrevNext: false,
                                    numbersPerPage: 5,
                                    hidePageNumbers: false
                                },
                        settings = $.extend(defaults, opts);

                        var listElement = $this;
                        var perPage = settings.perPage;
                        var children = listElement.children();
                        var pager = $('.pagination');

                        if (typeof settings.childSelector != "undefined") {
                            children = listElement.find(settings.childSelector);
                        }

                        if (typeof settings.pagerSelector != "undefined") {
                            pager = $(settings.pagerSelector);
                        }

                        var numItems = children.size();
                        var numPages = Math.ceil(numItems / perPage);

                        pager.data("curr", 0);

                        if (settings.showPrevNext) {
                            $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
                        }

                        var curr = 0;
                        while (numPages > curr && (settings.hidePageNumbers == false)) {
                            $('<li><a href="#" class="page_link">' + (curr + 1) + '</a></li>').appendTo(pager);
                            curr++;
                        }

                        if (settings.numbersPerPage > 1) {
                            $('.page_link').hide();
                            $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();
                        }

                        if (settings.showPrevNext) {
                            $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
                        }

                        pager.find('.page_link:first').addClass('active');
                        pager.find('.prev_link').hide();
                        if (numPages <= 1) {
                            pager.find('.next_link').hide();
                        }
                        pager.children().eq(1).addClass("active");

                        children.hide();
                        children.slice(0, perPage).show();

                        pager.find('li .page_link').click(function () {
                            var clickedPage = $(this).html().valueOf() - 1;
                            goTo(clickedPage, perPage);
                            return false;
                        });
                        pager.find('li .prev_link').click(function () {
                            previous();
                            return false;
                        });
                        pager.find('li .next_link').click(function () {
                            next();
                            return false;
                        });

                        function previous() {
                            var goToPage = parseInt(pager.data("curr")) - 1;
                            goTo(goToPage);
                        }

                        function next() {
                            goToPage = parseInt(pager.data("curr")) + 1;
                            goTo(goToPage);
                        }

                        function goTo(page) {
                            var startAt = page * perPage,
                                    endOn = startAt + perPage;

                            children.css('display', 'none').slice(startAt, endOn).show();

                            if (page >= 1) {
                                pager.find('.prev_link').show();
                            }
                            else {
                                pager.find('.prev_link').hide();
                            }

                            if (page < (numPages - 1)) {
                                pager.find('.next_link').show();
                            }
                            else {
                                pager.find('.next_link').hide();
                            }

                            pager.data("curr", page);

                            if (settings.numbersPerPage > 1) {
                                $('.page_link').hide();
                                $('.page_link').slice(page, settings.numbersPerPage + page).show();
                            }

                            pager.children().removeClass("active");
                            pager.children().eq(page + 1).addClass("active");

                        }
                    };

                    $(document).ready(function () {

                        $('#myTable').pageMe({pagerSelector: '#myPager', showPrevNext: true, hidePageNumbers: false, perPage: 4});

                    });
                </script>