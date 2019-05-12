<?php
class Raport extends CI_controller {
		
		function __construct() {
			parent:: __construct();
				$this->load->model('model_siswa');
				$this->load->model('model_kelas');				
				$this->load->model('model_nilai');
				$this->load->library('template_raport');
				if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
			}
		
		function index() {
			$nis=$this->session->userdata('username');
			$data['judul']='Profil Anda';
			$data['kelas']=$this->model_kelas->get();
			$data['konten']=$this->model_siswa->edit($nis);
			$this->template_raport->display('profil_siswa',$data);
		}
		
		function ubah() {
			$nis=$this->input->post('nis',true);
			$nama=$this->input->post('nama',true);
			$password=$this->input->post('password',true);
			$alamat=$this->input->post('alamat',true);	
			$kota_kab=$this->input->post('kota_kab',true);
			$gender=$this->input->post('gender',true);	
			$kelas=$this->input->post('kelas',true);	
			$this->model_siswa->update($nis,$nama,md5($password),$alamat,$kota_kab,$gender,$kelas);
			redirect('Raport');
		}
		
		function laporan() {
			$nis=$this->session->userdata('username');
			$data['judul']='Laporan Hasil Belajar Siswa';
			$data['konten']=$this->model_nilai->viewnilai($nis);
			$this->template_raport->display('laporan',$data);	
		}

		function cetak() {
			$nis=$this->session->userdata('username');
			$data['judul']='Laporan Hasil Belajar Siswa';
			$data['konten']=$this->model_nilai->viewnilai($nis);
			$this->load->view('cetak',$data);
		}

		function grafik() {
			$nis=$this->session->userdata('username');
			$data['judul']="Grafik Nilai";
			$data['report']=$this->model_nilai->chart($nis);
			$this->template_raport->display('chart_nilai',$data);
		}
} 
?>