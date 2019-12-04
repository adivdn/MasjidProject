<?php
    class Admin extends CI_Controller{
      

        public function index(){
            if($this->session->userdata('logged_in')!= 1){
                redirect(site_url('User/halamandepan'));
            }

            $this->load->view('admin');
        }





    }



?>