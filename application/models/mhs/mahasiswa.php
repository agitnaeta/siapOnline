<?php
class Mahasiswa extends CI_Model
{
     function login($nim, $password)
     {
       $this->db2->select('nim, password,nama');
       $this -> db2 -> from('mahasiswa');
       $this -> db2 -> where('nim', $nim);
       $this -> db2 -> where('password', $password);
       $this -> db2 -> limit(1);

       $query = $this -> db2 -> get();

       if($query -> num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
     }
    function identitas($nim)
    {   
        $query=$this->db2->query("select mahasiswa.nim,nama,nama_jurusan,prog_studi,periode,status_smt,password from mahasiswa,jurusan
                                    where jurusan.kode_nim=mahasiswa.kode_jurusan and nim='$nim'");
        if ($query->num_rows()>0)
            return $query;
            else
            return null;    
    } 
    
    function krs($nim)
    {   
        $query=$this->db2->query("select krs.kode_mk,matakuliah,sks from matakuliah,krs where matakuliah.kode_mk=krs.kode_mk and nim='$nim'");
        if ($query->num_rows()>0)
            return $query;
            else
            return null;    
    }
    
    function nilaiSementara($nim)
    {   
        $query=$this->db2->query("select * from nilai where nim='$nim'");
        if ($query->num_rows()>0)
            return $query;
            else
            return null;    
    }   
} 