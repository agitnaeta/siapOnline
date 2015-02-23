<?php
	class M_matkul extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		function dataKurikulum($nim)
		{
			$kode_jurusan=substr($nim,0,2);
			$query=$this->db2->query("select distinct(semester) from matakuliah  order by semester limit 2");
			if ($query->num_rows>0)
			{
				return $query;
			}
			else
			{
				return null;
			}

		}
		function dataMatkul($nim)
		{
			$kode_jurusan=substr($nim,0,2);
			$query=$this->db2->query("select * from matakuliah limit 3");
			if ($query->num_rows>0)
			{
				return $query;
			}
			else
			{
				return null;
			}
		}
	}