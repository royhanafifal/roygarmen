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
                'allowed_types' => 'jpg|png|jpeg'
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

        function get_edit_pemotongan(){
            $id_order = $this->uri->segment(3);
            $result = $this->proses_m->get_edit_pemotongan($id_order);
            if($result->num_rows() > 0){
                $i = $result->row_array();
                $data = array(
                    'id_proses'        => $i['id_proses'],
                    'foto'             => $i['foto'],
                    'keterangan'       => $i['keterangan'],
                    'id_order'         => $i['id_order'],
                    'status'           => $i['status']
                );
                $this->load->view('admin/proses/proses_pemotongan',$data);
            }else{
                $data = array(
                    'id_order'                => null
                );
                $this->load->view('admin/proses/proses_pemotongan', $data);
            }
        }

        function update_pemotongan(){
            $data = array(
                'id_proses'  => $_GET['id_proses'],
                'id_order'              => $_GET['id_order'],
                'foto'              => $_GET['foto'],
                'keterangan'            => $_GET['keterangan'],
                'status'                => $_GET['status']
            );

            $this->proses_m->update('proses_pemotongan', $data);

            
            redirect('admin');
        }

    }
    
?>