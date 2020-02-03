<?php
    class Proses extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('proses_m');
        }

        // function index(){
        //     $data['id_order'] = $this->uri->segment(2);
        //     $this->load->view('admin/proses/proses', $data);
        // }

        function proses_pemotongan(){
            $data['id_order'] = $this->uri->segment(3);
            $this->load->view('admin/proses/proses_pemotongan', $data);
        }

        function proses_sablon(){
            $data['id_order'] = $this->uri->segment(3);
            $this->load->view('admin/proses/proses_sablon', $data);
        }

        function proses_penjahitan(){
            $data['id_order'] = $this->uri->segment(3);
            $this->load->view('admin/proses/proses_penjahitan', $data);
        }

        function proses_finishing(){
            $data['id_order'] = $this->uri->segment(3);
            $this->load->view('admin/proses/proses_finishing', $data);
        }

        function save_pemotongan(){
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
            redirect('admin');
        }

        function save_sablon(){
            $config = array(
                'upload_path' => './assets/images/sablon',
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
                $data['foto']="sablon/".$this->upload->data("file_name");
            }

            $this->proses_m->insert('proses_sablon', $data);
            redirect('admin');
        }

        function save_penjahitan(){
            $config = array(
                'upload_path' => './assets/images/penjahitan',
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
                $data['foto']="penjahitan/".$this->upload->data("file_name");
            }

            $this->proses_m->insert('proses_penjahitan', $data);
            redirect('admin');
        }

        function save_finishing(){
            $config = array(
                'upload_path' => './assets/images/finishing',
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
                $data['foto']="finishing/".$this->upload->data("file_name");
            }

            $this->proses_m->insert('proses_finishing', $data);
            redirect('admin');
        }

    }
    
?>