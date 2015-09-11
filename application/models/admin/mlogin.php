<?php 
class Mlogin extends CI_Model{
	function check_login($username,$password){
		$username=$this->db->escape_str($username);
		$password=$this->db->escape_str($password);
		$this->db->select('*');
		$this->db->where('tendangnhap',$username);
		$this->db->where('matkhau',sha1($password));
		$query=$this->db->get('tbl_dangnhap');
		return $query->result_array();
	}
	function check_quyen($quyen,$link_chucnang){
		$this->db->select('*');
		$this->db->join('tbl_chucnang_quyen','tbl_chucnang_quyen.ma_chucnang=dm_chucnang.ma_chucnang','inner');
		// $this->db->join('tbl_chucnang_quanhe','tbl_chucnang_quanhe.ma_chucnangcha=dm_chucnang.ma_chucnang','inner');
		$this->db->where('ma_quyen',$quyen);
		if($link_chucnang!='admin/login'){
			$this->db->where('link_chucnang',$link_chucnang);
		}
		$query=$this->db->get('dm_chucnang')->result_array();
		return $query;
	}
	function load_menu($quyen){
		$this->db->select('*');
		$this->db->join('tbl_chucnang_quyen','tbl_chucnang_quyen.ma_chucnang=dm_chucnang.ma_chucnang','inner');
		// $this->db->join('tbl_chucnang_quanhe','tbl_chucnang_quanhe.ma_chucnangcha=dm_chucnang.ma_chucnang','inner');
		$this->db->where('ma_quyen',$quyen);
		$query=$this->db->get('dm_chucnang')->result_array();
		return $query;
	}
}
?>