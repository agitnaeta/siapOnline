<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Utama extends CI_Controller {
 
     function __construct()
     {
            parent::__construct();
         $this->load->model('baak/baak','','TRUE');
         $this->load->model('baak/m_kelola_user','','TRUE');
         $this->load->helper('dateindo');
         
         $this->load->library('input');
     }
    
     public function index()
     {
       if($this->session->userdata('baak'))
       { 
         $session_data=$this->session->userdata('baak');  
         $username=$session_data['username'];   
         $data['data']=$this->baak->identitas($username);
         $data['mhs']=$this->m_kelola_user->datamhs();   
         $data['jurusan']=$this->m_kelola_user->jumlahJurusan();   
         $this->load->view('baak/utama', $data);;
       }
       else
       {
         redirect('baak/login', 'refresh');
       }
     }  
     public function logout()
     {
       $this->session->unset_userdata('baak');
       session_destroy();
       redirect('baak/utama', 'refresh');
     }
    
    public function form_update()
    {
        $data['baak']=$this->baak->dataBaak();
        $this->load->view('baak/form_update_baak',$data);
    }
    public function update()
    {
       $this->baak->update_data();
      $this->session->set_flashdata('flashdata',
        '<p class="alert alert-success text-center"><i class="glyphicon glyphicon-ok"></i> Data Berhasil Di Update</p>');
      $data['baak']=$this->baak->dataBaak();
       redirect ('baak/utama/form_update',$data);
    }
    
    public function password_mahasiswa()
    {
        $data['mhs']=$this->baak->cek_password_mhs();
        $this->load->view('baak/password_mahasiswa',$data);
        
    }
} 