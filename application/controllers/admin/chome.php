<?php 
class Chome extends MY_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$data=array();
		$this->render('admin/vhome',$data);
	}
}
?>