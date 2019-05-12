<?php
class Siswa extends CI_controller {
		
		function __construct() {
			parent:: __construct();
				$this->load->model('model_siswa');
				$this->load->model('model_kelas');
				if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
			}
			
		function index() {
			$config['base_url']=site_url('siswa/index/');
			$config['total_rows']=$this->model_siswa->jumlahdata(); // Total baris
			$config['per_page']= '10'; // per page
			$url=$this->uri->segment('3'); //mengambil nilai url
			if(empty($url)) {
				$dari=0;
				} else {
					$dari=$url;}				
			$this->pagination->initialize($config);
			$data['paging']=$this->pagination->create_links();
			$data['judul']='Management Siswa';
			$data['konten']=$this->model_siswa->get($config['per_page'],$dari);
			$this->template->display('admin_siswa',$data);
			}
			
		function add() {
			$nis=$this->input->post('nis',true);
			$nama=$this->input->post('nama',true);
			$password=$this->input->post('password',true);
			$alamat=$this->input->post('alamat',true);	
			$kota_kab=$this->input->post('kota_kab',true);
			$gender=$this->input->post('gender',true);	
			$kelas=$this->input->post('kelas',true);	
			$this->model_siswa->insert($nis,$nama,md5($password),$alamat,$kota_kab,$gender,$kelas);
			redirect('siswa');
			}
			
		function edit() { //fungsi untuk menampilkan data untuk di edit
			$data['judul']="Edit Data Siswa";
			$nis=$this->uri->segment(3);
			$data['data']=$this->model_siswa->edit($nis);
			$data['kelas']=$this->model_kelas->get();
			$this->template->display("form_siswa",$data);
			}
		
		function edit_simpan() {
			$nis=$this->input->post('nis',true);
			$nama=$this->input->post('nama',true);
			$password=$this->input->post('password',true);
			$alamat=$this->input->post('alamat',true);	
			$kota_kab=$this->input->post('kota_kab',true);
			$gender=$this->input->post('gender',true);	
			$kelas=$this->input->post('kelas',true);	
			$this->model_siswa->update($nis,$nama,md5($password),$alamat,$kota_kab,$gender,$kelas);
			redirect('siswa');
		}
		
		function delete(){
			$nis=$this->uri->segment(3);
			$this->model_siswa->delete($nis);
			redirect('siswa');
		}
		
		function tambah() {
			$data['aksi']='tambah';
			$data['judul']='Input data Siswa';
			$data['kelas']=$this->model_kelas->get();
			$this->template->display('form_siswa',$data);
		}
		
	}
	
?>