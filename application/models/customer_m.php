<?php
class Customer_m extends CI_Model{
 
  function get_customer(){
    $query = $this->db->get('customers');
    return $query->result();
  }

  function insert_status(){
    $this->id_customer     = $_GET['id_customer'];
    $this->nama_customer = $_GET['nama_customer'];
    $this->alamat_customer   = $_GET['alamat_customer'];
    $this->no_hp_customer      = $_GET['no_hp_customer'];

    $this->db->insert('customers', $this);
  }

  function get_customer_by_id($id_customer){
    $query = $this->db->get_where('customers', array('id_customer' => $id_customer));
    return $query;
  }

  function update($data){
    $this->db->where('id_customer', $data->id_customer);
    $this->db->update('order_status', $data);
  }

  function delete_customer($id_customer){
    $this->db->delete('order_status', array('id_customer' => $id_customer));
  }

}