<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Khs extends CI_Controller {
 
     function __construct()
     {
         parent::__construct();
         $this->load->model('mhs/mahasiswa','','TRUE');
         $this->load->model('mhs/m_khs','','TRUE');
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
         $data['smt']=$this->m_khs->disSemester($nim);
         $data['nilai']=$this->m_khs->nilai_khs($nim);
         $data['nama']=$session_data['nama']; 
         $this->load->view('mhs/khs', $data);
       }
       else
       {
         redirect('mhs/login', 'refresh');
       }
     }
    
    function cari()
    {
      $smt=$this->input->post('smt');
      $session_data=$this->session->userdata('logged_in');
      $nim=$session_data['nim']; 
      $data['mhs']=$this->mahasiswa->identitas($nim);
      $data['smt']=$this->m_khs->disSemester($nim);
        $data['nilai']=$this->m_khs->cari_nilai($nim,$smt);
         $data['nama']=$session_data['nama']; 
      $this->load->view('mhs/khs', $data);
        
    }
}