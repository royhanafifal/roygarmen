<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('order_status_m');
    }

	public function index(){
        $data['order_status'] = $this->order_status_m->get_status();
		$this->load->view('admin', $data);
    }
    
    public function add_order(){
        $this->load->view('add_order');
    }

    public function save_order(){
        $this->order_status_m->insert_status();
        redirect('admin');
    }

    function get_edit_order(){
        $id_order = $this->uri->segment(3);
        $result = $this->order_status_m->get_order_by_id($id_order);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'id_order'    => $i['id_order'],
                'nama_pemesan'  => $i['nama_pemesan'],
                'nama_order'  => $i['nama_order'],
                'proses_1'     => $i['proses_1'],
                'proses_2'     => $i['proses_2'],
                'proses_3'     => $i['proses_3']
            );
            $this->load->view('edit_order',$data);
        }else{
            echo "Data Was Not Found";
        }
       }

    function update_order(){
        $this->id_order     = $_GET['id_order'];
        $this->nama_pemesan = $_GET['nama_pemesan'];
        $this->nama_order   = $_GET['nama_order'];
        $this->proses_1      = $_GET['proses1'];
        $this->proses_2      = $_GET['proses2'];
        $this->proses_3      = $_GET['proses3'];
        $this->order_status_m->update($this);
        redirect('admin');
    }

    function delete_order(){
        $id_order = $this->uri->segment(3);
        $this->order_status_m->delete_order($id_order);
        redirect('admin');
    }
}
