<?php
    class Bk_model extends CI_Model{
        // fungsi ini mengembalikan data, be/dpa/mubes
        public function get_Kabinet(){
            $this->db->select('nama');
            $this->db->where('tipe', 'BE');
            return $this->db->get('bks');
        }

        public function get_Bk($tahun){
            $this->db->where('tahun', $tahun);
            $this->db->select('*');
            return $this->db->get('bks');
        }
    }
?>