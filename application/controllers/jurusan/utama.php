<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Utama extends CI_Controller {
 
     function __construct()
     {
         parent::__construct();
         $this->load->model('jurusan/dataKajur','','TRUE');
         $this->load->model('jurusan/dataJurusan','','TRUE');
         $this->load->model('jurusan/dataMahasiswa','','TRUE');
         $this->load->library('input');
         $this->load->helper('dateindo');
     }
    
     public function index()
     {
       if($this->session->userdata('kajur'))
       {
         $session_data=$this->session->userdata('kajur');
         $nik=$session_data['nik']; 
         $k=$session_data['kode_jurusan']; 
         $data['data']=$this->dataKajur->dataUmum($nik);
         $data['jurusan']=$this->dataJurusan->disJurusanLogin($k);
         $data['mhs']=$this->dataMahasiswa->jurusanMhs($k);
         $this->load->view('jurusan/utama', $data);
       }
       else
       {
         redirect('jurusan/login', 'refresh');
       }
     }  
     public function logout()
     {
       $this->session->unset_userdata('kajur');
       session_destroy();
       redirect('jurusan/utama', 'refresh');
     }
    public function form_update()
    {
         $session_data=$this->session->userdata('kajur');
         $nik=$session_data['nik']; 
         $data['kajur']=$this->dataKajur->dataUmum($nik);
        $this->load->view('jurusan/form_update',$data);
    }
    public function update()
    {   
      $this->dataKajur->updateData();    
      $this->session->set_flashdata('flashdata',
        '<p class="alert alert-success text-center"><i class="glyphicon glyphicon-ok"></i> Data Berhasil Di Update</p>');
      $data['baak']=$this->dataKajur->dataUmum($nik);
      redirect ('jurusan/utama/form_update',$data);
    }
} 