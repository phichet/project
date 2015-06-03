<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('form');
  }

  function index()
  {
    
    if(($this->session->userdata('user_name')!=""))
             {
              $this->welcome();
             }
             else{  
             $this->load->library('facebook'); 
             $login_url = $this->facebook->get_login_url();
             $data= array("login_url"=>$this->facebook->get_login_url());
             $this->load->view("login_view",$data);
  }

}
}

?>