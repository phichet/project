<?php
class Category extends CI_Model{
   function __construct() {
        parent::__construct();
    }
    function _addcate($data){
        $this->db->insert('category',$data);
    }
    function showcate(){
         $data=array();
     $query = $this->db->get('category');

    if($query->num_rows()>0){
            foreach($query->result_array()as$row){
                $data[]=$row;
            }
        }
        $query->free_result();
        return $data;
    }
    function delID($data){
        //$data['res_id'] = $res_id;
        $this->db->where('cate_id',$data)
                ->delete('category');
    }
    
    
    
}

?>
