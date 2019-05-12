<?php
 class Model_siswa extends CI_Model {
		
		function __construct() {
			parent:: __construct(); 						
			} 	
		//tampil data
		function get($sampai=NULL,$dari=NULL) { 
			$query="SELECT tb_siswa.nis AS nis, tb_siswa.nama AS nama, tb_siswa.alamat AS alamat, tb_siswa.kota_kab AS kota_kab, tb_siswa.gender AS gender, tb_kelas.nama_kelas AS kelas FROM tb_siswa, tb_kelas WHERE tb_siswa.kelas=tb_kelas.kode_kelas ORDER BY nis DESC LIMIT ".$dari.",".$sampai;
			$data=$this->db->query($query);
			return $data;	
			}
		//tampil untuk edit
		function edit($nis) { 
			$data=$this->db->where('nis',$nis);
			$data=$this->db->get('tb_siswa');
			return $data;
			}
		//simpan 
		function insert($nis,$nama,$password,$alamat,$kota_kab,$gender,$kelas) { 
			$data=array('nis'=>$nis,'nama'=>$nama, 'password'=>$password, 'alamat'=>$alamat, 'kota_kab'=>$kota_kab, 'gender'=>$gender, 'kelas'=>$kelas);
			$this->db->insert('tb_siswa',$data);						
			}
		//untuk simpan edit
		function update($nis,$nama,$password,$alamat,$kota_kab,$gender,$kelas) {
			$data=array('nama'=>$nama, 'password'=>$password, 'alamat'=>$alamat, 'kota_kab'=>$kota_kab, 'gender'=>$gender, 'kelas'=>$kelas);
			$this->db->where('nis',$nis);
			$this->db->update('tb_siswa',$data);			
			}
		//untuk delete 
		function delete($nis) {
			$this->db->where('nis',$nis);
			$this->db->delete('tb_siswa');
			}
			
		//fungsi untuk menghitung banyak data
		function jumlahdata() {
			return $this->db->count_all('tb_siswa');			
			}
		
		//view data 
		function view() {
			$data=$this->db->get('tb_siswa');
			return $data;
		}
					
 	}

?>