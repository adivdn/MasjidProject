<?php
    class Jadwal extends CI_Controller{
        function __construct(){
            parent:: __construct();
            $this->load->model('jadwal_model');
        }

        public function index(){
            if($this->session->set_userdata($dataLogin)!=1){
                redirect(site_url('User/halamandepan'));
            }
            $this->load->view('admin');
        }

        public function get_data(){
            $table = 'jadwal';
            $hasil = $this->jadwal_model->get_jadwal($table);
            $data['data_view'] = $hasil;
            $this->load->view('table_jadwal',$data);

            
        }

        public function input_data(){
            if ($this->input->post()){
                $id_jadwal = $this->input->post('id_jadwal');
                $tanggal  = $this->input->post('tanggal');
                $khotib   = $this->input->post('khotib');
                $bilal    = $this->input->post('bilal');
                $table    = 'jadwal';

                $data_insert = array (
                    'id_jadwal' => $id_jadwal,
                    'tanggal'   => $tanggal,
                    'khotib'    => $khotib,
                    'bilal'     => $bilal
                );
              
                $insert = $this->jadwal_model->create($table,$data_insert);
        
                if($insert){
                $this->session->set_flashdata('alert','sukses_insert');
                redirect(site_url('Jadwal/get_data'));
                }else{
                    echo "<script>alert('Gagal Insert Data');</script>";
                }
            }else{
                echo "<script>alert('Gagal Insert Data');</script>";
            }
          
        }
        public function input_data_view(){
            $this->load->view('form_jadwal');
        }

        public function delete_data($idjadwal){
            $table = 'jadwal';
            $this->jadwal_model->delete($table,$idjadwal);
            $this->session->set_flashdata('alert','sukses_delete');
            redirect(site_url('Jadwal/get_data'));
        }
        public function update_data_view($idjadwal){
            $table = 'jadwal';
            $hasil = $this->jadwal_model->view_id($table,$idjadwal);
            $data['data_view'] = $hasil;
            $this->load->view('edit_jadwal',$data);
        }

        public function update_data($idjadwal){
            $table = 'jadwal';
            $tanggal  = $this->input->post('tanggal');
            $khotib = $this->input->post('khotib');
            $bilal = $this->input->post('bilal');

            $data_update = array (
                'tanggal'   => $tanggal,
                'khotib'    => $khotib,
                'bilal'     => $bilal
            );

            $update = $this->jadwal_model->update($table,$data_update);
            if($data_update){
               $this->session->set_flashdata('alert','sukses_update');
               redirect(site_url('Jadwal/get_data'));
            }else{
                echo "<script>alert('Gagal Update Data');</script>";
            }
        }

    }


?>