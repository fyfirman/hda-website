<?php
    class Bk_model extends CI_Model{
        // fungsi ini mengembalikan data, be/dpa/mubes
        public function get_bk($what = NULL){
            return $this->db->select('*')
                            ->from($what)
                            ->get();
        }
    }
?>