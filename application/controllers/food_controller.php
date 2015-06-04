<?php
class Food_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('food');
        $this->load->view('template/backend');
        $this->load->model('restaurantsmodel');
        $this->load->model('upload_model');
        $this->load->library('upload');
        
        
    }

    
    public function index(){
       $data=array(
            'resid'=>$this->food->_showres() 
                );
     $this->load->view('food_view',$data);
     
    }
    public function addfood(){
        $id = $this->food->_countphoto();

        $data=array(
            'food_id' => '',
            'food_name' => $this->input->post('Food'),
            'detail' => $this->input->post('Detail'),
            'res_id' => $this->input->post('Restaurant'),  
            'photo_id' => $id+1


        );
        
       $this->food->_addfood($data);
               //$config['file_name']=$this->input->post($data);
		$config['upload_path'] = 'photo';
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size']	= '1024';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		$this->upload->initialize($config);
                
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors('error'));
                      //	$this->load->view('upload_view', $error);
		}
		else
		{
			$data = $this->upload->data();
                        
                    $data2 =array(
                        'upload'=> $data,
                        'photo_id'=> $id+1,
                        'photo_name' => $data['file_name'],
                        'detail' => $this->input->post('detail_photo')
                        ); 
                         
                     $this->upload_model->_upload($data2);      
		 
                      
		}
	
   
       redirect('index.php/food_controller/showfood');
        
    }
    
    public function showres(){
        $this->food->_showres();
        $data= array('resid'=>$this->food->_showres());
      
        $this->load->view('food_view.php',$data);
       
        
    }
     public function showdetail(){
        $id =$this->uri->segment(3);
        
       
        
        $data= array(
              'foodAll'=>$this->food->_showdetil($id)
                );
                  
          $this->load->view('showfood_detail',$data);
            
        }
    public function showfood(){
            $this->food->_showfood();
           
        
         $data=array(
                   'foodAll'=>$this->food->_showfood()
                   
        );
                        
          $this->load->view('show_food',$data);
            
        }
        function getfood(){
        $this->food->_showfood();  
        $id=$this->uri->segment(3);        
            $data=array(
                   'resid'=>$this->food->_showres(),
                   'up'=>$this->food->getfood($id)
                    );    
          $this->load->view('upfood',$data);
        }
        function updatefood(){
            $data=array(
        'food_id' => $this->input->post('id'),
        'food_name' => $this->input->post('Food'),
        'detail' => $this->input->post('Detail'),
        'res_id' => $this->input->post('Restaurant'),  //รับค่าจากตารางร้านอาหารเสมอ
        'user_id' => $this->input->post('user_id'),
        'cate_id' =>$this->input->post('cate_id'),
       
        
                    );
                    $this->load->model('food');
                     
                   $this->food->upfood($data);
                    redirect('index.php/food_controller/showfood');
        }
        function delfood(){
            $this->load->model('food','Del');
            $data=$this->uri->segment(3);    
            $this->Del->delID($data);
            redirect('index.php/food_controller/showfood');
        }
    
    
}
?>