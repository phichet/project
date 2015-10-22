<?php
class Googlemap_controller extends CI_Controller{
        function index() {
        

                // Load the library
                $this->load->library('googlemaps');
                $config = array();
                $config['center'] = 'thailand, uttaradit';
                $config['map_height'] = '550';
                $config['map_width'] = '750';
                $config['zoom'] = '12';
                
               
                $marker = array();
                $marker['position'] = '17.628087, 100.097616';
                $this->googlemaps->add_marker($marker);
                 echo json_encode($marker['position']);

                
                // Initialize our map. Here you can also pass in additional parameters for customising the map (see below)
                $this->googlemaps->initialize($config);
                // Create the map. This will return the Javascript to be included in our pages <head></head> section and the HTML code to be
                // placed where we want the map to appear.
                $data['map'] = $this->googlemaps->create_map();
                // Load our view, passing the map data that has just been created
                $this->load->view('addformres', $data);
    }
}
?>

