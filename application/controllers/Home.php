<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index(){
		$this->load->view('home');
    }

    public function search(){
      $this->load->model('home_m');
      $data['order_pencarian'] = $this->home_m->get_order_by_id($_GET['kode_order']);
      $this->load->view('home_order', $data);
    }
}