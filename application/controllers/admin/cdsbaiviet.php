<?php 
class Cdsbaiviet extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/Mdsbaiviet');
	}
	function index(){
		$data=array(
			'info'=>'Danh sách thông tin bài viết'
		);
		$data['dsbaiviet']=$this->Mdsbaiviet->get_dsbaiviet();
		$this->render('admin/vdsbaiviet',$data);
	}
}
?>