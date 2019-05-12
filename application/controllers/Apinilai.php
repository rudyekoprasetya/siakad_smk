<?php
class Apinilai extends CI_controller {
		
	function __construct() {
		parent:: __construct();		
			//load model nilai	
			$this->load->model('model_nilai');
			//agar api bisa di buka di browser
			header("Access-Control-Allow-Origin: *"); 
	}

	function tampil() {
		//ambil data get dari android
		$nis=$_GET['nis'];
		// $nis='1264';
		//cari nilai berdasarkan nis
		$data=$this->model_nilai->viewnilai($nis);
		//jadikan JSON
		echo json_encode($data->result());

	}


}