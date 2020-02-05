<?php
class Proses_m extends CI_Model{
    function insert($table, $data){
        $query = $this->db->insert($table, $data);
        return $query;  
    }

    function get_edit_pemotongan($id_order){
        $this->db->select('*');
        $this->db->from('proses_pemotongan');
        $this->db->where('id_order', $id_order);
        $query = $this->db->get();
        return $query;
    }

    function get_edit_sablon($id_order){
        $this->db->select('*');
        $this->db->from('proses_sablon');
        $this->db->where('id_order', $id_order);
        $query = $this->db->get();
        return $query;
    }

    function get_edit_penjahitan($id_order){
        $this->db->select('*');
        $this->db->from('proses_penjahitan');
        $this->db->where('id_order', $id_order);
        $query = $this->db->get();
        return $query;
    }

    function get_edit_finishing($id_order){
        $this->db->select('*');
        $this->db->from('proses_finishing');
        $this->db->where('id_order', $id_order);
        $query = $this->db->get();
        return $query;
    }

    function update($table, $data){
        $this->db->where('id_order', $data['id_order']);
        $this->db->where('id_proses', $data['id_proses']);
        $this->db->update($table, $data);
      }
}