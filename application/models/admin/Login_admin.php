<?php 

/**
 * 
 */
class Login_admin extends CI_model
{
	function ad_login($email,$password)
	{
		$this->db->Where('email',$email);
		$this->db->Where('password',$password);
		$res = $this->db->get('admin');
		return $res->result_array();
	}
}
?>