<?php
class Group_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('group');
        $this->load->view('template/backend');
        
    }
        public function index(){
            $this->load->view('add_group');
        }
        function addgroup(){
            $data=array(
            'group_id' => '',
            'group_name' => $this->input->post('Group')
            
        );
        
        $this->group->_addgroup($data);
        redirect('index.php/group_controller/showgroup');
        }
        function showgroup(){

        $data['groupAll']=$this->group->_showgroup();
        $this->load->view('show_group',$data);
        }
        function getgroup(){       
        $id=$this->uri->segment(3);        
            $data=array(
                    'group'=>$this->group->_getgroup($id)
                    );    
          $this->load->view('up_group',$data);
        
    }
        
        function upgroup(){     
        $data=array(
            'group_id'=>  $this->input->post('id'),
            'group_name'=>  $this->input->post('Group'),
                    );
                    
                    $this->group->_upgroup($data);
          redirect('index.php/group_controller/showgroup');
   
        }
        
        function delgroup(){           
            $data=$this->uri->segment(3);    
            $this->group->_delgroup($data);
            redirect('index.php/group_controller/showgroup');
        
        }
        
        
}
 ?>