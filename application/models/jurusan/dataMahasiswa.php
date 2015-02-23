<?php 
	class DataMahasiswa extends CI_Model
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->library('input');
		}

		function cariMhs($cari)
		{
			$this->db->select('*');
			$this->db->like('nama',$cari);
			$query=$this->db->get('mahasiswa');
			if ($query->num_rows>0)
			{
				foreach ($query as $row) 
				{
					$new_row ['nim']=htmlentities(stripslashes($row['nim']));
					$new_row['nama']=htmlentities(stripslashes($row['nama']));
					$new_row['status_smt']=htmlentities(stripcslashes($row['status_smt']));
				}
				echo json_encode($new_row);
			}
			else
			{
				return null;
			}
		}

		function jurusanMhs($k)
        {
            $query=$this->db->query("select * from jurusan,ketua_jurusan,mahasiswa 
                                    where  jurusan.kode_jurusan=ketua_jurusan.kode_jurusan and 
                                    ketua_jurusan.kode_jurusan='$k' 
                                    and mahasiswa.kode_jurusan=jurusan.kode_nim");
            if ($query->num_rows()>0)
                return $query;
            else 
                return null;
        }
	}