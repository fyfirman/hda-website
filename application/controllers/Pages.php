<?php
    class Pages extends CI_Controller{
        public function view($page = 'loginpage'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);

            // $this->load->view('templates/header');
            $this->load->view('templates/header-loginpage');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }
?>