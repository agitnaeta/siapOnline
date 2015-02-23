<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Perwalian extends CI_Controller {
 //Mengambil Data Dari DB 1 Simpan Ke DB 2
     function __construct()
     {
         parent::__construct();
         $this->load->model('mhs/mahasiswa','','TRUE');
         $this->load->model('mhs/m_perwalian','','TRUE');
         $this->load->library('input');
         $this->db2=$this->load->database("db2",TRUE); 
     }
    
    public function index()
     {
       if($this->session->userdata('logged_in'))
       {
         $session_data=$this->session->userdata('logged_in');
         $data['nama']=$session_data['nama'];
         $data['nim']=$session_data['nim'];
         $nim=$session_data['nim'];
         $data['mhs']=$this->mahasiswa->identitas($nim);   
         $data['matkul']=$this->m_perwalian->dataPerwalian($nim);
         $this->load->view('mhs/perwalian',$data);
       }
       else
       {
         redirect('mhs/login', 'refresh');
       }
     }
    public function set_perwalian()
    {
     $this->m_perwalian->setPerwalian();
     $this->session->set_flashdata('flashdata', " 
            <p class='alert alert-success text-center'><i class='glyphicon glyphicon-ok'></i> Perwalian Berhasil Dilakukan
            <a class='btn btn-succes btn-sm' href='perwalian'><i class='glyphicon glyphicon-remove'></i> </a
            </p>");
            redirect('mhs/perwalian','refresh');    
    }
}