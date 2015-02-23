<?php
	class cek_perwalian extends CI_Controller
	{
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
         $this->load->view('jurusan/cek_perwalian', $data);
       }
       else
       {
         redirect('jurusan/login', 'refresh');
       }
     }  
	}