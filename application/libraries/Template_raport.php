<?php 
class Template_raport {
protected $_ci;

	function __construct() {
		$this->_ci=&get_instance();	
		}
	function display($template,$data=null) {
		$data['_content']	=$this->_ci->load->view($template,$data,true);
		$data['_header']	=$this->_ci->load->view('template_raport/header',$data,true);
		$this->_ci->load->view('/view_raport.php',$data);
		}				
}
?>