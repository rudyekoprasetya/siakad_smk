<?php
class Login extends CI_controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model("cek_admin"); 
		}
	
	function index() {
		$data['judul']="Halaman Login";
		$this->load->view('login',$data);
		}
		
	function cek() { 
		$username=$this->input->post('username',TRUE);
		$password=$this->input->post('password',TRUE);
		$akses=$this->input->post('akses',TRUE);
		if ($akses=='admin') { //untuk admin
		$cek=$this->cek_admin->cek($username,md5($password));
			if($cek==TRUE) {
			$data=array('username'=>$username,'logged_in'=>TRUE );
			$this->session->set_userdata($data);
			redirect('siswa');
			} else {			
			redirect('login','refresh');	
			}
		} else { //untuk siswa
		$cek=$this->cek_admin->ceksiswa($username,md5($password));
			if($cek==TRUE) {
			$data=array('username'=>$username,'logged_in'=>TRUE );
			$this->session->set_userdata($data);
			redirect('raport');
			} else {			
			redirect('login','refresh');	
			}
		}
	}
		
	function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		redirect('login','refresh');
		}
}
?>