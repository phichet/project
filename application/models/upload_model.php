<?php
class Upload_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

     function _upload($data2) {
        $data=array(
            'photo_id' => $data2['photo_id'],
            'photo_name'=>$data2['photo_name'],
             'detail'=>$data2['detail'],
            'food_id'=>$data2['food_id']
        );
                $this->db->insert('photo',$data);
                
            }
     
}
    

?>