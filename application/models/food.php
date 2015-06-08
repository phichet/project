<?php
class Food extends CI_Model  {

    function __construct() {
        parent::__construct();
    }
    
    function _addfood($data){
        $this->db->insert('food',$data);
    }
    function _showfood(){
         $data=array();
     $query = $this->db->from('food')
                        ->join('restaurants', 'restaurants.res_id = food.res_id')
                        ->join('photo','photo.photo_id = food.photo_id')
                        ->join('category','category.cate_id = food.cate_id')
                        ->get();
            

    if($query->num_rows()>0){
            foreach($query->result_array()as$row){
                $data[]=$row;
            }
        }
        $query->free_result();
        return $data;
    }
    function getfood($id){
       return $this->db->get_where('food', array('food_id' => $id))->row_array();
    }
    
    function upfood($data) {
        $this->db->where('food_id',$data['food_id'])->update('food',$data);
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
    function delID($data){
        //$data['res_id'] = $res_id;
        $this->db->where('food_id',$data)
                ->delete('food');
    }
    function _countphoto(){
       return $this->db->count_all_results('photo');

    }
    function _showdetil($id){
      $data=array();
     $query = $this->db->from('food')
                        ->join('restaurants', 'restaurants.res_id = food.res_id')
                        ->join('photo','photo.photo_id = food.photo_id')
                        ->join('category','category.cate_id = food.cate_id')
                        ->where('food_id',$id)
                        ->get();
            

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

