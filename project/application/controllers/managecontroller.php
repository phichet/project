<?php
class Managecontroller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('manage');
        }
        public function index() 
                {
       $data1['manageAll']=$this->manage->_showjoin();
        $this->load->view('manage_view',$data1);
            //print_r($data1);
            
                
            
        }
}

?>

