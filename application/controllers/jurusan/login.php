<?php
class Login extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('jurusan/dataJurusan');;
    }
    
    public function index()
    {
        $this->load->helper(array('form'));
        $data['jurusan']=$this->dataJurusan->disJurusan();
        $this->load->view('jurusan/login',$data);
    }   
}