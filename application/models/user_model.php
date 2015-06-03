<?php
class User_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 function login($email,$password)
 {
  $result=$this->db->where("email",$email)->where("password",$password)->count_all_results('user_web');
return $result>0 ?TRUE : FALSE;
 
 }
 function sele_user($email){
     return $query = $this->db->select("name")->where('email',$email)->get('user_web')->row();
 }

 public function add_user(){
  $data=array(
    'name'=>$this->input->post('name'),
    'email'=>$this->input->post('email'),
    'password'=>md5($this->input->post('password'))
  );
  if($this->db->select('email')->where('email',$data['email'])->get('user_web')->row_array())
  {
    $this->load->view('error');
  }
 else {      
    $this->db->insert('user_web',$data);
  }
 }
 function _checkuser($userdata)
        {
            $data=$this->db->where('email',$data['email'])->count_all_results('user_web');
            //print_r($data);
            return $data;
        }

        function _showUser()
        {
            $query = $this->db->get('user_web');
        return $query->result();
        }
        
        
        
        }

?>

