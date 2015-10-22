<?php
class Page2_Controller extends CI_Controller {

	public function __construct(){
		parent::__construct();

        // To use site_url and redirect on this controller.
       // $this->load->helper('url');
	}
        function index (){
            $this->load->view('page2');
        }
    }
?>
