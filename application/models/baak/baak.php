<?php
class Baak extends CI_Model
{
     function login($username, $password)
     {
       $this -> db -> select('username, password, nama_baak');
       $this -> db -> from('baak');
       $this -> db -> where('username', $username);
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
        function identitas($username)
        {   
            
            $query=$this->db->query("select * from baak where username='$username'");
            if ($query->num_rows()>0)
                return $query;
                else
                return null;    
        }
    function dataBaak()
    {
       $query=$this->db->query("select * from baak");
            if ($query->num_rows()>0)
                return $query;
                else
                return null; 
        
    }
    function update_data()
    {
        $nib=$this->input->post('nib');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        if ($password=="")
        {
        $data=array(
            'nib'=>$this->input->post('nib'),
            'nama_baak'=>$this->input->post('nama'),
            'username'=>$this->input->post('username'),
        );
        }
        else
        {
          $data=array(
            'nib'=>$this->input->post('nib'),
            'nama_baak'=>$this->input->post('nama'),
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password'))
        );  
        }
        $sess_array= array(
                   'nib'  => $nib,
                   'username'=> $username,
               );

        $this->session->set_userdata('baak',$sess_array);
        $this->db->update('baak',$data);
    }
    
    function cek_password_mhs()
    {
        $query=$this->db->query("select nim,nama,nama_jurusan,password from mahasiswa,jurusan where
                                mahasiswa.kode_jurusan=jurusan.kode_nim");
        if ($query->num_rows()>0)
            return $query;
        else
            return null;
    }
} 