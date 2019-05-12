<?php
 class Model_mapel extends CI_Model {
		
		function __construct() {
			parent:: __construct(); 						
			} 	
		//tampil data
		function get($sampai=NULL,$dari=NULL) { 
			$data=$this->db->get('tb_mapel');
			return $data;	
			}
		//tampil untuk edit
		function edit($id_mapel) { 
			$data=$this->db->where('id_mapel',$id_mapel);
			$data=$this->db->get('tb_mapel');
			return $data;
			}
		//simpan 
		function insert($id_mapel,$nama_mapel,$guru,$aktif) { 
			$data=array('id_mapel'=>$id_mapel,'nama_mapel'=>$nama_mapel,'guru'=>$guru,'aktif'=>$aktif);
			$this->db->insert('tb_mapel',$data);						
			}
		//untuk simpan edit
		function update($id_mapel,$nama_mapel,$guru,$aktif) {
			$data=array('nama_mapel'=>$nama_mapel,'guru'=>$guru,'aktif'=>$aktif);
			$this->db->where('id_mapel',$id_mapel);
			$this->db->update('tb_mapel',$data);			
			}
		//untuk delete 
		function delete($id_mapel) {
			$this->db->where('id_mapel',$id_mapel);
			$this->db->delete('tb_mapel');
			}
			
		//fungsi untuk menghitung banyak data
		function jumlahdata() {
			return $this->db->count_all('tb_mapel');			
			}
					
 	}

?>