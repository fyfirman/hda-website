<?php
    class M_user extends CI_Model{
        //fungsi ini mengembalikan nilai row dari username yang dicari
        function cek($npm){
            //select*from anggotas where npm = $npm
            $this->db->where("npm", $npm);      
            return $this->db->get('anggotas');   
        }

        public function get_db($what = NULL){
            return $this->db->select('*')
                            ->from($what)
                            ->get();
        }
    }
?>