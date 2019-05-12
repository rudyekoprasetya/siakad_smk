<?php
 class Model_nilai extends CI_Model {
		
		function __construct() {
			parent:: __construct(); 						
			} 	
		//tampil data
		function get($sampai=NULL,$dari=NULL) { 
			$query="SELECT tb_siswa.nis AS nis, tb_siswa.nama AS nama, tb_mapel.nama_mapel AS mapel, tb_nilai.nilai AS nilai, tb_nilai.tanggal AS tanggal, tb_nilai.id_nilai AS id_nilai FROM tb_siswa, tb_nilai, tb_mapel WHERE tb_siswa.nis=tb_nilai.nis AND tb_mapel.id_mapel = tb_nilai.mapel LIMIT ".$dari.",".$sampai;
			$data=$this->db->query($query);
			return $data;	
			}
		//tampil untuk edit
		function edit($id_nilai) { 
			$data=$this->db->where('id_nilai',$id_nilai);
			$data=$this->db->get('tb_nilai');
			return $data;
			}
		//simpan 
		function insert($nis,$mapel,$nilai) { 
			$data=array('nis'=>$nis,'mapel'=>$mapel,'nilai'=>$nilai);
			$this->db->insert('tb_nilai',$data);						
			}
		//untuk simpan edit
		function update($id_nilai,$nis,$mapel,$nilai) {
			$data=array('nis'=>$nis,'mapel'=>$mapel,'nilai'=>$nilai);
			$this->db->where('id_nilai',$id_nilai);
			$this->db->update('tb_nilai',$data);			
			}
		//untuk delete 
		function delete($id_nilai) {
			$this->db->where('id_nilai',$id_nilai);
			$this->db->delete('tb_nilai');
			}
			
		//fungsi untuk menghitung banyak data
		function jumlahdata() {
			return $this->db->count_all('tb_nilai');			
			}
		
		//untuk melihat nilai berdasarkan nis
		function viewnilai($nis) {
			$query="SELECT tb_siswa.nis AS nis, tb_siswa.nama AS nama, tb_mapel.nama_mapel AS mapel, tb_nilai.nilai AS nilai, tb_nilai.tanggal AS tanggal, tb_nilai.id_nilai AS id_nilai FROM tb_siswa, tb_nilai, tb_mapel WHERE tb_siswa.nis=tb_nilai.nis AND tb_mapel.id_mapel = tb_nilai.mapel AND tb_nilai.nis=".$nis;
			$data=$this->db->query($query);
			return $data;
		}

		//untuk laporan nilai siswa dalam bentuk chart
		function chart($nis) {
			$query="SELECT tb_mapel.nama_mapel AS mapel, tb_nilai.nilai AS nilai FROM tb_siswa, tb_nilai, tb_mapel WHERE tb_siswa.nis=tb_nilai.nis AND tb_mapel.id_mapel = tb_nilai.mapel AND tb_nilai.nis=$nis";
			$data=$this->db->query($query);
			return $data;
		}

		function grafik() {
			// $query="SELECT tb_mapel.nama_mapel AS mapel, tb_nilai.nilai AS nilai FROM tb_siswa, tb_nilai, tb_mapel WHERE tb_siswa.nis=tb_nilai.nis AND tb_mapel.id_mapel = tb_nilai.mapel";

			$query="SELECT c.nama_mapel AS mapel, b.nilai AS nilai FROM tb_siswa a JOIN tb_nilai b ON a.nis=b.nis JOIN tb_mapel c ON c.id_mapel=b.mapel";

			$data=$this->db->query($query);

			return $data;
		}

		function cari_grafik($nis) {
			// $query="SELECT tb_mapel.nama_mapel AS mapel, tb_nilai.nilai AS nilai FROM tb_siswa, tb_nilai, tb_mapel WHERE tb_siswa.nis=tb_nilai.nis AND tb_mapel.id_mapel = tb_nilai.mapel AND tb_nilai.nis='$nis'";

			$query="SELECT c.nama_mapel AS mapel, b.nilai AS nilai FROM tb_siswa a JOIN tb_nilai b ON a.nis=b.nis JOIN tb_mapel c ON c.id_mapel=b.mapel WHERE b.nis='$nis'";

			$data=$this->db->query($query);

			return $data;
		}
 	}

?>