<?php
class Grafik extends CI_controller {
		
	function __construct() {
		parent::__construct();
		//load model nilai
		$this->load->model('Model_nilai');
		//agar user login dulu
		if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}
	}

	function index(){
		$data['judul']='Grafik Nilai Siswa';
		$data['grafik']=$this->Model_nilai->grafik();
		$this->template->display('grafik_nilai',$data);

	}

	function cari() {
		//ambil data nis dari form
		$nis=$this->input->post('nis',true);
		$data['judul']='Grafik Nilai Siswa';
		$data['grafik']=$this->Model_nilai->cari_grafik($nis);
		$this->template->display('grafik_nilai',$data);
	}
}