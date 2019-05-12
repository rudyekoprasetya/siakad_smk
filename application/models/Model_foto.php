<?php
 class Model_foto extends CI_Model {
		
		function __construct() {
			parent:: __construct(); 						
			} 
			
		function get($sampai=NULL,$dari=NULL) {
			$query="SELECT tb_gambar.id AS id, tb_gambar.nis AS nis, tb_siswa.nama AS nama, tb_gambar.gambar AS gambar, tb_gambar.aktif AS aktif FROM tb_siswa, tb_gambar WHERE tb_siswa.nis=tb_gambar.nis ORDER BY nis DESC LIMIT ".$dari.",".$sampai;
			$data=$this->db->query($query);
			return $data;
		}
		
		function add($nis,$gambar,$aktif) {
			$data=array( 'nis'=>$nis, 'gambar'=>$gambar, 'aktif'=>$aktif);
			$this->db->insert('tb_gambar',$data);
		}
			
		function edit($id) {
			$data=$this->db->where('id',$id);
			$data=$this->db->get('tb_gambar');
			return $data;
		}
		
		function update($id,$nis,$gambar,$aktif) {
			$data=array( 'nis'=>$nis, 'gambar'=>$gambar, 'aktif'=>$aktif);
			$this->db->where('id',$id);
			$this->db->update('tb_gambar',$data);
		}
		
		function del($id) {
			$this->db->where('id',$id);
			$this->db->delete('tb_gambar');
		}
		
		function jumlahdata() {
			return $this->db->count_all('tb_gambar');
		}

}
?>