<?php 
class Cvietbai extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/Mvietbai');
		date_default_timezone_set('Asia/Ho_Chi_Minh');
	}
	function index(){
		$data['thongbao']=$this->thongbao(null,null);
		$khoiphuc=array(
			'ma_bv'=>'',
			'tieude_bv'=>'',
			'tomtat_bv'=>'',
			'noidung_bv'=>'',
			'maloai_bv'=>''
		);
		if($this->input->post('thembaiviet')){
			$success=$this->insert_baiviet();
			if($success==true){
				$data['thongbao']=$this->thongbao('1','Thêm mới thành công');
			}else{
				$data['thongbao']=$this->thongbao('0','Thêm mới thành công');
			}
		}
		if($this->input->post('luubaiviet')) $this->update_baiviet();
		$data['dsloaitin']=$this->Mvietbai->get_loaibaiviet();
		$data['khoiphuc']=$khoiphuc;
		$data['title']='Đăng bài';
		$this->render('admin/vvietbai',$data);
	}
	function insert_baiviet(){
		$baiviet=array(
			'tieude_bv'=>$this->input->post('tieude_bv'),
			'tomtat_bv'=>$this->input->post('tomtat_bv'),
			'noidung_bv'=>$this->input->post('noidung_bv'),
			'thoigian_bv'=>date('H:i:s d/m/Y',time()),
			'ma_cb'=>$this->session->userdata('ma_cb'),
			'maloai_bv'=>$this->input->post('maloai_bv'),
		);
		$success=$this->Mvietbai->insert_baiviet($baiviet);
		if($success>0){
			return true;
		}else{
			return $baiviet;
		}
	}
	function update_baiviet(){
	}
}
?>