<?php

class Restaurantsmodel extends CI_Model{

function _construct(){
        parent::__construct();

    }
    
    function _addres($data1){
        $this->db->insert('restaurants',$data1);
    }
    function showAll(){
        $query = $this->db->get('restaurants');
        return $query->result();
    }
    
    function _resdetil($id){
        
     $data=array();
     $query = $this->db->where('res_id',$id)
                         ->get('restaurants');
            

    if($query->num_rows()>0){
            foreach($query->result_array()as$row){
                $data[]=$row;
            }
        }
        $query->free_result();
        return $data;
    }
    
    function upres($id){
       return $this->db->get_where('restaurants', array('res_id' => $id))->row_array();
            
    }
    function update($data) {
        $this->db->where('res_id',$data['res_id'])->update('restaurants',$data);  
    }
    
    function _showres(){
     $data=array();
     $query = $this->db->get('restaurants');
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
        $this->db->where('res_id',$data)
                ->delete('restaurants');
    }
    
}
?>