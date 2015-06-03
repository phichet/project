<?php
class Manage extends CI_Model {
    public function __construct()
 {
  parent::__construct();
}
public function _showjoin()
        { 
    $data=array();
            $this->db->from('restaurants');
            $this->db->join('manage', 'manage.res_id = restaurants.res_id');
            $this->db->join('user', 'user.user_id = manage.user_id');
            //$this->db->join('user_web', 'user_web.userweb_id = manage.userweb_id');

            $query = $this->db->get(); 
            

    if($query->num_rows()>0){
            foreach($query->result_array()as$row){
                $data[]=$row;
            }
        }
        $query->free_result();
        return $data;
}





}
?>

