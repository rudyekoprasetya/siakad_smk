<?php
 class Model_admin extends CI_Model {
		
		function __construct() {
			parent:: __construct(); 						
			} 	
		
		//tampil untuk edit
		function edit($username) { 
			$data=$this->db->where('username',$username);
			$data=$this->db->get('tb_admin');
			return $data;
			}
		
		//untuk simpan edit
		function update($id,$username,$password) {
			$data=array('username'=>$username, 'password'=>$password);
			$this->db->where('id',$id);
			$this->db->update('tb_admin',$data);			
			}	
					
 	}

?>