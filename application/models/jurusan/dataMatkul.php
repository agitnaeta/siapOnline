<?php   
    class DataMatkul extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function dataUmum($kode_jurusan)
        {
            $this->db->order_by("kode_mk", "desc");
            $this->db->where('kode_jurusan',$kode_jurusan);
            $query=$this->db->get('matakuliah');
            if ($query->num_rows()>0)
                return $query;
            else
                return null;
        }
        
        public function tambahData($kodemk,$k)
        {
            $data=array(
                'kode_mk'=>$kodemk,
                'kode_jurusan'=>$k,
                'matakuliah'=>$this->input->post('matakuliah'),
                'semester'=>$this->input->post('smt'),
                'tahun_ajaran'=>$this->input->post('tajaran'),
                'sks'=>$this->input->post('sks')
            );
            $this->db->insert('matakuliah',$data);
        }
        public function hapusData($kode_mk)
        {
        $this->db->where('kode_mk',$kode_mk);
        $query=$this->db->delete('matakuliah');
        }
        
        public function dataSatuan($kode_mk)
        {
            $this->db->where('kode_mk',$kode_mk);
            $query=$this->db->get('matakuliah');
            if ($query->num_rows>0)
                return $query;
            else
                return
                 null;
        }
        
        public function updateData()
        {
           $kode_mk=$this->input->post('kode');    
           $data=array(
                'kode_mk'=>$this->input->post('kode'),
                'matakuliah'=>$this->input->post('matakuliah'),
                'semester'=>$this->input->post('smt'),
                'tahun_ajaran'=>$this->input->post('tajaran'),
                'sks'=>$this->input->post('sks')
            );
            $this->db->where('kode_mk',$kode_mk);
            $this->db->update('matakuliah',$data);   
        }
        
        public function cariData($cari)
        {
         $this->db->like('matakuliah',$cari);
            $query=$this->db->get('matakuliah');
            if ($query->num_rows()>0)
            {
                return $query;
            }
            elseif ($query->num_rows()<1)
            {
                $this->session->set_flashdata('flashdata'," 
                <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> 
                Data '$cari' tidak ada! 
                <a class='btn btn-danger btn-sm' href=''><i class='glyphicon glyphicon-remove'></i> </a
                </p>");
                redirect('jurusan/setting_kurikulum/form_cari','refesh');
                $query2=$this->db->get('matakuliah');
                return $query2;
            }
            else
            {
                return null;
            }
        }
    }