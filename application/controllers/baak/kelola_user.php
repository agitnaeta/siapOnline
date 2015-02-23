<?php 
session_start();
    class Kelola_user extends CI_Controller{
        public function __construct()
        {
            parent:: __construct();
            $this->load->model('baak/baak');
            $this->load->model('baak/m_kelola_user');
            $this->load->library('Excel_generator');
            $this->load->helper('dateindo');
             
        }
        
        public function index()
        {
            if($this->session->userdata('baak'))
            { 
             $session_data=$this->session->userdata('baak');  
             $username=$session_data['username'];   
             $data['data']=$this->baak->identitas($username);   
             $data['mhs']=$this->m_kelola_user->datamhs();
             $data['disJurusan']=$this->m_kelola_user->disJurusan();    
             $this->load->view('baak/kelola_user', $data);
            }
        else
            {
            redirect('baak/login', 'refresh');
            }
        }
        
        public function tambah_mhs()
        {
            $date=substr(date('Y'),2);
            $jurusan=$this->input->post('jurusan');
            $nama=$this->input->post('nama');
            $urut=$this->m_kelola_user->nilaimax($jurusan);//no max/jurusan
            $tahun=$this->m_kelola_user->tahunMax($jurusan);  //cek max tahun
            if ($tahun<$date)
            {
                $thn_masuk=$date;
                $nim="$jurusan.$thn_masuk$urut";
            }
            else
            {
                $thn_masuk=$tahun;
                $nim="$jurusan.$thn_masuk$urut";
            }
            $this->m_kelola_user->tambahMhs($nim);
            $this->session->set_flashdata('flashdata', " 
            <p class='alert alert-success text-center'><i class='glyphicon glyphicon-ok'></i> Data $nama Berhasil Disimpan 
            <a class='btn btn-succes btn-sm' href='kelola_user'><i class='glyphicon glyphicon-remove'></i> </a
            </p>");
            redirect('baak/kelola_user','refresh');
            
        }
        
        public function cari()
        {
            $cari=$this->input->post('cari');
            $data['mhs']=$this->m_kelola_user->pencarian($cari);
            $this->load->view('baak/kelola_user',$data);   
        }
        
        public function hapus($nim)
        {
            $this->m_kelola_user->delete($nim);
            $this->session->set_flashdata('flashdata', ' 
            <p class="alert alert-success text-center"><i class="glyphicon glyphicon-ok"></i> Data Berhasil Terhapus 
            <a class="btn btn-success btn-sm" href="kelola_user"><i class="glyphicon glyphicon-remove"></i> </a
            </p>');
            redirect ('baak/kelola_user','refresh');
        }
        public function form_update($nim)
        {
            $data['mhs']=$this->m_kelola_user->getEdit($nim);
             $data['disJurusan']=$this->m_kelola_user->disJurusan(); 
			$this->load->view('baak/form_update',$data);
        }
        
        public function update()
        {
            $nim=$this->input->post('nim');
            
            $nimDepan=substr($nim,0,2);
            $tahun=substr($nim,3,2);
            $jurusan=$this->input->post('jurusan');
            $nimLama=$nim;
            if ($nimDepan==$jurusan)
            {
                $nim=$nim;
               
            }
            else
            {
                $nimBelakang=$urut=$this->m_kelola_user->nilaimax($jurusan);
                $nim="$jurusan.$tahun$nimBelakang";
            }
          $this->m_kelola_user->pindah($nimLama);
          $this->m_kelola_user->update_mhs($nim);
         
            $this->session->set_flashdata('flashdata', '
            <p class="alert alert-success text-center"><i class="glyphicon glyphicon-ok"></i> Data  Berhasil di Update 
            <a class="btn btn-success btn-sm" href="kelola_user"><i class="glyphicon glyphicon-remove"></i> </a></p>');
            redirect ('baak/kelola_user','refresh');
        }
        
        public function excel()
        {
        $query = $this->db->get('mahasiswa');
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('NIM', 'Nama', 'Jurusan', 'Periode','Semester'));
        $this->excel_generator->set_column(array('nim', 'nama', 'kode_jurusan', 'periode','status_smt'));
        $this->excel_generator->set_width(array(25, 15, 30, 15));
        $this->excel_generator->exportTo2003('Laporan Users');
        }
        
    }