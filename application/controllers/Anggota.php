<?php
	class Anggota extends CI_controller{
        public function __construct(){
            parent::__construct();
            // $this->load->model('m_user');
        }
        public function view($angkatan = NULL){
			$this->load->view('templates/header');
            $this->load->view('anggota/index');
            $this->load->view('templates/footer');
        }
	}
?>