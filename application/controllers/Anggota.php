<?php
	class Anggota extends CI_controller{
        public function __construct(){
            parent::__construct();
            // $this->load->model('m_user');
        }

        public function view($tahun_angkatan = NULL){
			$this->load->view('templates/header');
            if($tahun_angkatan == NULL){
            	$this->view_selection();
            }
            else{
            	$this->view_angkatan($tahun_angkatan);
            }
            $this->load->view('templates/footer');
        }

        private function view_selection(){
        	$this->load->view('anggota/selection');
        }

        private function view_angkatan($tahun_angkatan){
        	#Under Contruction
        	$this->load->view("anggota/angkatan");
        } 
	}
?>