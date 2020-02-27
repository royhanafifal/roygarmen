<?php
class Home_m extends CI_Model{

  function get_status($id_order){
    $this->db->select('*');
    $this->db->join('customers', 'order_status.id_customer=customers.id_customer');
    $this->db->from('order_status');
    $this->db->where('id_order', $id_order);
    $this->db->order_by('tanggal_order', 'DESC');
    $query = $this->db->get();
    return $query->result();
  }

  function status_pemotongan($id_order){
    $query = $this->db->get_where('proses_pemotongan', array('id_order' => $id_order), 1);
    return $query->result();
  }

  function status_sablon($id_order){
    $query = $this->db->get_where('proses_sablon', array('id_order' => $id_order), 1);
    return $query->result();
  }

  function status_penjahitan($id_order){
    $query = $this->db->get_where('proses_penjahitan', array('id_order' => $id_order), 1);
    return $query->result();
  }

  function status_finishing($id_order){
    $query = $this->db->get_where('proses_penjahitan', array('id_order' => $id_order), 1);
    return $query->result();
  }


}