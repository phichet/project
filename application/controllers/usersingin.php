<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usersingin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('user');
        $this->load->model('recommend', 'recom');
        $this->load->model('restaurantsmodel', 'Rest');
        $this->load->library('session');
    }

    public function index() {
        $this->load->library('session');
        $this->session->userdata('username');
        $this->load->view('template/header');
        $data = array(
            'recom' => $this->recom->_showrecom(),
            'imgrecom' => $this->recom->_showreimg(),
            'resAll' => $this->Rest->showlimit()
        );
//        echo json_encode($data);
        $this->load->view('index', $data);

        $this->load->view('template/footer');
    }

    public function home() {
        $this->load->view('template/header');


        if (($this->session->userdata('username') != "")) {
            redirect('index.php');
        } else {
            $this->load->library('facebook');
            $login_url = $this->facebook->get_login_url();
            $data = array(
                "login_url" => $this->facebook->get_login_url(),
                "email" => $this->input->post('email'),
                "password" => md5($this->input->post('pass'))
            );
//            print_r($data);
            $this->load->view("login_view", $data);
//            $check = $this->user_model->loginface($email);
//            $this->load->view('template/header', $data);
            $this->load->view('template/footer');
        }
    }

    public function welcome() {
        $data['title'] = 'Welcome';
        $this->load->view('header_view', $data);
        $this->load->view('welcome_view.php', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('index.php');
    }

    public function login() {
        $this->load->view('template/header');
        $this->load->model('user_model');
//        $this->load->library('facebook');
//        $login_url = $this->facebook->get_login_url();
//        $data = array("login_url" => $this->facebook->get_login_url());
//        $this->load->view('login_view');
//        $login_url = $this->facebook->get_login_url();
        $email = $this->input->post('email');
        $password = md5($this->input->post('pass'));

        $datauser = $this->user_model->sele_user($email);
//        $check1 = $this->user_model->login($email, $password);
        $check = $this->user_model->login($email, $password);
        if ($check > 0) {
            $sessiondata = array(
                'user' => $datauser->name,
                'username' => $email,
                'password' => $password,
                'logged' => true
            );
//
            $this->session->set_userdata($sessiondata);
//            print_r($sessiondata);
            redirect('index.php', $sessiondata);
////            redirect('index.php/usersingin/welcome');
        } else {
            $this->session->set_flashdata('msg_error', 'password');
            $this->login();
//            redirect('index.php/home');
        }
        $this->load->view('template/footer');
    }

    public function thank() {
        $data['title'] = 'Thank';
        $this->load->view('header_view', $data);
    }

    public function registration() {
        $this->load->view('template/header');
        $this->load->library('facebook');
//        $login_url = $this->facebook->get_login_url();
//        $data = array("login_url" => $this->facebook->get_login_url());

        $this->load->library('form_validation');
// field name, error message, validation rules
        $this->form_validation->set_rules('name', 'User Name', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[15]');
        $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
        
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration_view', $data);
        } else {
            $this->user_model->add_user($data);
            $datauser = $this->user_model->sele_user($email);
//        $check1 = $this->user_model->login($email, $password);
            $check = $this->user_model->login($email, $password);
            if ($check > 0) {
                $sessiondata = array(
                    'user' => $datauser->name,
                    'username' => $email,
                    'password' => $password,
                    'logged' => true
                );
//
                $this->session->set_userdata($sessiondata);
//            print_r($sessiondata);
                redirect('index.php', $sessiondata);
            }
            $this->load->view('template/footer');
        }
    }

    public function showuser_facebook() {
        $this->load->view('template/header');
        $this->load->library('facebook');
        $this->load->model('register', 're');
        $data = array('userdata' => $this->facebook->get_user());
        $data['userdata']['name'];
        $data['userdata']['first_name'];
        $data['userdata']['last_name'];
        $data['userdata']['email'];
        $data['userdata']['gender'];
        $data['userdata']['locale'];
        $email = $data['userdata']['email'];
        print_r($data);
        $datauser = $this->user_model->sele_user($email);
        $usr_result = $this->user_model->loginface($email);

        if ($usr_result > 0) { //active user record is present
            //set the session variables
            $sessiondata = array(
                'user' => $datauser->name,
                'username' => $email,
                'loginuser' => TRUE
            );
            $this->session->set_userdata($sessiondata);
            redirect('index.php');
        } else {

//            $this->regis_facebook($data);
            $this->load->view("regis_facebook", $data);
//            
            $this->load->view('template/footer');
        }
    }

    public function user_face() {
        $this->load->view('template/header');
        $data = $this->showuser_facebook();
        $this->load->view("regis_facebook", $data);
        $this->load->view('template/header');
    }

    public function regis_facebook() {
//        $this->load->view('template/header');
        $this->load->library('facebook');
        $this->load->model('register', 're');
        $this->load->model('user_model');

        $email = $this->input->post('email');
        $data2 = array(
            'user_id' => '',
            'name' => $this->input->post('name'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'address' => $this->input->post('locale'),
            'password' => md5($this->input->post('password')),
//                'group'=>  $this->input->post('group')
        );

        $this->re->regis($data2);
        $usr_result = $this->user_model->loginface($email);
        $datauser = $this->user_model->sele_user($email);
//        }
        if ($usr_result > 0) {
            $sessiondata = array(
                'user' => $datauser->name,
                'username' => $email,
                'loginuser' => TRUE
            );
            $this->session->set_userdata($sessiondata);
            redirect('index.php', $sessiondata);
        }
    }

    public function showuser() {
        $this->load->view('template/header');
//        $check1 = $this->showuser_facebook();
//        echo $check1;
        $data = array();
        $data['user'] = $this->user_model->_showUser();
        $this->session->userdata($data);
//         foreach($data as $i)
//         {
//             foreach($i as $j){
//                 echo $j."<br>";
//                 
//             }
//         }
        //      print_r($data2);
        $this->load->view('_user', $data);
//        print_r($data);

        $this->load->view('template/footer');
    }

}

?>