<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->library('facebook');
        $this->load->model('register','re');
	}
        function index(){
          $this->load->library('facebook'); 
        
       // $login_url = $this->facebook->get_login_url();
        
       //echo "<a href='$login_url'>Facebook Connect</a>";
      
                
    }
    function Diseplay (){
        $this->load->library('facebook');
        $this->load->model('register','re');
        $data=array('userdata'=>$this->facebook->get_user());
        $Udata=$data['userdata'];
//        $this->load->view('template/backend');
    //echo json_encode($test['id']);
        //print_r($data);
       
        $check = $this->re->checkregis($Udata);
       
    
        if($check!=null){
//            $this->load->view('views_user',$data);
           $this->load->view("_user",$data); 
        }else{
            
        $this->re->regis($data['userdata']);
//        $this->load->view('views_user',$data);
        $this->load->view("_user",$data);
        }
        
      
    }
   
    function log(){
        $this->load->library('facebook'); 
             $login_url = $this->facebook->get_login_url();
             $data= array("login_url"=>$this->facebook->get_login_url());
             $this->load->view("_user",$data);
    }
    function show(){
       redirect('formres_controller'); 
    }
}
?>