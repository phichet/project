<?php

class Food extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function _addfood($data) {
        $this->db->insert('food', $data);
        return $this->db->insert_id();
    }

    function _showfood() {
        $data = array();
        $query = $this->db->from('food')
                ->join('restaurants', 'restaurants.res_id = food.res_id')
                ->join('photo', 'photo.food_id = food.food_id')
                ->join('category', 'category.cate_id = food.cate_id')
                ->group_by('food.food_id')
                ->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function _foodbyid($id) {
        $data = array();
        $query = $this->db->from('food')
                ->join('restaurants', 'restaurants.res_id = food.res_id')
                ->join('photo', 'photo.food_id = food.food_id')
                ->join('category', 'category.cate_id = food.cate_id')
                ->group_by('food.food_id',$id)
                ->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function _showdetil() {
        $data = array();
        $query = $this->db->select('food.food_id,food.food_name,food.res_id,food.detail,food.cate_id,
                restaurants.res_id,restaurants.res_name,restaurants.address,restaurants.phone,restaurants.price,restaurants.parking,
                category.cate_id,category.cate_name,photo.food_id,photo.photo_name')
                ->from('food', COUNT('food_id'))
                ->join('restaurants', 'restaurants.res_id = food.res_id')
                ->join('photo', 'photo.food_id = food.food_id')
                ->join('category', 'category.cate_id = food.cate_id')
                ->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function _getfood($id) {
//       return $this->db->get_where('food', array('food_id' => $id))->row_array();
        $data = array();
        $query = $this->db->from('food')
                ->join('restaurants', 'restaurants.res_id = food.res_id')
                ->join('photo', 'photo.food_id = food.food_id')
                ->join('category', 'category.cate_id = food.cate_id')
                ->where('food.food_id', $id)
                ->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function upfood($data) {
        $this->db->where('food_id', $data['food_id'])
                ->update('food', $data);
    }

    function _showres($id) {
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

    function _showcate() {
        $data = array();
        $query = $this->db->get('category');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array()as $row) {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
    }

    function delID($data) {
        $this->db->where('food_id', $data)
                ->delete('food');
    }

    function _upload($data2) {
        $data = array(
            'photo_id' => $data2['photo_id'],
            'photo_name' => $data2['photo_name'],
            'detail' => $data2['detail'],
            'food_id' => $data2['food_id'],
        );
        $this->db->insert('photo', $data);
    }

    function _getres($id) {

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

}
?>

