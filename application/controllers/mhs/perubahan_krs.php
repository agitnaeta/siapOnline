<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Perubahan_krs extends CI_Controller {
 
     function __construct()
     {
         parent::__construct();
         $this->load->model('mhs/mahasiswa','','TRUE');
         $this->load->model('mhs/m_nilaiSementara','','TRUE');
         $this->load->library('input');
         $this->db2=$this->load->database("db2",TRUE); 
     }
    
    public function index()
     {
       if($this->session->userdata('logged_in'))
       {
         $session_data=$this->session->userdata('logged_in');
         $nim=$session_data['nim']; 
         $data['mhs']=$this->mahasiswa->identitas($nim);
         $data['nilai']=$this->m_nilaiSementara->nilai($nim);
         $data['nama']=$session_data['nama']; 
         $this->load->view('mhs/perubahan_krs', $data);
       }
       else
       {
         redirect('mhs/login', 'refresh');
       }
     }
}