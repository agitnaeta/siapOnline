<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Utama extends CI_Controller {
 
     function __construct()
     {
        parent::__construct();
         $this->load->model('mhs/mahasiswa','','TRUE');
        
         $this->db2=$this->load->database("db2",TRUE); 
         $this->load->library('input');
     }
    
     public function index()
     {
       if($this->session->userdata('logged_in'))
       {
         $session_data=$this->session->userdata('logged_in');
         $nim=$session_data['nim']; 
         $data['mhs']=$this->mahasiswa->identitas($nim);
         $data['krs']=$this->mahasiswa->krs($nim);
         $data['nama']=$session_data['nama']; 
         $this->load->view('mhs/utama', $data);
       }
       else
       {
         redirect('mhs/login', 'refresh');
       }
     }  
     public function logout()
     {
       $this->session->unset_userdata('logged_in');
       session_destroy();
       redirect('mhs/utama', 'refresh');
     }
} 