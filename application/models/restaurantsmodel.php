<?php

class Restaurantsmodel extends CI_Model {

    function _construct() {
        parent::__construct();
    }

    function _addres($data1) {
        $this->db->insert('restaurants', $data1);
        return $this->db->insert_id();
    }

    function showAll() {
        $data = array();
        $query = $this->db->from('restaurants')
                ->join('img_res', 'img_res.res_id = restaurants.res_id', 'left')
                ->group_by('restaurants.res_id')
                ->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function showlimit() {
        $data = array();
        $query = $this->db->from('restaurants')->limit(4)
                ->join('img_res', 'img_res.res_id = restaurants.res_id')
                ->group_by('restaurants.res_id')
                ->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function _resdetil($id) {

        $data = array();
        $query = $this->db->where('res_id', $id)
                ->get('restaurants');

        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function upres($id) {
        return $this->db->get_where('restaurants', array('res_id' => $id))->row_array();
    }

    function update($data) {
        $this->db->where('res_id', $data['res_id'])->update('restaurants', $data);
    }

    function _showres() {
        $data = array();
        $query = $this->db->get('restaurants');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function delID($data) {
        //$data['res_id'] = $res_id;
        $this->db->where('res_id', $data)
                ->delete('restaurants');
    }

    function _upload($data2) {
        $data = array(
            'imgres_id' => $data2['imgres_id'],
            'imgres_name' => $data2['imgres_name'],
            'imgres_detail' => $data2['imgres_detail'],
            'res_id' => $data2['res_id']
        );
        $this->db->insert('img_res', $data);
    }

    function _showimgres($id) {
        $data = array();
        $query = $this->db->where('res_id', $id)
                          ->get('img_res');
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