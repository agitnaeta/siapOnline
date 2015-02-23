<?php
    class M_khs_krs extends CI_Model
    {
        public function __construct()
        {
            parent:: __construct();
        }
        function dataMhs()
        {
            $query=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan 
                                        from mahasiswa,kelas,jurusan where mahasiswa.nim=kelas.nim 
                                        and mahasiswa.kode_jurusan=jurusan.kode_nim");
            if ($query->num_rows()>0)
                return $query;
            else
                return null;
        }
        function dataJurusan()
        {
            $query=$this->db->query("select kode_jurusan, nama_jurusan from jurusan");
            if ($query->num_rows()>0)
                return $query;
            else 
                return null;
        }   
        function dataKelas()
        {
            $query=$this->db->query("select distinct(kode_kelas) from kelas");
            if ($query->num_rows()>0)
                return $query;
            else 
                return null;
        }
       
            
        function pencarian($cari)
        {
             $query=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan
                                        from mahasiswa,kelas,jurusan
                                        where mahasiswa.nim like '%$cari%' and kelas.nim like '%$cari%'
                                        and mahasiswa.kode_jurusan=jurusan.kode_nim;");
            if ($query->num_rows()>0) {
                return $query; }
            elseif ($query->num_rows()<1)
            {
                 $this->session->set_flashdata('flashdata', " 
                    <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> Data $cari tidak ada! 
                    <a class='btn btn-succes btn-sm' href='khs_krs'><i class='glyphicon glyphicon-remove text-right'></i></a
                    </p>");
                    redirect('baak/khs_krs','refresh');
                $query2=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan
                                            from mahasiswa,kelas,jurusan
                                            where mahasiswa.nama like '%$cari%' and mahasiswa.nim=kelas.nim
                                            and mahasiswa.kode_jurusan=jurusan.kode_nim;");
            return $query2;
            }
            else {
                return null;
            }
        }
        
        function cariKelas($cari)
        {
            $query=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan
                                    from mahasiswa,kelas,jurusan
                                    where kelas.kode_kelas='$cari' and mahasiswa.nim=kelas.nim and mahasiswa.kode_jurusan=jurusan.kode_nim");
          if ($query->num_rows()>0)
            {
              return $query;
            }
            
          elseif($query->num_rows()<1)
            {
            $this->session->set_flashdata('flashdata', " 
                    <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> Data Kelas $cari tidak ada! 
                    <a class='btn btn-succes btn-sm' href='khs_krs'><i class='glyphicon glyphicon-remove text-right'></i></a
                    </p>");
                    redirect('baak/khs_krs','refresh');
                
            $query2=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan
                                    from mahasiswa,kelas,jurusan
                                    where kelas.kode_kelas='$cari' and mahasiswa.nim=kelas.nim and mahasiswa.kode_jurusan=jurusan.kode_nim");
              return $query2;
            }
            
            else return null;
        }
        
        function cariSemester($cari)
        {
            $query=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan from
                                        mahasiswa,kelas,jurusan where mahasiswa.status_smt='$cari' 
                                        and mahasiswa.nim=kelas.nim and mahasiswa.kode_jurusan=jurusan.kode_nim");
            if ($query->num_rows()>0)
            {
                return $query;
            }
            
            elseif ($query->num_rows()<1)
            {
                    $this->session->set_flashdata('flashdata', " 
                    <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> Data Semester $cari tidak ada! 
                    <a class='btn btn-succes btn-sm' href='khs_krs'><i class='glyphicon glyphicon-remove text-right'></i></a
                    </p>");
                    redirect('baak/khs_krs','refresh');
                    
                    $query2=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan from
                                        mahasiswa,kelas,jurusan where mahasiswa.status_smt='$cari' 
                                        and mahasiswa.nim=kelas.nim and mahasiswa.kode_jurusan=jurusan.kode_nim");
                return query2;
                
            }
                return null;
        }
        
        function cariJurusan($cari)
        {
            $query=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan
                                    from mahasiswa,kelas,jurusan where jurusan.kode_jurusan='$cari' and mahasiswa.nim=kelas.nim and
                                    mahasiswa.kode_jurusan=jurusan.kode_nim");
            if ($query->num_rows()>0)
                return $query;
            elseif ($query->num_rows()<1)
            {
                 $this->session->set_flashdata('flashdata', " 
                    <p class='alert alert-danger text-center'><i class='glyphicon glyphicon-ok'></i> Data Jurusan $cari tidak ada! 
                    <a class='btn btn-succes btn-sm' href='khs_krs'><i class='glyphicon glyphicon-remove text-right'></i></a
                    </p>");
                    redirect('baak/khs_krs','refresh');
                $query2=$this->db->query("select mahasiswa.nim,mahasiswa.nama,kelas.kode_kelas,mahasiswa.status_smt,jurusan.nama_jurusan
                                    from mahasiswa,kelas,jurusan where jurusan.kode_jurusan='$cari' and mahasiswa.nim=kelas.nim and
                                    mahasiswa.kode_jurusan=jurusan.kode_nim");
                return $query2;
                
            }
            else 
            {
                return null;
            }
        }
        
    }