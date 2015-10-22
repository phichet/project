<?php

class Category_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('category', 'cate');
        
    }

    function index() {
        $this->load->view('template/header');
        $this->load->view('add_cate');
        $this->load->view('template/footer');
    }

    function addcate() {
        $this->load->view('template/header');
        $cate = array(
            'cate_id' => '',
            'cate_name' => $this->input->post('catename')
        );
        $this->cate->_addcate($cate);
        $this->load->view('template/footer');
        redirect('index.php/category_controller/showcate');
    }

    function showcate() {
        $this->load->view('template/header');
        $data['cateAll'] = $this->cate->_showcate();
        $this->load->view('show_cate', $data);
        $this->load->view('template/footer');
    }

    function getcate() {
        $this->load->view('template/header');
        $id = $this->uri->segment(3);
        $data = array(
            'cate' => $this->cate->_getcate($id)
        );
        $this->load->view('up_cate', $data);
        $this->load->view('template/footer');
    }

    function upcate() {
        $this->load->view('template/header');
        $data = array(
            'cate_id' => $this->input->post('id'),
            'cate_name' => $this->input->post('catename'),
        );
        $this->cate->_upcate($data);
        $this->load->view('template/footer');
        redirect('index.php/category_controller/showcate');
    }

    function delcate() {
        $this->load->model('category', 'cate');
        $data = $this->uri->segment(3);
        $this->cate->_delcate($data);
        redirect('index.php/category_controller/showcate');
    }

}

?>
