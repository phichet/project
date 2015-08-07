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
    }

    public function index() {
        $this->load->view('template/header');
        $this->load->model('restaurantsmodel', 'Rest');
        $this->load->library(array('session', 'facebook'));
        $data = array('userdata' => $this->facebook->get_user());
        // $udata=$data['userdata'] ;  
        //  print_r($data['userdata']);
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

        $data1 = array(
            'res_id' => '',
            'res_name' => $this->input->post('Restaurant'),
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('phone'),
            'price' => $this->input->post('price'),
            'parking' => $this->input->post('parking'),
            'detail' => $this->input->post('Detail')
                //'google' =>$this->googlemaps->create_map()
        );
        $this->load->model('restaurantsmodel', 'Rest');
        $this->Rest->_addres($data1);

        $this->load->view('template/footer');
        redirect('index.php/formres_controller/showAllres');
    }

    public function showAllres() {
        $this->load->view('template/header');

        $this->load->model('restaurantsmodel', 'Rest');
        $data['resAll'] = $this->Rest->showall();
//            $this->load->view('showform',$data);
        $this->load->view('show_res', $data);
        $this->load->view('template/footer');
    }

    public function resdetail() {
        $this->load->view('template/header');

        $id = $this->uri->segment(3);
        $data = [
            'resAll' => $this->Rest->_resdetil($id),
            'resid' => $this->food->_foodbyid($id),
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
//                print_r($data);
        $this->load->view('add_recommend', $data);

        $this->load->view('template/footer');
    }

    public function addrecom() {   // เช็ค ร้านที่มีอยู่ใน DB หลังจากกด Button submit
        $this->load->view('template/header');
        $ids = $this->recom->getrecom();
        $Dsele = $this->input->post('searchable');
        $Dseles = $Dsele;
        $cpho = count($Dsele);
        for ($i = 0; $i < $cpho; $i++) {
            $data = array(
                'recom_id' => '',
                'res_id' => $Dsele[$i],
            );
            if ($data['res_id'] != $ids) {
                ?>
                <script type="text/javascript">
                    alert("ร้านที่เลือกมีอยูแล้ว");
                </script>
                <?php
                $data = array(
                    'recom' => $this->recom->_showrecom()
                );
                $this->load->view('show_recom', $data);
                $this->load->view('template/footer');
            } else {
                $this->recom->_addrecom($data);
                redirect('index.php/usersingin');
                $this->load->view('template/footer');
            }
        }
    }

    public function showrecom() {
        $this->load->view('template/header');
        $data = array(
            'recom' => $this->recom->_showrecom()
        );
        $this->load->view('index', $data);
//        print_r($data);
        $this->load->view('template/footer');
    }

    public function show_recom() {
        $this->load->view('template/header');
        $data = array(
            'recom' => $this->recom->_showrecom()
        );
        $this->load->view('show_recom', $data);
//        print_r($data);
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