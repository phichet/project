<?php
class Food_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('food');
//        $this->load->view('template/backend');
        $this->load->model('restaurantsmodel');
        $this->load->library('upload'); 
        $this->load->library('image_lib'); 
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
        );
        $idfood = $this->food->_addfood($data);
         //----------------//
        $detail=$this->input->post('detail_photo'); 
        $files = $_FILES;
        $cpho = count($_FILES['userfile']['name']);

    for($i=0; $i<$cpho; $i++)
    {
         $config = array(
                'file_name'=>rand(100, 1000)."_".date("D_m_y_H_i_s"),
                'upload_path'=>'photo',
                'allowed_types'=>'gif|jpg|png',
                'max_size'=>'2000'
            );
		$this->upload->initialize($config);
        
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i]; 

		if ( ! $this->upload->do_upload()){
			echo 'ไม่พบไฟล์!!!';             
                }	
		else{
                   $data = $this->upload->data();
                   $config=array(
                    'image_library' =>'gd2',
                    'source_image'  => 'photo/'. $data['file_name'],
                    'width'         =>  '600',
                    'height'        =>  '300'
                    );             
                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                
                $data2 = array( 
                    'photo_id' => '',
                    'photo_name' =>$data['file_name'],
                    'detail' => $detail[$i],
                    'food_id' => $idfood
                );
            $this->food->_upload($data2);   
                } 
        } 
        redirect('index.php/food_controller/showfood');
    }

    public function showres(){
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
//                print_r($data);         
          $this->load->view('showfood_detail',$data);
         
        }
    public function showfood(){
        $data=array(             
                   'foodAll'=>$this->food->_showfood()     
        );

          $this->load->view('show_food',$data);
        }
        function getfood(){
        $this->food->_showfood();  
        $id=$this->uri->segment(3);        
            $data=array(
                   'id'=>$id,
                   'cateid'=>$this->food->_showcate(),
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
