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

    
    public function index(){ //เรียก id มาเพื่อเรียกใช้ในการเปรียบเทียบ select
       $data= ['resid'=>$this->food->_showres(), 
            'cateid'=>$this->food->_showcate()   
            ];
     $this->load->view('add_food',$data);
     
    }
    public function addfood(){
        

        $data=array(
            'food_id' => '',
            'food_name' => $this->input->post('Food'),
            'detail' => $this->input->post('Detail'),
            'res_id' => $this->input->post('Restaurant'),
            'cate_id' => $this->input->post('Category'),
//            'photo_id' => $id+1


        );
        
        $idfood = $this->food->_addfood($data);
        

       $id = $this->food->_countphoto();
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
//                        'upload'=> $data,
                        'photo_id'=> $id+1,
                        'photo_name' => $data['file_name'],
                        'detail' => $this->input->post('detail_photo'),
                        'food_id' => $idfood
                        ); 
                        print_r($data2)   ;
                     $this->upload_model->_upload($data2);      
		 
                      
		}

        
      redirect('index.php/food_controller/showfood');
        
    }
    
    public function showres(){
//        $this->food->_showres();
        $data= [
            
            'resid'=>$this->food->_showres(),
            'cateid'=>$this->food->_showcate()   
            ];
      
        $this->load->view('add_food',$data);
       
        
    }
    
     public function showdetail(){
        $id =$this->uri->segment(3);
        
       
        
        $data= array(
                'id'=>$id,
                'foodAll'=>$this->food->_showdetil()
                );
//            echo json_encode($data);         
          $this->load->view('showfood_detail',$data);
         
        }
    public function showfood(){
//        $this->food->_showfood();

        $data=array(
                   
                   'foodAll'=>$this->food->_showfood()
                   
        );
//echo json_encode($data);
          $this->load->view('show_food',$data);
 
        }
        function getfood(){
        $this->food->_showfood();  
        $id=$this->uri->segment(3);        
            $data=array(
                   'id'=>$id,
                    'cateid'=>$this->food->_showcate(),
//                   'resid'=>$this->food->_showres(),
                   'up'=>$this->food->_getfood($id)
                    );    
          $this->load->view('upfood',$data);
        }
        function updatefood(){
            $data=array(
        'food_id' => $this->input->post('id'),
        'food_name' => $this->input->post('Food'),
        'detail' => $this->input->post('Detail'),
        'res_id' => $this->input->post('Restaurant'),  
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