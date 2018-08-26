<?php
    class Pages extends CI_Controller{

        public function kkm(){
            if($this->session->userdata('masuk')==1){ //cek apakah sesion masuk bernilai 1
                $this->load->view('templates/header');
			    $this->load->view('kkm/index');
                $this->load->view('templates/footer');
            }else{
                redirect(site_url());
            }
        }
    }
?>