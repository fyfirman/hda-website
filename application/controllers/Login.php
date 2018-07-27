<?php
    class Login extends CI_Controller{

        //konstraktor model m_user
        function __construct(){
            parent::__construct();
            $this->load->model('m_user');
        }
        //fungsi cek login lanjutan dari model m_user
        function ceklogin(){
            $npm = $this->input->post('npm');
            $pswd = $this->input->post('password');
            $cek = $this->m_user->cek($npm);
            //checking npm
            if($cek->num_rows()>0){
                //mengambil password dari npm yang dicari
                foreach($cek->result() as $a){
                    $stored_pass = $a->password;
                }
                //bcrypt merupakan hash yang mengubah plaintext kedalam bentuk encrypted yang pannjangnya tetap (menggunakan library tambahan dari https://github.com/dwightwatson/codeigniter-bcrypt.git)
                //mencocokan password yang diinput dengan password yang tersimpan di db dalam bentuk hash
                if($this->bcrypt->check_password($pswd,$stored_pass)){
                    redirect('bk');
                }else{
                    $this->load->view('pages/errorpage.php');
                }
            }else{
                $this->load->view('pages/errorpage.php');
            }
        }
    }
?>