<?php

Class User extends CI_Model {

    function login($email, $password) {
//        $this->db->select('user_id, email, password');
//        $this->db->from('user');
////        $this->db->where('name = ' . "'" . $username . "'");
//        $this->db->where('email = ' . "'" . $email . "'");
//        $this->db->where('password = ' . "'" . MD5($password) . "'");
//        $this->db->limit(1);
//
//        $query = $this->db->get();
//
//        if ($query->num_rows() == 1) {
//            return $query->result();
//        } else {
//            return false;
//        }
        'sdfmsdklsdlfmsdkf';
    }

    function _checkuser($userdata) {
        $data = $this->db->where('email', $userdata['email'])->count_all_results('user');
        //print_r($data);
        return $data;
    }

    function _showuser() {
        $query = $this->db->get('user');
        $data = $query->result();
        return data;
    }

}

?>