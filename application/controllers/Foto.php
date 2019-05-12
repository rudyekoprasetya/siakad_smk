<?php
class foto extends CI_controller {
		
		function __construct() {
			parent:: __construct();
				$this->load->model('model_foto');
				$this->load->model('model_siswa');
				if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
			}
		
		function index() {
			//pagination
			$config['base_url']=site_url('foto/index/');
			$config['total_rows']=$this->model_foto->jumlahdata(); // Total baris
			$config['per_page']= '3'; // per page
			$url=$this->uri->segment('3'); //mengambil nilai url
			if(empty($url)) {
				$dari=0;
				} else {
					$dari=$url;}
			$this->pagination->initialize($config);
			$data['paging']=$this->pagination->create_links();
			
			$data['konten']=$this->model_foto->get($config['per_page'],$dari);
			$data['judul']='Management Foto Siswa';
			$this->template->display('admin_foto',$data);//parsing ke view
		}
		
		function upload(){
			//config untuk upload file			
			$config=array(
			'allowed_types'=>'jpg|jpeg|png|gif', 'upload_path'=>'./foto/', 'max_size'=>'1024', 
			'file_name'=>url_title($this->input->post('gambar'))			
			);		
			$this->upload->initialize($config);
			if ($this->upload->do_upload('gambar')) {	//jika file telah di upload		
			//menyimpan data ke Database
			$nis=$this->input->post('nis',true);
			$file=$this->upload->file_name;
			$aktif=$this->input->post('aktif',true);
			$this->model_foto->add($nis,$file,$aktif);
			redirect('foto');
			} else {
			$error=$this->upload->display_errors();
			echo $error;			
			}
		}
		
		function delete() {
			$id=$this->uri->segment(3);
			$qry=$this->model_foto->edit($id);//cek apakah ada gambar dalam database
			$file=$qry->row(); //ambil data gambar
			if (isset($file->gambar)) { //jika gambar di upload
			unlink('./foto/'.$file->gambar);
			$this->model_foto->del($id);
			redirect('foto');
			}			
		}
		
		function edit() {
			$data['judul']="Ubah Data Foto";
			$id=$this->uri->segment(3);			
			$data['siswa']=$this->model_siswa->view();
			$data['data']=$this->model_foto->edit($id);
			$this->template->display("form_foto",$data);
		}
		
		function edit_simpan() {
			$config=array(
			'allowed_types'=>'jpg|jpeg|png|gif', 'upload_path'=>'./foto/', 'max_size'=>'1024', 
			'file_name'=>url_title($this->input->post('gambar'))			
			);					
			$this->upload->initialize($config);
			$id=$this->input->post('id',true); //ambil id
			$qry=$this->model_foto->edit($id);//cek apakah ada gambar dalam database
			$hasil=$qry->row(); 
			//$gambar=$hasil->gambar;//ambil data gambar
			if ($this->upload->do_upload('gambar')) { //jika gambar baru di upload
				unlink('./foto/'.$hasil->gambar); //hapus gambar lama		
				//menyimpan data ke Database
				$nis=$this->input->post('nis',true);		
				$file=$this->upload->file_name;
				$aktif=$this->input->post('aktif',true);
				$this->model_foto->update($id,$nis,$file,$aktif);
				redirect('foto'); 
			} else {
			//ubah data tanpa ubah gambar
			$nis=$this->input->post('nis',true);						
			$gambar=$hasil->gambar; //data gambar lama
			$aktif=$this->input->post('aktif',true);
			$this->model_foto->update($id,$nis,$gambar,$aktif);
			redirect('foto');
			}
		}
		
		function tambah () {
			$data['aksi']='tambah';
			$data['judul']='Upload Foto Siswa';
			$data['siswa']=$this->model_siswa->view();
			$this->template->display('form_foto',$data);
		}
}
?>