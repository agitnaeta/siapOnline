<?php
	class M_absen extends CI_Model
	{
		public function __construcct()
		{
			patent::__construcct();
		}

		public function dataAbsen()
		{
			$query=$this->db->get('mahasiswa');
			if ($query->num_rows()>0)
				return $query;
			else
				return null;
		}
	}