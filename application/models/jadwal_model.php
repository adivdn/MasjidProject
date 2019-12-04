<?php
    class jadwal_model extends CI_Model{

        public function get_jadwal($table){
            $hasil = $this->db->get($table);
            
            if ($hasil->num_rows() > 0){
                return $hasil->result_array();
            }
            return false;

        }
        public function create($table,$data){

            return $this->db->insert($table,$data);
        }
        public function delete($table,$idjadwal){
            $this->db->where('id_jadwal',$idjadwal);
            $delete = $this->db->delete($table);

            if($delete){
                return true;
            }else{
                return false;
            }

        }
        public function update($table,$idjadwal,$data){
            $this->db->where('id_jadwal',$idjadwal);
            $update = $this->db->update($table,$data);

            if($update){
                return true;
            }else{
                return false;
            }
        }
        public function view_id($table,$idjadwal){
            $this->db->where('id_jadwal',$idjadwal);
            $hasil = $this->db->get($table);

            return $hasil->row_array();

        }


    }


?>