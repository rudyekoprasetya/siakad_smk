<?php
class Api extends CI_controller {
		
		function __construct() {
			parent:: __construct();			
				$this->load->model('model_kelas');
				header("Access-Control-Allow-Origin: *"); //agar api bisa di buka di browser
			}

		function tampil_json() {
			$data=array();
			$hasil=$this->model_kelas->get(50,0);
			echo json_encode($hasil->result());
		}

		function simpan() {
			$kode_kelas=$this->input->post('kode_kelas',true);
			$nama_kelas=$this->input->post('nama_kelas',true);		
			$aktif=$this->input->post('aktif',true);	
			$aksi=$this->model_kelas->insert($kode_kelas,$nama_kelas,$aktif);
			if ($aksi) {
				echo "success";
			} else {
				echo "error";
			}
		}

		function edit_json() {
			$kode_kelas=$_GET['kode_kelas'];
			$hasil=$this->model_kelas->edit($kode_kelas);
			echo json_encode($hasil->result());
		}

		function ubah() {
			$kode_kelas=$this->input->post('kode_kelas',true);
			$nama_kelas=$this->input->post('nama_kelas',true);			
			$aktif=$this->input->post('aktif',true);	
			$aksi=$this->model_kelas->update($kode_kelas,$nama_kelas,$aktif);
			if ($aksi) {
				echo "success";
			} else {
				echo "error";
			}
		}

		function delete(){
			$kode_kelas=$this->uri->segment(3);
			$aksi=$this->model_kelas->delete($kode_kelas);
			if ($aksi) {
				echo "success";
			} else {
				echo "error";
			}
		}

		function save_json() {
			$data=$this->input->post('formData',true);
			echo json_decode($data);
		}
}