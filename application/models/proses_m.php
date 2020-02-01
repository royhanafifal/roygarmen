<?php
class Proses_m extends CI_Model{
    function insert($table, $data){
        $query = $this->db->insert($table, $data);
        return $query;  
    }
}