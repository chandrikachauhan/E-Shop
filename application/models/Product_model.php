<?php
/**
 * 
 */
class Product_model extends CI_model
{
	public function getProduct($data)
	{
		$this->db->where('product_type',$data);
		// $this->db->limit(3);
		$this->db->order_by('sno','desc');
		$res = $this->db->get('tbl_product');
		return $res->result_array();
	}
	public function getProductDetail($id)
	{
		$this->db->WHERE('sno',$id);
		$res = $this->db->get('tbl_product');
		return $res->result_array();
	}
}


?>