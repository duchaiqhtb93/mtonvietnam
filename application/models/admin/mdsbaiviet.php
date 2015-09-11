<?php 
class Mdsbaiviet extends CI_Model{
	function get_dsbaiviet($data=''){
		if(!empty($data)){
			$this->db->like('tieude_bantin',$data);
		}
		$this->db->get('tbl_bantin');
	}
}
?>