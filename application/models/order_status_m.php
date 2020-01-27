<?php
class Order_status_m extends CI_Model{
 
  function get_status(){
    $this->db->select('*');
    $this->db->join('customers', 'order_status.id_customer=customers.id_customer');
    $this->db->from('order_status');
    $this->db->order_by('tanggal_order', 'DESC');
    $query = $this->db->get();
    return $query->result();
  }

  function insert_status($table, $data){
    $query = $this->db->insert($table, $data);
    return $query;
  }

  function get_order_by_id($id_order){
    $this->db->select('*');
    $this->db->join('customers', 'order_status.id_customer=customers.id_customer');
    $this->db->from('order_status');
    $this->db->where('id_order', $id_order);
    $query = $this->db->get();
    return $query;
  }

  function update($data){
    $this->db->where('id_order', $data->id_order);
    $this->db->update('order_status', $data);
  }

  function delete_order($id_order){
    $this->db->delete('order_status', array('id_order' => $id_order));
  }

  function get_customer_id_by_name($nama){
    $this->db->select('customers.id_customer');
    $this->db->from('customers');
    $this->db->where('nama_customer', $nama);
    $this->db->limit(1);
    $query = $this->db->get();
    return $query->result();
  }

}