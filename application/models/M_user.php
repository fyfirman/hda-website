<?php
    class M_user extends CI_Model{
        // Fungsi query db dengan kondisi
        public function get_db_from($table_name = NULL, $column_name, $condition){
            $this->db->where($column_name, $condition);
            return $this->db->get($table_name);
        }
    }
?>