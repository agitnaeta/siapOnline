<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Khs_krs extends CI_Controller {
 
     function __construct()
     {
        parent::__construct();
         $this->load->model('baak/baak','','TRUE');
         $this->load->model('baak/m_khs_krs','','TRUE');
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
            $this->load->view('baak/cetak_khs_krs',$data);
        }
        else
        {
            redirect('baak/login','refresh');
        }
        
    }
    public function cari()
    {
        $cari=$this->input->post('cari');
        $data['kelas']=$this->m_khs_krs->dataKelas();
        $data['jurusan']=$this->m_khs_krs->dataJurusan();
        $data['mhs']=$this->m_khs_krs->pencarian($cari);
        $this->load->view('baak/cetak_khs_krs',$data);
    }
    public function cari_kelas()
    {
        $cari=$this->input->post('cari');
        $data['kelas']=$this->m_khs_krs->dataKelas();
        $data['jurusan']=$this->m_khs_krs->dataJurusan();
        $data['mhs']=$this->m_khs_krs->cariKelas($cari);
        $this->load->view('baak/cetak_khs_krs',$data);
    }
    
    public function cari_semester()
    {
        $cari=$this->input->post('cari');
        $data['kelas']=$this->m_khs_krs->dataKelas();
        $data['jurusan']=$this->m_khs_krs->dataJurusan();
        $data['mhs']=$this->m_khs_krs->cariSemester($cari);
        $this->load->view('baak/cetak_khs_krs',$data);
    }
    public function cari_jurusan()
    {
        $cari=$this->input->post('cari');
        $data['kelas']=$this->m_khs_krs->dataKelas();
        $data['jurusan']=$this->m_khs_krs->dataJurusan();
        $data['mhs']=$this->m_khs_krs->cariJurusan($cari);
        $this->load->view('baak/cetak_khs_krs',$data);
    }
    public function cetak_khs()
    {
        $this->load->view('baak/khs');
    }
} 