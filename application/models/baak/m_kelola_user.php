<?php 
    class M_kelola_user extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function datamhs()
        {
            $query=$this->db->query("select nim,nama,nama_jurusan,periode,status_smt from mahasiswa,jurusan where
                                     mahasiswa.kode_jurusan=jurusan.kode_nim");
            if ($query->num_rows()>0)
                return $query;
            else return null;
            
        }
        
        public function jumlahJurusan()
        {
            $query=$this->db->query("SELECT j.nama_jurusan, COUNT(s.kode_jurusan) as jumlah
                                        FROM mahasiswa s
                                        INNER JOIN jurusan j ON(j.kode_nim = s.kode_jurusan)
                                        GROUP BY s.kode_jurusan");
            if ($query->num_rows()>0)
                return $query;
            else
                return null;
        }
        
        public function disJurusan()
        {
            $query=$this->db->get('jurusan');
            if ($query->num_rows()>0)
                return $query;
            else 
                return null;
        }

        public function tambahMhs($nim)
        {
            $data= array(
                'nim'=>$nim,
                'nama'=>$this->input->post('nama'),
                'kode_jurusan'=>$this->input->post('jurusan'),
                'periode'=>$this->input->post('periode'),
                'status_smt'=>$this->input->post('semester')
            );
            $this->db->insert('mahasiswa',$data);
        }
        function nilaimax($jurusan)
        { 
                $query=mysql_query("select max(right(nim,5)) as maxsimal from mahasiswa where left(nim,2)='$jurusan'");
                $data=mysql_fetch_array($query);
                $lastNo=$data['maxsimal'];
                $nextNo=$lastNo+1;
                $nextNo=sprintf('%05s',$nextNo);
                return $nextNo;
        }  
        function tahunMax($jurusan)
        { 
                $query=mysql_query("select max(substr(nim,4,2)) as maximal from mahasiswa where left (nim,2)='$jurusan'");
                $data=mysql_fetch_array($query);
                $lastThn=$data['maximal'];
                $nextThn=$lastThn;
                return $nextThn;
        }
        public function pencarian($cari)
        {
           $query=$this->db->query("select nim,nama,nama_jurusan,password,status_smt,periode from mahasiswa,jurusan where
                                    mahasiswa.kode_jurusan=jurusan.kode_nim and (mahasiswa.nama like '%$cari%' xor mahasiswa.nim like
                                    '%$cari%');");
            if ($query->num_rows()>0) 
            { 
            return $query;
            }
            
            elseif  ($query->num_rows()<1) 
            {
                 $this->session->set_flashdata('flashdata', " 
                    <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> Data $cari tidak ada! 
                    <a class='btn btn-succes btn-sm' href='kelola_user'><i class='glyphicon glyphicon-remove text-right'></i></a
                    </p>");
                    redirect('baak/kelola_user','refresh');
                $query2=$this->db->query("select nim,nama,nama_jurusan,password,status_smt,periode from mahasiswa,jurusan where
                                            mahasiswa.kode_jurusan=jurusan.kode_nim");
                return $query2;
               
            }
        } 
        function delete($nim)
        {
        $this->db->where('nim',$nim);
        $this->db->delete('mahasiswa');
        
        }
        function pindah($nimLama)
        {
        $this->db->where('nim',$nimLama);
        $this->db->delete('mahasiswa');
        
        }
		
        function getEdit($nim)
        {
            $query=$this->db->query("select nim,password,nama,nama_jurusan,jurusan.kode_nim,periode,status_smt from
                                    mahasiswa,jurusan where mahasiswa.kode_jurusan=jurusan.kode_nim and nim='$nim'");
            if ($query->num_rows()>0)
                return $query;
            else
               return null;
        }
        function update_mhs($nim)
        {     
        $data=array (
                'nim'=>$nim,
                'nama'=>$this->input->post('nama'),
                'periode'=>$this->input->post('periode'),
                'status_smt'=>$this->input->post('semester'),
                'password'=>$this->input->post('password'),
                'kode_jurusan'=>$this->input->post('jurusan')
            );  
        $this->db->insert('mahasiswa',$data);
        }
        
        
            public function pencarianPassword($cari)
        {
           $query=$this->db->query("select nim,nama,nama_jurusan,password,status_smt,periode from mahasiswa,jurusan where
                                    mahasiswa.kode_jurusan=jurusan.kode_nim and (mahasiswa.nama like '%$cari%' xor mahasiswa.nim like
                                    '%$cari%');");
            if ($query->num_rows()>0) 
            { 
            return $query;
            }
            
            elseif  ($query->num_rows()<1) 
            {
                 $this->session->set_flashdata('flashdata', " 
                    <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> Data $cari tidak ada! 
                    <a class='btn btn-succes btn-sm' href='cek_password'><i class='glyphicon glyphicon-remove text-right'></i></a
                    </p>");
                    redirect('baak/cek_password','refresh');
                $query2=$this->db->query("select nim,nama,nama_jurusan,password,status_smt,periode from mahasiswa,jurusan where
                                            mahasiswa.kode_jurusan=jurusan.kode_nim");
                return $query2;
               
            }
        } 
    }


                