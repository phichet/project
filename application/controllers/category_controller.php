<?php

class Category_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('category', 'cate');
        $this->load->view('template/backend');
    }

    function index() {
        $this->load->view('add_cate');
    }

    function addcate() {
        $cate = array(
            'cate_id' => '',
            'cate_name' => $this->input->post('catename')
        );
        $this->cate->_addcate($cate);

        redirect('index.php/category_controller/showcate');
    }

    function showcate() {

        $data['cateAll'] = $this->cate->_showcate();
        $this->load->view('show_cate', $data);
    }

    function getcate() {

        $id = $this->uri->segment(3);
        $data = array(
            'cate' => $this->cate->_getcate($id)
        );
        $this->load->view('up_cate', $data);
    }

    function upcate() {
        $data = array(
            'cate_id' => $this->input->post('id'),
            'cate_name' => $this->input->post('catename'),
        );

        $this->cate->_upcate($data);
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
