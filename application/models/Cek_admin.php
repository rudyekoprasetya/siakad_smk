<?php
class Cek_admin extends CI_Model {

function __construct() {
		 parent:: __construct();
	}		

function cek($user,$pass) { //fungsi Cek user apakah ada dalam tabel admin
	 $this->db->where('username',$user);
	 $this->db->where('password',$pass);
	 $data=$this->db->get('tb_admin');
	 if ($data->num_rows() > 0) {
	 	return TRUE;		
	 	}
	 else {
		return FALSE;	 	
	 	}
	}

function ceksiswa($user,$pass) { //fungsi Cek user apakah ada dalam tabel siswa
	 $this->db->where('nis',$user);
	 $this->db->where('password',$pass);
	 $data=$this->db->get('tb_siswa');
	 if ($data->num_rows() > 0) {
	 	return TRUE;		
	 	}
	 else {
		return FALSE;	 	
	 	}
	}
}
?>