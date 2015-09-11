<?php 
class Clogin extends CI_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/Mlogin');
	}
	function index(){
		$array=array(
			'taikhoan'=>'',
			'ma_canbo'=>'',
			'ma_quyen'=>''
		);
		$this->session->unset_userdata($array);
		$login=$this->input->post('login');
		$data=array(
			'tt'=>'',
			'tb'=>'',
			'hd'=>'hidden',
		);
		if(!empty($login)){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$user=$this->Mlogin->check_login($username,$password);
			if(!empty($user)){				
				
				$array=array(
					'taikhoan'=>$user[0]['tendangnhap'],
					'ma_canbo'=>$user[0]['ma_canbo'],
					'ma_quyen'=>$user[0]['ma_quyen']
				);
				$this->session->set_userdata($array);
				header('location:'.base_url().'admin');
			}else{
				$data['hd']='';
				$data['tt']='danger';
				$data['tb']='Đăng nhập thất bại';
			}
		}
		$data['url']=base_url();
		$temp['data']=$data;
		$temp['template']='admin/vlogin';
		$this->load->view('bluesky/layout_login',$temp);

	}
}
?>