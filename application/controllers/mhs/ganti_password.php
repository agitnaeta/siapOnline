<?php 
    class Ganti_password extends CI_Controller
    {
        function __construct()
        {
            parent:: __construct();
            $this->load->model('mhs/m_ganti_password');
            $this->db2=$this->load->database("db2",TRUE); 
            $this->load->model('mhs/mahasiswa');
            $this->load->library('input');
        }
            
        public function index()
         {
           if($this->session->userdata('logged_in'))
           {
             $session_data=$this->session->userdata('logged_in');
             $nim=$session_data['nim']; 
             $data['nama']=$session_data['nama'];   
             $data['mhs']=$this->mahasiswa->identitas($nim);
             $this->load->view('mhs/ganti_password', $data);
           }
           else
           {
             redirect('mhs/login', 'refresh');
           }
         } 
         function update()
        {
            $nim=$this->input->post('nim');
            $nama=$this->input->post('nama');
            $pb=$this->input->post('pb');
            $this->m_ganti_password->update_password($nim);
            $this->session->set_flashdata('flashdata',
            "<p class='alert alert-success text-center'><i class='glyphicon glyphicon-ok'></i>
            Data '$nama' login anda menjadi NIM :'$nim' dan Password :'$pb'</p>");
            $data['mhs']=$this->mahasiswa->identitas($nim);
            redirect ('mhs/ganti_password','refresh'); 
        }

    }