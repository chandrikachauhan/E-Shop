<?php

/**
 * 
 */
class User_model extends CI_model
{
	public function data_insert($value)
	{
		$result = $this->db->insert('register',$value);
		return $result;
	}
}
?>