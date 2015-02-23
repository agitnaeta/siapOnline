<?php 
    class DataKajur extends CI_Model
    {
        public function __construct()
        {
            parent:: __construct();
        }
        
        function login($username, $password, $kode_jurusan)
         {
           $this -> db -> select('username, password, kode_jurusan,nik');
           $this -> db -> from('ketua_jurusan');
           $this -> db -> where('username', $username);
           $this -> db -> where('kode_jurusan', $kode_jurusan);
           $this -> db -> where('password', MD5($password));
           $this -> db -> limit(1);

           $query = $this -> db -> get();

           if($query -> num_rows() == 1)
           {
             return $query->result();
           }
           else
           {
             return false;
           }
         }
        function dataUmum($nik)
        {
            $query=$this->db->query("select * from ketua_jurusan where nik='$nik'");
            if($query->num_rows()>0)
                return $query;
            else 
                return null;
        }
        
        function updateData()
        {
        $nik=$this->input->post('nik');
        $kode_jurusan=$this->input->post('kode');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        if ($password=="")
        {
        $data=array(
            'nik'=>$this->input->post('nik'),
            'nama'=>$this->input->post('nama'),
            'username'=>$this->input->post('username'),
            'kode_jurusan'=>$this->input->post('kode')
        );
        }
        else
        {
          $data=array(
            'nik'=>$this->input->post('nik'),
            'nama'=>$this->input->post('nama'),
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'kode_jurusan'=>$this->input->post('kode')
        );  
        }
        $sess_array= array(
                   'nik'  => $nik,
                   'username'=> $username,
                   'kode_jurusan'=>$kode_jurusan
               );

        $this->session->set_userdata('kajur',$sess_array);
        $this->db->update('ketua_jurusan',$data);
        }
    }