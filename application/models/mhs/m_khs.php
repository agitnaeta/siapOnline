<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_khs extends CI_Model {
 
     function __construct()
     {
        parent::__construct();
         $this->db2=$this->load->database("db2",TRUE); 
         $this->load->library('input');
     }


    function nilai_khs($nim)
    {   
    $query=$this->db2->query("select nilai.kode_mk,matakuliah,sks,angka_mutu,kode_nilai,angka_mutu from matakuliah,nilai where matakuliah.kode_mk=nilai.kode_mk and nilai.nim='$nim'");
        if ($query->num_rows()>0)
            return $query;
            else
            return null;
    }
                
    function cari_nilai($nim,$smt)
    {   
     $query=$this->db2->query("select nilai.kode_mk,matakuliah,sks,angka_mutu,kode_nilai,angka_mutu from semester, matakuliah,nilai where matakuliah.kode_mk=nilai.kode_mk and nilai.nim='$nim' and semester.status_smt='$smt'");
        if ($query->num_rows()>0)
            return $query;
            else
            return null;    
    }   
    function disSemester($nim)
    {
        $query=$this->db->query("Select * from semester where nim='$nim'");
         if ($query->num_rows()>0)
            return $query;
            else
            return null; 
        
    }
} 
