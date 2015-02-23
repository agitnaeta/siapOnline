<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Setting_kurikulum extends CI_Controller {
 
     function __construct()
     {
         parent::__construct();
         $this->load->model('jurusan/dataKajur','','TRUE');
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
         $this->load->view('jurusan/setting_kurikulum', $data);
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
    public function form_cari()
    {
        $session_data=$this->session->userdata('kajur');
        $kode_jurusan=$session_data['kode_jurusan'];
        $data['matkul']=$this->dataMatkul->dataUmum($kode_jurusan);
        $this->load->view('jurusan/form_cari',$data);
    }
    public function form_tambah()
    {
        $session_data=$this->session->userdata('kajur');
        $this->load->view('jurusan/form_tambah',$session_data);
    }
    
    function tambah_data()
    {
      $session_data=$this->session->userdata('kajur');
      $k=$session_data['kode_jurusan'];
      $no=$this->input->post('kode'); 
      $nama=$this->input->post('matakuliah');     
      $kodemk="$k$no";
      $this->dataMatkul->tambahData($kodemk,$k);
      $this->session->set_flashdata('flashdata'," 
            <p class='alert alert-success text-center'><i class='glyphicon glyphicon-ok'></i> 
            Matakuliah '$nama' Berhasil di Tambah 
            <a class='btn btn-success btn-sm' href='#'><i class='glyphicon glyphicon-remove'></i> </a
            </p>");        
      $this->load->view('jurusan/form_tambah',$session_data);
    }
    
     function hapus($kode_mk)
        {
            $this->dataMatkul->hapusData($kode_mk);
            $this->session->set_flashdata('flashdata', ' 
            <p class="alert alert-success text-center"><i class="glyphicon glyphicon-ok"></i> Data Berhasil Terhapus 
            <a class="btn btn-success btn-sm" href="tabel_matkul"><i class="glyphicon glyphicon-remove"></i> </a
            </p>');
            redirect ('jurusan/setting_kurikulum/tabel_matkul','refresh');
        }
    function form_edit($kode_mk)
    {
        $data['matkul']=$this->dataMatkul->dataSatuan($kode_mk);
        $this->load->view('jurusan/form_edit',$data);
    }
    
    function update_data()
    {    
     $this->dataMatkul->updateData();
     $nama=$this->input->post('matakuliah');  
     $this->session->set_flashdata('flashdata'," 
            <p class='alert alert-success text-center'><i class='glyphicon glyphicon-ok'></i> 
            Matakuliah '$nama' Berhasil di Update 
            <a class='btn btn-success btn-sm' href='form_cari'><i class='glyphicon glyphicon-remove'></i> </a
            </p>");        
       redirect ('jurusan/setting_kurikulum/tabel_matkul','refresh');  
    } 
    
    function cari_data()
    {
        $cari=$this->input->post('cari');
        $data['matkul']=$this->dataMatkul->cariData($cari);
        
        $this->load->view('jurusan/tabel_matakuliah',$data);
        $this->load->view('jurusan/form_cari',$data);
        
    }
} 