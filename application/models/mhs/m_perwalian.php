<?php 
    class M_perwalian extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function dataPerwalian ($nim)
        {
            $query=$this->db2->query("select * from matakuliah,mahasiswa where  mahasiswa.status_smt=matakuliah.semester and mahasiswa.nim='$nim'");
            if ($query->num_rows()>0)
                return $query;
            else return null;
        }
        public function setPerwalian()
        {
            $status=$this->input->post('status');
             if ($status== "on")
                {
                $a=1;
                
                }
            else
                {
                   $a=0;
                }
           $data= array (
                'nim'=>$this->input->post('nim'),
                'kode_mk'=>$this->input->post('kode_mk'),
                'status'=>$a
                );
            $this->db->insert('krs', $data,'nim'); 
         
        }
}