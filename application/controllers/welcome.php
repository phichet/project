<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}
        function index(){
         // $this->load->library('facebook'); 
        
       // $login_url = $this->facebook->get_login_url();
        
       //echo "<a href='$login_url'>Facebook Connect</a>";
      
                
    }
    function Diseplay (){
        $this->load->library('facebook');
        $this->load->model('register','re');
        $data=array('userdata'=>$this->facebook->get_user());
        $Udata=$data['userdata'];
        $this->load->view('template/backend');
    //echo json_encode($test['id']);
        //print_r($data);
       
        $check = $this->re->checkregis($Udata);
       
    
        if($check!=null){
            $this->load->view('views_user',$data);
            
        }else{
            
        $this->re->regis($data['userdata']);
        $this->load->view('views_user',$data);
        }
        
      
    }
   
    function addform(){
           redirect('formres_controller');
        //$this->load->library('facebook');
       // $data=$this->uri->segment(3);
         // $data1=array('userdata'=>$this->facebook->get_user($data));
          //echo json_encode($data1);
       //$this->load->view('addformres',$data1);
      
    }
    function show(){
       redirect('formres_controller'); 
    }
}
?>