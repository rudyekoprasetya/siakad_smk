<?php
class Mapel extends CI_controller {
		
		function __construct() {
			parent:: __construct();
				$this->load->model('model_mapel');
				if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
			}
			
		function index() {
			$config['base_url']=site_url('mapel/index/');
			$config['total_rows']=$this->model_mapel->jumlahdata(); // Total baris
			$config['per_page']= '10'; // per page
			$url=$this->uri->segment('3'); //mengambil nilai url
			if(empty($url)) {
				$dari=0;
				} else {
					$dari=$url;}				
			$this->pagination->initialize($config);
			$data['paging']=$this->pagination->create_links();
			$data['judul']='Management Mata Pelajaran';
			$data['konten']=$this->model_mapel->get($config['per_page'],$dari);
			$this->template->display('admin_mapel',$data);
			}
			
		function add() {
			$id_mapel=$this->input->post('id_mapel',true);
			$nama_mapel=$this->input->post('nama_mapel',true);	
			$guru=$this->input->post('guru',true);			
			$aktif=$this->input->post('aktif',true);	
			$this->model_mapel->insert($id_mapel,$nama_mapel,$guru,$aktif);
			redirect('mapel');
			}
			
		function edit() { //fungsi untuk menampilkan data untuk di edit
			$data['judul']="Edit Data Mata Pelajaran";
			$id_mapel=$this->uri->segment(3);
			$data['data']=$this->model_mapel->edit($id_mapel);
			$this->template->display("form_mapel",$data);
			}
		
		function edit_simpan() {
			$id_mapel=$this->input->post('id_mapel',true);
			$nama_mapel=$this->input->post('nama_mapel',true);	
			$guru=$this->input->post('guru',true);			
			$aktif=$this->input->post('aktif',true);
			$this->model_mapel->update($id_mapel,$nama_mapel,$guru,$aktif);
			redirect('mapel');
		}
		
		function delete(){
			$id_mapel=$this->uri->segment(3);
			$this->model_mapel->delete($id_mapel);
			redirect('mapel');
		}
		
		function tambah() {
			$data['aksi']='tambah';
			$data['judul']='Input data Mata Pelajaran';
			$this->template->display("form_mapel",$data);
		}
		
	}
	
?>