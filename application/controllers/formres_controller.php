<?php

//if (! defined('BASEPATH')) exit ('No direct script access allowed');
class Formres_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('googlemaps');
        $this->load->model('manage');
        $this->load->model('food');
        $this->load->model('recommend', 'recom');
        $this->load->model('restaurantsmodel', 'Rest');
        $this->load->library('upload');
        $this->load->library('image_lib');
    }

    public function index() {
        $this->load->view('template/header');
        $this->load->model('restaurantsmodel', 'Rest');
        $this->load->library(array('session', 'facebook'));
        $data = array('userdata' => $this->facebook->get_user());
        $this->load->model('user');
        $check = $this->user->_checkuser($data['userdata']);

        if ($check = !null) {
            $data = array(
                'email' => $data['userdata'],
//                       'resAll'=>$this->Rest->showall(),
//                       'map'=> $this->googlemaps->create_map(),
//                        'mark'=>$mark
            );

            $this->session->set_userdata($data);
            $this->load->view('addformres', $data);
            $this->load->view('template/footer');
        } else {
            echo "Chack Login";
        }
    }

    public function addres() {
        $this->load->view('template/header');
        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');
        if ($lat == null and $lng == null) {
            $Dlat = 17.628087;
            $Dlng = 100.097616;
        } else {
            $Dlat = $this->input->post('lat');
            $Dlng = $this->input->post('lng');
        }
        $data1 = array(
            'res_id' => '',
            'res_name' => $this->input->post('Restaurant'),
            'lat' => $Dlat,
            'lng' => $Dlng,
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'price' => $this->input->post('price'),
            'parking' => $this->input->post('parking'),
            'detail' => $this->input->post('Detail')
        );
        $idres = $this->Rest->_addres($data1);
//        print_r($_FILES);
        //----------------//
        $detail = $this->input->post('detail_photores');
        $files = $_FILES;
        $cpho = count($_FILES['userfile']['name']);
//        print_r($files);
        for ($i = 0; $i < $cpho; $i++) {

            $config = array(
                'file_name' => rand(100, 1000) . "_" . date("Dmy_His"),
                'upload_path' => 'img_res',
                'allowed_types' => 'gif|jpg|png',
                'max_size' => '2000'
            );
            $this->upload->initialize($config);

            $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

            if (!$this->upload->do_upload()) {
                
            } else {
                $data = $this->upload->data();
                $config = array(
                    'image_library' => 'gd2',
                    'source_image' => 'img_res/' . $data['file_name'],
                    'width' => '600',
                    'height' => '300'
                );
                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                $data2 = array(
                    'imgres_id' => '',
                    'imgres_name' => $data['file_name'],
                    'imgres_detail' => $detail[$i],
                    'res_id' => $idres
                );
//                print_r($idres);
                $this->Rest->_upload($data2);
            }
        }
        $this->load->view('template/footer');
        redirect('index.php/formres_controller/showAllres');
    }

    public function showAllres() {
        $this->load->view('template/header');
        $this->load->model('restaurantsmodel', 'Rest');
        $data['resAll'] = $this->Rest->showall();
        $this->load->view('show_res', $data);
        $this->load->view('template/footer');
    }

    public function resdetail() {
        $this->load->view('template/header');

        $id = $this->uri->segment(3);
        $data = [
            'id' => $id,
            'resAll' => $this->Rest->_resdetil($id),
            'resid' => $this->food->_foodbyid($id),
            'imgres' => $this->Rest->_showimgres($id),
            'idres' => $id,
        ];
//        print_r($data);
        $this->load->view('res_detail', $data);
        $this->load->view('template/footer');
    }

    public function get_update() {
        $this->load->view('template/header');

        $this->load->model('restaurantsmodel', 'Rest');
        $id = $this->uri->segment(3);
        $data = array(
            'up' => $this->Rest->upres($id),
        );
        $this->load->view('upres', $data);
        $this->load->view('template/footer');
    }

    function update() {
        $this->load->view('template/header');
        $data = array(
            'res_id' => $this->input->post('id'),
            'res_name' => $this->input->post('Restaurant'),
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'price' => $this->input->post('price'),
            'parking' => $this->input->post('parking'),
            'detail' => $this->input->post('Detail')
        );
        $this->load->model('restaurantsmodel');
        $this->restaurantsmodel->update($data);
        $this->load->view('template/footer');
        redirect('index.php/formres_controller/showAllres');
    }

    public function del() {
        $this->load->view('template/header');
        $this->load->model('restaurantsmodel', 'Del');
        $data = $this->uri->segment(3);
        $this->Del->delID($data);
        $this->load->view('template/footer');
        redirect('index.php/formres_controller/showAllres');
    }

    public function showalluser() {
        $this->load->view('template/header');

        $this->load->model('user_model', 'user');
        $data['userAll'] = $this->user->_showuser();
        $this->load->view('test_view', $data);
        $this->load->view('template/footer');
    }

    public function recommend() {
        $this->load->view('template/header');
        $data = array(
            'resid' => $this->Rest->_showres()
        );
        $this->load->view('add_recommend', $data);

        $this->load->view('template/footer');
    }

    public function addrecom() {   // เช็ค ร้านที่มีอยู่ใน DB หลังจากกด Button submit
        $this->load->view('template/header');
//        $ids = $this->recom->getrecom();
//        echo $ids;
//        $cids = count($ids);
        $v;
        $Dsele = $this->input->post('searchable');
        $cpho = count($Dsele);   
        $w = $this->recom->getrecom();
        
         $cW = count($w);   
//        print_r($w);
        echo "</br>";
        echo "</br>";
         for ($i = 0; $i < sizeof($Dsele); $i++) {
         $v=$Dsele[$i]; 
         $result = $this->recom->searchrescombyid($v);
         print_r($result);
         if(sizeof($result)== 0){
             $data = array(
                 'recom_id' =>'',
                 'res_id' =>$v);
             $this->recom->_addrecom($data);
         }
//          for ($j = 0; $j < $cW; $j++) {
//                print_r( $w[$j]); 
          }
//         }
//         print_r($v);
       
             
              
                 
                
//                echo $Dslect;
//                 if(empty($t)){
//                     echo $t."</br>";
////                     echo $Dslect."</br>";
//                     echo "tttt";
////                     
//                 }else{
//                     echo "ree</br>";
//                 }
//                }
             
//        } 
     
//               foreach ($w as $D_res) {
//                   if($D_res==$Dsele){
//                        print_r($Dsele[$i]);
//                   }else{
//                       print_r($Dsele[$i]);
//                   }
//                  
//                   
//                   
//               }
//               
//                   }
//            if( $Dsele[$i]==$w[$j]   ){
//                print_r($Dsele[$i]);
//                print_r($w[$j]);
                ?>                          
<!--                        <script type="text/javascript">
                            alert("ร้านที่เลือกมีอยูแล้ว");
                        </script>-->
                        
                        <?php
//                        $DataF = array('recom' => $this->recom->_showrecom());
//                        $this->load->view('show_recom',$DataF);
//                        $this->load->view('template/footer');
//            }else if ($Dsele[$i]!=$w[$j]   ){
//                print_r($Dsele[$i]);
//                 echo "ไม่มี";
//                        $this->recom->_addrecom($data);
//                        redirect('index.php/usersingin');
//                        $this->load->view('template/footer');
//            }
//            echo "not loop";
//           }
//           echo "</br>";
//          
//           echo "</br>";
//            for ($p = 1; $p < $cids; $p++) {
//                foreach ($ids as $id) {
//                    if ($Dsele[$i] == $w) {
                        ?>                          
<!--                        <script type="text/javascript">
                            alert("ร้านที่เลือกมีอยูแล้ว");
                        </script>-->
                        <?php
//                       echo "มี";
                        //echo 'ร้านที่เลือกมีอยูแล้ว';
//                        redirect('index.php/formres_controller/show_recom');
//                           echo json_encode($Dseles),'$Dseles';
//                           echo '$id[res_id]->>',$id['res_id'];
//                        $data = array('recom' => $this->recom->_showrecom());
//                        $this->load->view('show_recom');
//                        $this->load->view('template/footer');
                   // } 
                    //else {
                     //   echo "ไม่มี";
//                        $this->recom->_addrecom($data);
//                        redirect('index.php/usersingin');
//                        $this->load->view('template/footer');
                    //}
                //}
            //}
//        }
    }

    public function showrecom() {
        $this->load->view('template/header');
        $data = array(
            'recom' => $this->recom->_showrecom()
        );
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }

    public function show_recom() {
        $this->load->view('template/header');
        $data = array(
            'recom' => $this->recom->_showrecom()
        );
        $this->load->view('show_recom', $data);
        $this->load->view('template/footer');
    }

    public function delrecom() {
        $this->load->view('template/header');
        $data = $this->uri->segment(3);
        $this->recom->delrecom($data);
        $this->load->view('template/footer');
        redirect('index.php/formres_controller/show_recom');
    }

}
?>       