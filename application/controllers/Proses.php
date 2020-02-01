<?php
    class Proses extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('proses_m');
        }

        function index(){
            $data['id_order'] = $this->uri->segment(2);
            $this->load->view('admin/proses/proses', $data);
        }

        function save(){
            $config = array(
                'upload_path' => './assets/images/pemotongan',
                'allowed_types' => 'jpg|png|jpeg',
                'encrypt_name' => TRUE
            );
            $this->upload->initialize($config);

            $data = array(
                "keterangan" => $_POST['keterangan'],
                "id_order" => $_POST['id_order'],
                "status" => $_POST['status']
            );

            if($this->upload->do_upload('foto')){
                $data['foto']="pemotongan/".$this->upload->data("file_name");
            }

            $this->proses_m->insert('proses_pemotongan', $data);
        }

    }
    
?>