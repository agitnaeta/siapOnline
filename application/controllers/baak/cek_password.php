<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Cek_password extends CI_Controller {
 
     function __construct()
     {
            parent::__construct();
         $this->load->model('baak/baak','','TRUE');
         $this->load->model('baak/m_kelola_user','','TRUE');
         $this->load->helper('dateindo');
         $this->load->library('input');
     }
    public function index()
    {
        if($this->session->userdata('baak'))
        { 
            $data['mhs']=$this->baak->cek_password_mhs();
            $this->load->view('baak/password_mahasiswa',$data);
        }
        else
        {
            redirect('baak/login','refresh');
        }
        
    }
    public function cari()
    {
        $cari=$this->input->post('cari');
        $data['mhs']=$this->m_kelola_user->pencarianPassword($cari);
        $this->load->view('baak/kelola_user');
    }
} 