<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usersingin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('recommend', 'recom');
        $this->load->model('restaurantsmodel', 'Rest');
    }

    public function index() {
        $this->load->view('template/header');
        $data = array(
            'recom' => $this->recom->_showrecom(),
            'imgrecom' => $this->recom->_showreimg(),
            'resAll' => $this->Rest->showlimit()
        );
//        echo json_encode($data);
        $this->load->view('index',$data);

        $this->load->view('template/footer');
    }

    public function home() {
        $this->load->view('template/header');


        if (($this->session->userdata('user_name') != "")) {
            $this->welcome();
        } else {
            $this->load->library('facebook');
            $login_url = $this->facebook->get_login_url();
            $data = array("login_url" => $this->facebook->get_login_url());
            $this->load->view("login_view", $data);
//            $this->load->view('template/header', $data);
            $this->load->view('template/footer');
        }
    }

    public function welcome() {
        $data['title'] = 'Welcome';
        $this->load->view('header_view', $data);
        $this->load->view('welcome_view.php', $data);
    }

    public function login() {
        $email = $this->input->post('email');
        $password = md5($this->input->post('pass'));

        $name = $this->user_model->sele_user($email);
        $check = $this->user_model->login($email, $password);


        if ($check) {
            $dataChack = array(
                'name' => $name,
                'username' => $email,
                'password' => $password,
                'logged' => true
            );

            $this->session->set_userdata($dataChack);
            redirect('index.php/usersingin/welcome');
        } else {
            $this->session->set_flashdata('msg_error', 'password');

            redirect('index.php/login');
        }
    }

    public function thank() {
        $data['title'] = 'Thank';
        $this->load->view('header_view', $data);
    }

    public function registration() {

        $this->load->library('form_validation');
// field name, error message, validation rules
        $this->form_validation->set_rules('name', 'User Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_view');
        } else {

            $this->user_model->add_user();
            redirect('index.php/login');
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('index.php/login');
    }

}

?>