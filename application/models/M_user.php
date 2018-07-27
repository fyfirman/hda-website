<?php
    class M_user extends CI_Model{
        //fungsi ini mengembalikan nilai row dari username yang dicari
        function cek($npm){
            $this->db->where("username", $npm);
            return $this->db->get('user');
        }
    }
?>