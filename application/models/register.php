<?php

class Register extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    function regis($data2) {
        $datafa = array(
//        'user_id' => $userdata['id'],
            'name' => $data2['name'],
            'first_name' => $data2['first_name'],
            'last_name' => $data2['last_name'],
            'email' => $data2['email'],
            'gender' => $data2['gender'],
            'address' => $data2['address'],
            'password' => $data2['password']
        );
        //echo json_encode($datafa['user_id']);

        $this->db->insert('user', $datafa);
    }

    function checkregis($user) {
        return $this->db->select('user_id')->where('user_id', $user['id'])->get('user')->row_array();
    }

    function _checkuser($user) {
        $data = $this->db->where('email', $user['userdata']['email'])->count_all_results('user');
//        print_r($user['userdata']['email']);
//        return $data > 0 ? TRUE : FALSE;
        return $data;
    }

    function login($email, $password) {
        $this->db->where("email", $email);
        $this->db->where("password", $password);

        $query = $this->db->get("user");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                //add all data to session
                $newdata = array(
                    'user_id' => $rows->id,
                    'name' => $rows->name,
                    'email' => $rows->email,
                    'logged_in' => TRUE,
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
    }

    public function add_user() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post(md5('password'))
        );
        $this->db->insert('user', $data);
    }

}
?>

