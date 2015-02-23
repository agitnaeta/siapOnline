<?php
 
class CekLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('baak/baak','',TRUE);
 }
 
 function index()
 {
   //form
   $this->load->library('form_validation');
   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //jika gagal kembali ke hal-Login
     $this->load->view('baak/login');
   }
   else
   {
     //Ke-Halaman Utama
     redirect('baak/utama', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //validasi field
   $username= $this->input->post('username');
 
   //query the database
   $result = $this->baak->login($username, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'username' => $row->username,
         'nama_baak' => $row->nama_baak
       );
       $this->session->set_userdata('baak', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', '<div class="alert alert-danger text-center">
     <i class="glyphicon glyphicon-remove"></i>  Username/Password Salah ! </div>');
     $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); 
     return false;
   }
 }
}
