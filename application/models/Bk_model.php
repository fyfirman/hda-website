<?php
    class Bk_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        // fungsi ini mengembalikan data, be/dpa/mubes
        public function get_bk($what = NULL){
            return $this->db->select('*')
                            ->from($what)
                            ->get();
        }
    }
?>