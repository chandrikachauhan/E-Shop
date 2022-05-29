<?php
/**
 * 
 */
class AddProduct_model extends CI_model
{
	public function add_data($value)
	{
		$res = $this->db->insert('tbl_product',$value);
		return $res;
	}
	public function getProduct_data()
	{	
		$this->db->order_by('sno','desc');
		$result = $this->db->get('tbl_product');
		return $result->result_array();
	}
	public function delet_data($val)
	{
		$this->db->where('sno',$val);
		$res = $this->db->delete('tbl_product');
		return $res;

	}
}

?>