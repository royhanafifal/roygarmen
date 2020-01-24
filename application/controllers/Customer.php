<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('customer_m');
    }

	public function index(){
        $data['customer'] = $this->customer_m->get_customer();
		$this->load->view('admin/customer/customer', $data);
    }
    
    public function add_customer(){
        $this->load->view('admin/customer/add_customer');
    }

    public function save_customer(){
        $this->customer_m->insert_customer();
        redirect('customer');
    }

    function get_edit_customer(){
        $id_customer = $this->uri->segment(3);
        $result = $this->customer_m->get_customer_by_id($id_customer);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'id_customer'    => $i['id_customer'],
                'nama_customer'  => $i['nama_customer'],
                'alamat_customer'  => $i['alamat_customer'],
                'no_hp_customer'     => $i['no_hp_customer'],
                'status_aktif'     => $i['status_aktif']
            );
            $this->load->view('admin/customer/edit_customer',$data);
        }else{
            echo "Data Was Not Found";
        }
    }

    function update_customer(){
        $data = array(
            'nama_customer'  => $this->input->get('nama_customer'),
            'alamat_customer'  => $this->input->get('alamat_customer'),
            'no_hp_customer'     => $this->input->get('no_hp_customer'),
            'status_aktif'     => $this->input->get('status_aktif')
        );
        $where = array(
            'id_customer'    => $this->input->get('id_customer')
        );
        
        $this->customer_m->update_customer($where, $data);
        redirect('customer');
    }

    function delete_customer(){
        $id_customer = $this->uri->segment(3);
        $this->customer_m->delete_customer($id_customer);
        redirect('customer');
    }
}
