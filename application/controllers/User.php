<?php
    class User extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this->load->library(['password']);

            $this->load->model('User_model');
        }
        
        public function index(){
            if($this->session->userdata('logged_in')){
                redirect('Admin/index');
            }
            
            $this->load->view('halamandepan');
        }

        public function prosesLogin(){
            

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $login = $this->User_model->login($username,$password);
            if($login){
                $dataLogin = array('username' => $login->$username,
                                   'logged_in' => 1
                            ); 
                 $this->session->set_userdata($dataLogin);
                 redirect('Admin/index');              
            }else{
                echo "<script>alert('Gagal login: Cek username, password!');</script>";

                redirect('User/halamandepan');
            }
           

        }
        public function logout(){
            $dataLogin =['username','logged_in'];

            $this->session->unset_userdata($dataLogin);
            
            redirect('User/index');
        }



    }


?>