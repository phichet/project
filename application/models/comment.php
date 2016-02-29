<?php
class Restaurantsmodel extends CI_Model {

    function _construct() {
        parent::__construct();
    }
    function _addcomment($data) {
        $this->db->insert('comments', $data);
        
    }
    function _showcomment() {
        $data = array();
        $query = $this->db->get('comments');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

}    
?>