<?php

class Regis_controller extends CI_Controller {

    function resgisuser($data) {
        $this->load->library('facebook');
        $data = array('userdata' => $this->facebook->get_user());


        $this->load->model('register', 'Rergis');
        $this->Rergis->regis($data);
    }

}

?>
