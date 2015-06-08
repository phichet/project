<?php
class Category extends CI_Model{
   function __construct() {
        parent::__construct();
    }
    function _addcate($cate){
        $this->db->insert('category',$cate);
    }
    function _showcate(){
       
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
    function _getcate($id){
       return $this->db->get_where('category', array('cate_id' => $id))->row_array();
    }
    function _upcate($data) {
        $this->db->where('cate_id',$data['cate_id'])->update('category',$data);
    }
    
    function _delcate($data){
        //$data['res_id'] = $res_id;
        $this->db->where('cate_id',$data)
                ->delete('category');
    }
    
    
    
}

?>
