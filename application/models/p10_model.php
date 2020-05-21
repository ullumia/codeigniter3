<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P10_model extends CI_Model {
    public function get(){
        $query = $this->db->order_by('year asc')->get('data1');
        
        return $query->result_array();
    }

    public function data1(){
        $query = $this->db->query('SELECT SUM(sales) AS total_sales, 
        SUM(purchase) AS total_purchase FROM data1');
        return $query->row();
    }
}
?>