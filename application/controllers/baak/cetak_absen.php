<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Cetak_absen extends CI_Controller {
 
     function __construct()
     {
        parent::__construct();
         $this->load->model('baak/baak','','TRUE');
         $this->load->model('baak/m_khs_krs','','TRUE');
         $this->load->model('baak/m_absen');
         $this->load->library('input');
         $this->load->helper('dateindo');
     }
    public function index()
    {
        if($this->session->userdata('baak'))
        { 
            $data['jurusan']=$this->m_khs_krs->dataJurusan();
            $data['kelas']=$this->m_khs_krs->dataKelas();
            $data['mhs']=$this->m_khs_krs->dataMhs();
            $data['absen']=$this->m_absen->dataAbsen();
            $this->load->view('baak/cetak_absen',$data);
        }
        else
        {
            redirect('baak/login','refresh');
        }
        
    }
    public function cari()
    {
        $kelas=$this->input->post('kelas');
        $kode_mk=$this->input->post('kode_mk');
        $data['absen']=$this->m_absen->cariAbsen($kelas,$kode_mk);
    }
   
} 