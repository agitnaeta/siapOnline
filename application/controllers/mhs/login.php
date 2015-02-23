<?php
class Login extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->db2=$this->load->database("db2",TRUE); 
    }
    
    public function index()
    {
        
        $this->load->helper(array('form'));
        $this->load->view('mhs/login');
    }

}