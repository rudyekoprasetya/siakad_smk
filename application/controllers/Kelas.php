<?php
class Kelas extends CI_controller {
		
		function __construct() {
			parent:: __construct();
				$this->load->model('model_kelas');
				if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
			}
			
		function index() {
			$config['base_url']=site_url('kelas/index/');
			$config['total_rows']=$this->model_kelas->jumlahdata(); // Total baris
			$config['per_page']= '10'; // per page
			$url=$this->uri->segment('3'); //mengambil nilai url
			if(empty($url)) {
				$dari=0;
				} else {
					$dari=$url;}				
			$this->pagination->initialize($config);
			$data['paging']=$this->pagination->create_links();
			$data['judul']='Management Kelas';
			$data['konten']=$this->model_kelas->get($config['per_page'],$dari);
			$this->template->display('admin_kelas',$data);
			}
			
		function add() {
			$kode_kelas=$this->input->post('kode_kelas',true);
			$nama_kelas=$this->input->post('nama_kelas',true);			
			$aktif=$this->input->post('aktif',true);	
			$this->model_kelas->insert($kode_kelas,$nama_kelas,$aktif);
			redirect('kelas');
			}
			
		function edit() { //fungsi untuk menampilkan data untuk di edit
			$data['judul']="Edit Data kelas";
			$kode_kelas=$this->uri->segment(3);
			$data['konten']=$this->model_kelas->edit($kode_kelas);
			$this->template->display("form_kelas",$data);
			}
		
		function edit_simpan() {
			$kode_kelas=$this->input->post('kode_kelas',true);
			$nama_kelas=$this->input->post('nama_kelas',true);				
			$aktif=$this->input->post('aktif',true);	
			$this->model_kelas->update($kode_kelas,$nama_kelas,$aktif);
			redirect('kelas');
		}
		
		function delete(){
			$kode_kelas=$this->uri->segment(3);
			$this->model_kelas->delete($kode_kelas);
			redirect('kelas');
		}
		
		function tambah() {
			$data['aksi']='tambah';
			$data['judul']='Input data Kelas';
			$this->template->display("form_kelas",$data);
		}
		
	}
	
?>
