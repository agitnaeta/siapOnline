<?php
 
class CekLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('jurusan/dataJurusan','',TRUE);      
   $this->load->model('jurusan/dataKajur','',TRUE);
 }
 
 function index()
 {
   //form
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('kode_jurusan', 'kode_jurusan', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //jika gagal kembali ke hal-Login
     $data['jurusan']=$this->dataJurusan->disJurusan();   
     $this->load->view('jurusan/login',$data);
   }
   else
   {
     //Ke-Halaman Utama
     redirect('jurusan/utama', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //fild acuan
   $username= $this->input->post('username');
   $kode_jurusan= $this->input->post('kode_jurusan');
 
   //query dari database
   $result = $this->dataKajur->login($username, $password, $kode_jurusan);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'username' => $row->username,
         'kode_jurusan' => $row->kode_jurusan,
         'nik' => $row->nik
       );
       $this->session->set_userdata('kajur', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', '<div class="alert alert-danger text-center">
     <i class="glyphicon glyphicon-remove"></i>  Kombinasi Salah ! </div>');
     $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); 
     return false;
   }
 }
}