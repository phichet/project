<?php
//if (! defined('BASEPATH')) exit ('No direct script access allowed');
class Formres_controller extends CI_Controller{

    public function __construct()
                {
             parent::__construct();
              
             $this->load->library('googlemaps');
             $this->load->model('manage');
//             $this->load->view('template/backend');
             $this->load->model('restaurantsmodel','Rest');
            }
    public function index(){
        $this->load->model('restaurantsmodel','Rest');
        $this->load->library(array('session','facebook'));
        $data=array('userdata'=>$this->facebook->get_user());
       // $udata=$data['userdata'] ;  
      //  print_r($data['userdata']);
            $this->load->model('user');
            
            
         $check = $this->user->_checkuser($data['userdata']);
         
               if ($check=!null){
                
        
        
//                $config = array();
//                $config['center'] = 'thailand, uttaradit';
//                $config['map_height'] = '350';
//                $config['map_width'] = '450';
//                $config['zoom'] = '12';
//                
//               
//                $marker = array();
//                $marker['position'] = '17.628087, 100.097616';
//                $marker['draggable'] = true;
//                
//                $marker['ondragend'] = 'alert(\'You just dropped me at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
//                
//                
//                $mark=$this->googlemaps->add_marker($marker);
//                $data['map'] = $this->googlemaps->create_map();
          
                //echo json_encode($marker['position']);

                
                // Initialize our map. Here you can also pass in additional parameters for customising the map (see below)
//                $this->googlemaps->initialize($config);
                // Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
                // placed where we want the map to appear.
              
                // Load our view, passing the m$this->load->view('addformres', $data);ap data that has just been created
                 
                   $data = array(
                       'email' => $data['userdata'],
//                       'resAll'=>$this->Rest->showall(),
//                       'map'=> $this->googlemaps->create_map(),
//                        'mark'=>$mark
                           );
                
                    $this->session->set_userdata($data);
                   $this->load->view('addformres',$data);
                }else{
                    echo "Chack Login";
                }
            }
    
    public function addres(){
        
        $data1=array(
        'res_id' => '',
        'res_name' => $this->input->post('Restaurant'),
        'lat' => $this->input->post('lat'),
        'lng' => $this->input->post('lng'),
        'address' =>$this->input->post('address'),
        'phone' => $this->input->post('phone'),    
        'price' => $this->input->post('price'),    
        'parking' => $this->input->post('parking'), 
        'detail' => $this->input->post('Detail')
         //'google' =>$this->googlemaps->create_map()
        );      
      $this->load->model('restaurantsmodel','Rest');
       $this->Rest->_addres($data1);
      redirect('index.php/formres_controller/showAllres');
        }
    public function showAllres(){
             $this->load->model('restaurantsmodel','Rest');
                $data['resAll']=$this->Rest->showall();          
//            $this->load->view('showform',$data);
            $this->load->view('show_res',$data);
        }
        public function resdetail(){         
      $id =$this->uri->segment(3);
     $data['resAll']=$this->Rest->_resdetil($id);                 
          $this->load->view('res_detail',$data);           
        }
        public function get_update(){
        $this->load->model('restaurantsmodel','Update');
          $id=$this->uri->segment(3);
            $data=array(
             'up'=>$this->Update->upres($id),
             );       
          $this->load->view('upres',$data);
        }
        function update(){
            $data=array(
        'res_id' => $this->input->post('id'),
        'res_name' => $this->input->post('Restaurant'),
        'lat' => $this->input->post('lat'),
        'lng' => $this->input->post('lng'),
        'address' =>$this->input->post('address'),
        'phone' => $this->input->post('phone'),    
        'price' => $this->input->post('price'),    
        'parking' => $this->input->post('parking'), 
        'detail' => $this->input->post('Detail')
                    );
                    $this->load->model('restaurantsmodel');
                   $this->restaurantsmodel->update($data);
                    redirect('index.php/formres_controller/showAllres');
        }
        public function del(){
            $this->load->model('restaurantsmodel','Del');
            $data=$this->uri->segment(3);    
            $this->Del->delID($data);
            redirect('index.php/formres_controller/showAllres');
        }
        public function showalluser(){
         $this->load->model('user_model','user');
            $data['userAll']=$this->user->_showuser();
            $this->load->view('test_view',$data);  
    }
    
        
}
?>       