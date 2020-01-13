<?php
class Order_status_m extends CI_Model{
 
  function get_status(){
    $query = $this->db->get('order_status');
    return $query->result();
  }

  function insert_status(){
    $this->id_order     = $_GET['id_order'];
    $this->nama_pemesan = $_GET['nama_pemesan'];
    $this->nama_order   = $_GET['nama_order'];
    $this->proses_1      = $_GET['proses1'];
    $this->proses_2      = $_GET['proses2'];
    $this->proses_3      = $_GET['proses3'];

    $this->db->insert('order_status', $this);
  }

  function get_order_by_id($id_order){
    $query = $this->db->get_where('order_status', array('id_order' => $id_order));
    return $query;
  }

  function update($data){
    $this->db->where('id_order', $data->id_order);
    $this->db->update('order_status', $data);
  }

  function delete_order($id_order){
    $this->db->delete('order_status', array('id_order' => $id_order));
  }

}