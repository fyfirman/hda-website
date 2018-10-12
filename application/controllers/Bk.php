<?php
    class Bk extends CI_Controller{
        //konstraktor load model bk_model
        public function __construct(){
            parent::__construct();
            $this->load->model('Bk_model');
        }

        public function index(){
            $data['tahun'] = '2012';
            $data['kabinet'] = $this->Bk_model->get_Kabinet();
            
            $this->load->view('templates/header');
            for($data['tahun']; $data['tahun'] <= 2017; $data['tahun']++){
                $data['Bk'] = $this->Bk_model->get_Bk($data['tahun']);
                $this->load->view('bk/view', $data);
            }
            
            $this->load->view('templates/footer');
        }
    }
?>