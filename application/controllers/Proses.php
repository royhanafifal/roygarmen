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
            $config = array(
                'upload_path' => './assets/images/pemotongan',
                'allowed_types' => 'jpg|png|jpeg'
            );
            $this->upload->initialize($config);

            $data = array(
                'id_proses' => $_POST['id_proses'],
                'id_order'  => $_POST['id_order'],
                'foto'      => $_POST['old_foto'],
                'keterangan'=> $_POST['keterangan'],
                'status'    => $_POST['status']
            );

            if($_POST['foto']!=$_POST['old_foto']){
                if($this->upload->do_upload('foto')){
                    $data['foto']="pemotongan/".$this->upload->data("file_name");
                }
                
                $path = $_SERVER['DOCUMENT_ROOT'].'./assets/images/pemotongan/'.$_POST['old_foto'];
                $files = glob($path.'*'); // get all file names
                foreach($files as $file){ // iterate files
                if(is_file($file))
                    unlink($file); // delete file
                    //echo $file.'file deleted';
                }
            }
            
            $this->proses_m->update('proses_pemotongan', $data);
            redirect('admin');
        }

        private function deleteFiles($path){
            $files = glob($path.'*'); // get all file names
            foreach($files as $file){ // iterate files
              if(is_file($file))
                unlink($file); // delete file
                //echo $file.'file deleted';
            }   
        }
    }
    
?>