<?php
class Home_m extends CI_Model{

  function get_order_by_id(){
    $query = $this->db->get_where('order_status', array('id_order' => $_GET['kode_order']));
    return $query->result();
  }

}