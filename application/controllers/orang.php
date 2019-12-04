<?php
    class orang extends CI_Controller{

        public function notfound(){

            $data['heading'] = "Ini Halaman 404 Not Found";
            $data['message'] = "DUAARRRR SALAH PAGE";

            $this->load->view('errors/html/error_404',$data);
        }

    }




?>