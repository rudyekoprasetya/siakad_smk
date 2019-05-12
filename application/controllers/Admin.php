<?php
class Admin extends CI_controller {
		
		function __construct() {
			parent:: __construct();
				$this->load->model('model_admin');
				if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
			}
			
		function index() {
			$username=$this->session->userdata('username');
			$data['judul']='Ganti Password';
			$data['konten']=$this->model_admin->edit($username);
			$this->template->display('admin',$data);
			}			
		
		function edit_simpan() {
			$id=$this->input->post('id',true);
			$username=$this->input->post('username',true);				
			$password=$this->input->post('password',true);	
			$this->model_admin->update($id,$username,md5($password));
			redirect('admin');
		}
		
	}
	
?>