<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function login($email, $password) {
        $result = $this->db->where("email", $email)->where("password", $password)->count_all_results('user');
        return $result > 0 ? TRUE : FALSE;
    }
    function loginface($email) {
        $result = $this->db->where("email", $email)->count_all_results('user');
        return $result > 0 ? TRUE : FALSE;
    }

    function sele_user($email) {
        return $query = $this->db->select("name")->where('email', $email)->get('user')->row();
    }

    public function add_user() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        if ($this->db->select('email')->where('email', $data['email'])->get('user')->row_array()) {
            $this->load->view('error');
        } else {
            $this->db->insert('user', $data);
        }
    }

    function _checkuser($userdata) {
        $this->db->where('email', $data['email'])->count_all_results('user');
        //print_r($data);
        return $data;
    }

    function _showUser() {
        $data = array();
        $query = $this->db->get('user');
         if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

}
?>

