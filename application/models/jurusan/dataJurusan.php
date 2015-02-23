<?php 
    class DataJurusan extends CI_Model
    {
        public function __construct()
        {
            parent:: __construct();
        }
        
        function disJurusan()
        {
            $query=$this->db->query("select * from jurusan");
            if ($query->num_rows()>0)
                return $query;
            else 
                return null;
        }  function disJurusanLogin($k)
        {
            $query=$this->db->query("select * from jurusan where kode_jurusan='$k'");
            if ($query->num_rows()>0)
                return $query;
            else 
                return null;
        }       
    }