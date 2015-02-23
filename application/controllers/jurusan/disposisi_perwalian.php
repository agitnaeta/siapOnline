<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Disposisi_perwalian extends CI_Controller {
 
     function __construct()
     {
         parent::__construct();
         $this->load->model('jurusan/dataKajur','','TRUE');
         $this->load->model('jurusan/dataMahasiswa','','TRUE');
         $this->load->model('jurusan/dataJurusan','','TRUE');
         $this->load->model('jurusan/dataMatkul','','TRUE');
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
         $data['jurusan']=$this->dataJurusan->disJurusan($k);   
         $data['mhs']=$this->dataMahasiswa->jurusanMhs($k);
         $this->load->view('jurusan/disposisi_perwalian', $data);
       }
       else
       {
         redirect('jurusan/login', 'refresh');
       }
     }
    function tabel_matkul()
    {
        $session_data=$this->session->userdata('kajur');
        $kode_jurusan=$session_data['kode_jurusan'];
        $data['matkul']=$this->dataMatkul->dataUmum($kode_jurusan);
        $this->load->view('jurusan/tabel_matakuliah',$data);
    }

    function form_disposisi()
    {
        $this->load->view('jurusan/form_disposisi');
    }

    function cariMahasiswa()
    {
        if (isset($_GET['term']));
        $cari=strtolower($_GET['term']);
        $this->dataMahasiswa->cariMhs($cari);
    }
    
}