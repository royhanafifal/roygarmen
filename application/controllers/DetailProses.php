<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailProses extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('home_m');
    }

    function pemotongan(){
        $id_order = $this->uri->segment(3);
        $data['detail'] = $this->home_m->status_pemotongan($id_order);
        $this->load->view('detail_pemotongan', $data);
    }

    function sablon(){
        $id_order = $this->uri->segment(3);
        $data['detail'] = $this->home_m->status_sablon($id_order);
        $this->load->view('detail_sablon', $data);
    }

    function penjahitan(){
        $id_order = $this->uri->segment(3);
        $data['detail'] = $this->home_m->status_penjahitan($id_order);
        $this->load->view('detail_penjahitan', $data);
    }

    function finishing(){
        $id_order = $this->uri->segment(3);
        $data['detail'] = $this->home_m->status_finishing($id_order);
        $this->load->view('detail_finishing', $data);
    }

}