<?php
	class Kkm extends CI_Controller{
		public function index(){
			$this->load->view('templates/header');
			$this->load->view('kkm/index');
			$this->load->view('templates/footer');
		}
	}
?>