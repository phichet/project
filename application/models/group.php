<?php
class Group extends CI_Model  {

    function __construct() {
        parent::__construct();
    }
    function _addgroup($data){
        $this->db->insert('group',$data);
        
    }
    
    function _showgroup(){
       
        $data=array();
     $query = $this->db->get('group');

    if($query->num_rows()>0){
            foreach($query->result_array()as$row){
                $data[]=$row;
            }
        }
        $query->free_result();
        return $data;
        
    }
    function _getgroup($id){
       return $this->db->get_where('group', array('group_id' => $id))->row_array();
    }
    function _upgroup($data) {
        $this->db->where('group_id',$data['group_id'])->update('group',$data);
    }
    
    function _delgroup($data){
        
        $this->db->where('group_id',$data)
                ->delete('group');
    }
    
    
    
    
    
    
    
    
    
}
?>