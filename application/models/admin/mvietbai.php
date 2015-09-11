<?php 
class Mvietbai extends CI_Model{
	function get_loaibaiviet(){
		return $this->db->get('dm_loaitin')->result_array();
	}
	function insert_baiviet($baiviet){
		$this->db->insert('tbl_baiviet',$baiviet);
		return $this->db->affected_rows();
	}
}
?>