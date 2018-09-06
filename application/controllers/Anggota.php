<?php
    class Anggota extends CI_controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_user');
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
            // ambil db
            $data['db'] = $this->m_user->get_db_from('anggotas','angkatan', $tahun_angkatan);
            if(empty($data['db'])){
                show_404();
            }
            // declare title
            $data['title'] = "";
            // set title berdasarkan tahun angkatan
            $this->get_title($tahun_angkatan, $data);
            // Pass $data ke view untuk dipanggil
            $this->load->view("anggota/angkatan", $data);
        } 

        private function get_title($tahun_angkatan, &$data){
            switch ($tahun_angkatan){
                case '2012':
                    $data['title'] = 'Circle';
                    break;
                case '2013':
                    $data['title'] = 'Pascal';
                    break;
                case '2014':
                    $data['title'] = 'Assembly';
                    break;
                case '2015':
                    $data['title'] = 'Binary';
                    break;
                case '2016':
                    $data['title'] = 'Cyber';
                    break;
                case '2017':
                    $data['title'] = 'Delphi';
                    break;
                case '2018':
                    $data['title'] = 'Eclipse';
                    break;
                default:
                    $data['title'] = NULL;
                    break;
            }
        }
    }
?>