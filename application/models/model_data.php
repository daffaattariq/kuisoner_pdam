<?php

class Model_Data extends CI_Model
{
		function insert($data,$table)
		{
			return $this->db->insert($table,$data);
			// print_r($this->db->last_query());
		}
		function cek($where,$table)
		{
			$query = $this->db->get_where($table,$where);
			return $query->row_array();
        }
        function ambil_user($where,$table)
		{
			$query = $this->db->get_where($table,$where);
			return $query->row_array();
		}

	
		function ambil_data_where($table,$where_produk)
		{
			$query = $this->db->get_where($table,$where_produk);
			// print_r($this->db->last_query());			
			return $query->result_array();
			 
		}

		function ambil_data_result($table)
		{
			$query = $this->db->get($table);
			return $query->result_array();
		}

		function ambil_data_pertanyaan ()
		{
			$this->db->select('*');
			$this->db->from('pertanyaan');			
			$this->db->join('kategori_pertanyaan','kategori_pertanyaan.id_kategori=pertanyaan.id_kategori');
			$this->db->order_by('kategori_pertanyaan.id_kategori','asc');		
			$query=$this->db->get();			
			$data= $query->result_array();
			// print_r($data);
			// print_r($this->db->last_query()); 
			return $data;
		}

		function ambil_data_jawaban ()
		{
			$this->db->select('*');
			$this->db->from('pertanyaan');			
			$this->db->join('kategori_pertanyaan','kategori_pertanyaan.id_kategori=pertanyaan.id_kategori');
			$this->db->join('jawaban','jawaban.id_pertanyaan=pertanyaan.id_pertanyaan');	
			$this->db->join('login','login.id_login=jawaban.id_login');		
			$query=$this->db->get();			
			$data= $query->result_array();
			// print_r($data);
			//print_r($this->db->last_query()); 
			return $data;
		}

		function ambil_data_kritik_saran ()
		{
			$this->db->select('*');
			$this->db->from('kritik_saran');			
			$this->db->join('kategori_pertanyaan','kategori_pertanyaan.id_kategori=kritik_saran.id_kategori');			
			$this->db->join('login','login.id_login=kritik_saran.id_login');		
			$query=$this->db->get();			
			$data= $query->result_array();
			// print_r($data);
			//print_r($this->db->last_query()); 
			return $data;
		}

		function ambil_data_hasil ()
		{
			$this->db->select('count(jawaban) as jumlah , jawaban ,count(jawaban)*jawaban as kali , kategori_pertanyaan.kode_kategori as kode_kategori' );
			$this->db->from('pertanyaan');			
			$this->db->join('kategori_pertanyaan','kategori_pertanyaan.id_kategori=pertanyaan.id_kategori');
			$this->db->join('jawaban','jawaban.id_pertanyaan=pertanyaan.id_pertanyaan');	
			$this->db->join('login','login.id_login=jawaban.id_login');		
			$this->db->group_by('pertanyaan.id_kategori' );
			$this->db->group_by('jawaban.jawaban' );
			$query=$this->db->get();			
			$data= $query->result_array();
			// print_r($data);
			// print_r($this->db->last_query()); 
			return $data;
		}

		function ambil_data_sudah_isi_jawaban ()
		{
			$this->db->select('*' );
			$this->db->from('pertanyaan');			
			$this->db->join('kategori_pertanyaan','kategori_pertanyaan.id_kategori=pertanyaan.id_kategori');
			$this->db->join('jawaban','jawaban.id_pertanyaan=pertanyaan.id_pertanyaan');	
			$this->db->join('login','login.id_login=jawaban.id_login');		
			$this->db->group_by('login.id_login' );
			$query=$this->db->get();			
			$data= $query->result_array();
			// print_r($data);
			// print_r($this->db->last_query()); 
			return $data;
		}

		function ambil_data_belum_isi_jawaban()
		{
			$query = $this->db->query("SELECT * FROM `login` 
										left OUTER JOIN jawaban
										on  jawaban.id_login = login.id_login
										where jawaban.id_login is null and login.level != 2");
			$data = $query->result_array();
			// print_r($this->db->last_query()); 
			return $data;
		}

		// function ambil_data_kesimpulan($id_kategori)
		// {
		// 	$query = $this->db->query("SELECT pertanyaan.id_kategori as id_kategori, count(jawaban.jawaban) as jumlah_jawaban , jawaban as id_jawaban FROM `pertanyaan` 
		// 	JOIN `kategori_pertanyaan` 
		// 	ON `kategori_pertanyaan`.`id_kategori`=`pertanyaan`.`id_kategori` 
		// 	JOIN `jawaban` 
		// 	ON `jawaban`.`id_pertanyaan`=`pertanyaan`.`id_pertanyaan` 
		// 	JOIN `login` 
		// 	ON `login`.`id_login`=`jawaban`.`id_login`
		// 	where pertanyaan.id_kategori = '$id_kategori'
		// 	group by  pertanyaan.id_kategori , jawaban.jawaban");
		// 	$data = $query->result_array();
		// 	// print_r($this->db->last_query()); 
		// 	return $data;
		// }


		function ambil_data_jawaban_where ($where)
		{
			$this->db->select('*');
			$this->db->from('pertanyaan');			
			$this->db->join('kategori_pertanyaan','kategori_pertanyaan.id_kategori=pertanyaan.id_kategori');
			$this->db->join('jawaban','jawaban.id_pertanyaan=pertanyaan.id_pertanyaan');	
			$this->db->join('login','login.id_login=jawaban.id_login');		
			$this->db->where($where);
			$query=$this->db->get();			
			$data= $query->result_array();
			// print_r($data);
			// print_r($this->db->last_query()); 
			return $data;
		}

		function edit_data($where,$data,$table)
		{		
			$this->db->where($where);
			$this->db->update($table,$data);
			print_r($this->db->last_query()); 
			
		}
		function delete_data($where,$table)
		{
			$this->db->where($where);
			$this->db->delete($table);
			// print_r($this->db->last_query()); 
		}

		function truncate_data($table)
		{
			$this->db->truncate($table);
			// print_r($this->db->last_query()); 
		}

		//JAWABAN
		//cek apakah ada jawaban atau tidak
		
	


		//pertanyaan
		

}

?>