<?php 
class Chome extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$data['url']=base_url();
		$temp['data']=$data;
		$temp['template']='screen/vhome';
		$this->load->view('bluesky/layout_screen',$temp);
	}
}
?>