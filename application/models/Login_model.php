<?php
/**
 * 
 */
class Login_model extends CI_model
{
	public function userlogin($value,$password)
	{
		$this->db->Where('email',$value);
		$this->db->Where('password',$password);
		$result = $this->db->get('register');
		return $result->num_rows();
	}
}
?>