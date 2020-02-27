<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('home_m');
    }

    public function index(){
		$this->load->view('home');
    }

    public function search(){
      $data['order_pencarian'] = $this->home_m->get_status($_GET['id_order']);
      $data['status_pemotongan'] = $this->home_m->status_pemotongan($_GET['id_order']);
      $data['status_sablon'] = $this->home_m->status_sablon($_GET['id_order']);
      $data['status_penjahitan'] = $this->home_m->status_penjahitan($_GET['id_order']);
      $data['status_finishing'] = $this->home_m->status_finishing($_GET['id_order']);

      // $data['pemotongan'] = isset($data['status_pemotongan']) ? $data['status_pemotongan'] : null ;
      $this->load->view('home_order', $data);
    }
 
}