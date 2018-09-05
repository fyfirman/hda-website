<?php
    class Credit extends CI_Controller{
        public function __construct(){
            parent::__construct();
            // $this->load->model('m_user');
        }

        public function view(){
                $this->load->view('templates/header');
			    $this->load->view('credit/credit');
                $this->load->view('templates/footer');
        }
    }
?>