<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Lihat_kurikulum extends CI_Controller {
 
     function __construct()
     {
         parent::__construct();
         $this->load->model('mhs/mahasiswa','','TRUE');
         $this->load->model('mhs/m_nilaiSementara','','TRUE');
         $this->load->model('mhs/m_matkul');
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
         $data['dataKurikulum']=$this->m_matkul->dataKurikulum($nim);
         $data['matkul']=$this->m_matkul->dataMatkul($nim);
         $data['nama']=$session_data['nama']; 
         $this->load->view('mhs/lihat_kurikulum', $data);
       }
       else
       {
         redirect('mhs/login', 'refresh');
       }
     }
}