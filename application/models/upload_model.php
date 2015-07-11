<?php
class Upload_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

     function _upload($data2,$detail) {  
         
         foreach ($data2['photo_name'] as $name) {
//           ติดไว้่อน
                
              
              
                $tt=$this->db->insert('photo',array(
                'photo_id'=>'',
                'photo_name'=>$name,
                'detail'=>'',
                'food_id'=>$data2['food_id']
                
                ));
            
             }
//        $data=array(
//            'photo_id' => '',
//            'photo_name'=>$data2['photo_name'],
////            'detail'=>$data2['detail'],
////            'food_id'=>$data2['food_id']
//        );
//                $this->db->insert('photo',$data);
               return $this->db->insert_id(); 
            }
 
            
            
            
            
}
    

?>
