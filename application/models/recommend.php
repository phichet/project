<?php

class Recommend extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function _addrecom($data) {
        $this->db->insert('res_recommend', $data);
        
        return $this->db->insert_id();
    }
    function getrecom() {
        $data = array();
        $query = $this->db->get('res_recommend');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }
    
    function _showrecom() {
        $data = array();
        $query = $this->db->from('res_recommend')
                ->join('restaurants', 'restaurants.res_id = res_recommend.res_id')
                ->group_by('res_recommend.res_id')
                ->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function delrecom($data) {
        $this->db->where('recom_id', $data)
                ->delete('res_recommend');
    }

}

?>