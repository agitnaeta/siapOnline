<?php
    class M_ganti_password  extends CI_Model
    {
         function __construct()
         {
            parent::__construct();
            
         }  
        function update_password($nim)
        {
            $data=array(
                'nim'=>$this->input->post('nim'),
                'password'=>$this->input->post('pb')
            );
            $this->db->where('nim', $nim);
            $this->db->update('mahasiswa', $data); 
        }
    }