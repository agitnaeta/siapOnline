<?php
class M_nilaiSementara extends CI_Model
{
    function nilai($nim)
    {   
        $query=$this->db2->query("select nilai.kode_mk,matakuliah,sks,angka_mutu,kode_nilai,angka_mutu from matakuliah,nilai where matakuliah.kode_mk=nilai.kode_mk and nilai.nim='$nim'");
        if ($query->num_rows()>0)
            return $query;
            else
            return null;    
    } 
    
    
} 