<?php
class Home_m extends CI_Model{

  function get_order_by_id($kode_order){
    $query = $this->db->get_where('order_status', array('id_order' => $kode_order));
    return $query->result();
  }

}