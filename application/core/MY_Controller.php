<?php
	class MY_Controller extends CI_Controller{
		protected $menu;
		function __construct(){
			parent::__construct();
			$ses=$this->session->userdata('taikhoan');
			
			if($ses=="")
			{
			 	header("location:".base_url().'admin/login');
			}else{
				if(empty($this->check_link())){
					header("location:".base_url().'admin/login');
				}
			}
		}
		function check_link(){
			$this->load->model('admin/Mlogin');
			echo $_SERVER['REQUEST_URI'];exit();
			$link=substr($_SERVER['SERVER_NAME'],strlen(base_url()));
			echo $link;exit();
			$quyen=$this->session->userdata('ma_quyen');
			return $this->Mlogin->check_quyen($quyen,$link);
		
		}
		function load_menu(){
			$this->load->model('admin/Mlogin');
			$quyen=$this->session->userdata('ma_quyen');
			$menu=$this->Mlogin->load_menu($quyen);
			return $menu;
		}
		function render($template,$data){
			$data['dsmenu']=$this->load_menu();
			$viewdata=array(
				'data'=>$data,
				'template'=>$template
			);
			$this->load->view('bluesky/layout',$viewdata);
		}
		function thongbao($success,$thongbao){
			$data=array(
				'hd'=>'hidden=""',
				'tb'=>'',
				'tt'=>'',
				'btn'=>'themmoi'
			);
			if(!empty($success)){
				if($success==1){					
					$data=array(
						'hd'=>'',
						'tb'=>$thongbao,
						'tt'=>'alert-success',
						'btn'=>'themmoi'
					);
				}else{	
					$data=array(
						'hd'=>'',
						'tb'=>$thongbao,
						'tt'=>'alert-danger',
						'btn'=>'themmoi'
					);
				}
			}
			return $data;
		}
	}
?>