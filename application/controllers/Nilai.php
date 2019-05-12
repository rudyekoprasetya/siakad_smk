<?php
class nilai extends CI_controller {
		
		function __construct() {
			parent:: __construct();
				$this->load->model('model_nilai');
				$this->load->model('model_siswa');
				$this->load->model('model_mapel');
				if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
			}
			
		function index() {
			$config['base_url']=site_url('nilai/index/');
			$config['total_rows']=$this->model_nilai->jumlahdata(); // Total baris
			$config['per_page']= '10'; // per page
			$url=$this->uri->segment('3'); //mengambil nilai url
			if(empty($url)) {
				$dari=0;
				} else {
					$dari=$url;}				
			$this->pagination->initialize($config);
			$data['paging']=$this->pagination->create_links();
			$data['judul']='Management Nilai';
			$data['konten']=$this->model_nilai->get($config['per_page'],$dari);
			$this->template->display('admin_nilai',$data);
			}
			
		function add() {
			$nis=$this->input->post('nis',true);	
			$mapel=$this->input->post('mapel',true);		
			$nilai=$this->input->post('nilai',true);	
			$this->model_nilai->insert($nis,$mapel,$nilai);
			redirect('nilai');
			}
			
		function edit() { //fungsi untuk menampilkan data untuk di edit
			$data['judul']="Edit Data nilai";
			$id_nilai=$this->uri->segment(3);
			$data['data']=$this->model_nilai->edit($id_nilai);			
			$data['siswa']=$this->model_siswa->view();
			$data['mapel']=$this->model_mapel->get();
			$this->template->display('form_nilai',$data);
			}
		
		function edit_simpan() {
			$id_nilai=$this->input->post('id_nilai',true);
			$nis=$this->input->post('nis',true);	
			$mapel=$this->input->post('mapel',true);			
			$nilai=$this->input->post('nilai',true);
			$this->model_nilai->update($id_nilai,$nis,$mapel,$nilai);
			redirect('nilai');
		}
		
		function delete(){
			$id_nilai=$this->uri->segment(3);
			$this->model_nilai->delete($id_nilai);
			redirect('nilai');
		}
		
		function tambah() {
			$data['aksi']='tambah';
			$data['judul']='Input data Nilai Siswa';
			$data['siswa']=$this->model_siswa->view();
			$data['mapel']=$this->model_mapel->get();
			$this->template->display("form_nilai",$data);
		}

		function cetak_raport() {
			$data['judul']='Cetak Raport';
			$this->template->display("cetak_raport",$data);
		}
		//untuk menampilkan data di grafik			
		function chart() {
			// $siswa=$this->input->post('nis',true);
			// if(empty($siswa)) {
			// 	$nis="1264";
			// } else {
			// 	$nis=$siswa;
			// }
			$nis='65789';
			$data['judul']="Chart Nilai";
			$data['report']=$this->model_nilai->chart($nis);
			$this->template->display('chart_nilai',$data);
			// $this->load->view('chart_nilai',$data);
		}
	}
	
?>