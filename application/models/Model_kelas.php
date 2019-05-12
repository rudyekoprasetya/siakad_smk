<?php
 class Model_kelas extends CI_Model {
		
		function __construct() {
			parent:: __construct(); 						
			} 	
		//tampil data
		function get($sampai=NULL,$dari=NULL) { 
			$data=$this->db->get('tb_kelas');
			return $data;	
			}
		//tampil untuk edit
		function edit($kode_kelas) { 
			$data=$this->db->where('kode_kelas',$kode_kelas);
			$data=$this->db->get('tb_kelas');
			return $data;
			}
		//simpan 
		function insert($kode_kelas,$nama_kelas,$aktif) { 
			$data=array('kode_kelas'=>$kode_kelas,'nama_kelas'=>$nama_kelas, 'aktif'=>$aktif);
			$this->db->insert('tb_kelas',$data);						
			}
		//untuk simpan edit
		function update($kode_kelas,$nama_kelas,$aktif) {
			$data=array('nama_kelas'=>$nama_kelas, 'aktif'=>$aktif);
			$this->db->where('kode_kelas',$kode_kelas);
			$this->db->update('tb_kelas',$data);			
			}
		//untuk delete 
		function delete($kode_kelas) {
			$this->db->where('kode_kelas',$kode_kelas);
			$this->db->delete('tb_kelas');
			}
			
		//fungsi untuk menghitung banyak data
		function jumlahdata() {
			return $this->db->count_all('tb_kelas');			
			}
					
 	}

?>