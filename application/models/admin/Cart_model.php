<?php 

/**
 * 
 */
class Cart_model extends CI_model
{
	public function get_data($value)
	{
		$this->db->where('sno',$value);
		$data = $this->db->get('tbl_product');
		return $data->result_array();

	}
}

?>