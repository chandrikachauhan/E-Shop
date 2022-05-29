<?php 
/**
 * 
 */
class Home extends CI_controller
{
	
	public function index()
	{
		$this->load->view("common/header");
		$newproduct = $this->Product_model->getProduct(1);
		$oldproduct = $this->Product_model->getProduct(2);
		$this->load->view("home",['p_old' =>$oldproduct,'p_new'=>$newproduct]);
		$this->load->view("common/footer");
	}
}

?>