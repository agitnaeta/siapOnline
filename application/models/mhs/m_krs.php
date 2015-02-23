<?php
class M_krs extends CI_Model 
{
    public function __construst();
    {
        parent::__construct();
    }

    function getData($nim)
    {   
        $query=$this->db2->query("select mahasiswa.nim,status_smt,periode,nama_jurusan,prog_studi from mahasiswa,jurusan 
                                    where mahasiswa.kode_jurusan=jurusan.kode_nim and nim='$nim'");
        if ($query->num_rows()>0)
            return $query;
            else
            return null;    
    }   
} 
