<?php

class Upload_controller extends CI_Controller {
     

	function __construct()
	{
		parent::__construct();
                $this->load->model('upload_model');
                $this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_view', array('error' => ' ' ));
	}

	function do_upload(){
	     
		$config['upload_path'] = 'photo';
		$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_size']	= '1024';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
                $this->load->library('upload');
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors('error'));
                       	$this->load->view('upload_view', $error);
		}
		else
		{
			$data = $this->upload->data();
                        
                       // print_r($data);   
                    $data2 =array(
                        'upload'=> $data,
                        'photo_id' => '',
                        'photo_name' => $this->input->post('file_name')
                        ); 
                         
                    $this->upload_model->_upload($data2);      
		$this->load->view('upload_success',$data2);
                      
		}
	}
}

?>
