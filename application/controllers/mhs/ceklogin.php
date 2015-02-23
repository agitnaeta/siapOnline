<?php
 
class CekLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('mhs/mahasiswa','',TRUE);
   $this->db2=$this->load->database("db2",TRUE); 
 }
 
 function index()
 {
   //form
   $this->load->library('form_validation');
   $this->form_validation->set_rules('nim', 'nim', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //jika gagal kembali ke hal-Login
     $this->load->view('mhs/login');
   }
   else
   {
     //Ke-Halaman Utama
     redirect('mhs/utama', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   $nim = $this->input->post('nim');
   $result = $this->mahasiswa->login($nim, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'nim' => $row->nim,
         'nama'=>$row->nama   
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
    $this->form_validation->set_message('check_database', '<div class="alert alert-danger text-center">
     <i class="glyphicon glyphicon-remove"></i>  NIM/Password Salah ! </div>');
     $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); 
     return false;
   }
 }
}
?>