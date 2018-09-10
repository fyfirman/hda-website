<?php
    class Login extends CI_Controller{

        //konstraktor model m_user
        function __construct(){
            parent::__construct();
            $this->load->model('m_user');
        }

        function index(){
            if($this->session->userdata('masuk')==1){ //cek session kalau udh pernah login langsung redirect ke bk
                redirect('bk');
            }else{
                $this->load->view('templates/header-loginpage');
                $this->load->view('pages/loginpage');
                $this->load->view('templates/footer');
            }
        }

        //fungsi cek login lanjutan dari model m_user
        function ceklogin(){
            $npm = $this->input->post('npm');
            $pswd = $this->input->post('password');
            $cek = $this->m_user->get_db_from('anggotas','npm',$npm);
            //checking npm
            if($cek->num_rows()>0){
                //mengambil password dari npm yang dicari
                foreach($cek->result() as $a){
                    $stored_pass = $a->password;
                    $nama = $a->nama;
                }
                //bcrypt merupakan hash yang mengubah plaintext kedalam bentuk encrypted yang pannjangnya tetap (menggunakan library tambahan dari https://github.com/dwightwatson/codeigniter-bcrypt.git)
                //mencocokan password yang diinput dengan password yang tersimpan di db dalam bentuk hash
                if($this->bcrypt->check_password($pswd,$stored_pass)){
                    $ses_data = array('npm'=>$npm, 'nama'=>$nama, 'masuk'=> 1);
                    $this->session->set_userdata($ses_data);
                    redirect('bk');
                }else{
                    $this->load->view('pages/errorpage.php');
                }
            }else{
                $this->load->view('pages/errorpage.php');
            }
        }

        function logout(){
            $this->session->sess_destroy();
            redirect(site_url());
        }
    }
?>