<?php
    class Bk extends CI_Controller{
        //konstraktor load model bk_model
        public function __construct(){
            parent::__construct();
            $this->load->model('bk_model');
        }
        // fungsi ini untuk handle /hda-website/bk
        public function index(){         
            $data['title'] = 'Badan Kelengkapan Himatif FMIPA Unpad';
            $data['be'] = $this->bk_model->get_bk('be');

            $this->load->view('templates/header');
            $this->load->view('bk/index', $data);
            $this->load->view('templates/footer');
        }

        // fungsi ini untuk handle /hda-website/bk/<be atau dpa atau mubes>
        public function view($bk = NULL){
            // header atau title page tergantung site_url() dari /views/bk/index.php
            switch ($bk){
                case 'be':
                    $data['title'] = 'Badan Eksekutif';
                    break;
                case 'dpa':
                    $data['title'] = 'Dewan Perwakilan Anggota';
                    break;
                case 'mubes':
                    $data['title'] = 'Musyawarah Besar';
                    break;
                default:
                    $data['title'] = NULL;
                    break;
            }

            // var 'bk' diisi dengan database sesuai dengan site_url() dari /views/bk/index.php
            $data['bk'] = $this->bk_model->get_bk($bk);

            if(empty($data['bk'])){
                show_404();
            }

            $this->load->view('templates/header');
            $this->load->view('bk/view', $data);
            $this->load->view('templates/footer');
        }
    }
?>