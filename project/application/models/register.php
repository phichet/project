<?php
class Register extends CI_Model{
    
    function _construct(){
        parent::__construct();
    }


    function regis($userdata){
        $datafa=array(
        'user_id' => $userdata['id'],
        'name' => $userdata['name'],
        'first_name' => $userdata['first_name'],
        'last_name' =>$userdata['last_name'],
        'email' => $userdata['email'],    
        'gender' => $userdata['gender'],    
        'address' => $userdata['locale'], 
        );
        //echo json_encode($datafa['user_id']);
        
        $this->db->insert('user',$datafa);
       
        
    }
    
            function checkregis($Udata){
        return $this->db->select('user_id')->where('user_id',$Udata['id'])->get('user')->row_array();

    }

     function login($email,$password)
    {
            $this->db->where("email",$email);
            $this->db->where("password",$password);

            $query=$this->db->get("user");
            if($query->num_rows()>0)
            {
             foreach($query->result() as $rows)
             {
              //add all data to session
              $newdata = array(
                'user_id'  => $rows->id,
                'name'  => $rows->name,
                'email'    => $rows->email,
                'logged_in'  => TRUE,
              );
             }
             $this->session->set_userdata($newdata);
             return true;
            }
            return false;
           }
           public function add_user()
           {
            $data=array(
              'name'=>$this->input->post('name'),
              'email'=>$this->input->post('email'),
              'password'=>$this->input->post(md5('password'))
            );
            $this->db->insert('user',$data);
 }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
?>

