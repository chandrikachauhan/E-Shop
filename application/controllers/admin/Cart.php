<?php 
/**
 * 
 */
class Cart extends CI_controller
{
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('admin/addCart');
		$this->load->view('common/footer');
	}
	public function add_cart()
	{
		$cart_id = $this->input->post('ids');
		$this->load->model('admin/Cart_model');
		$single_data = $this->Cart_model->get_data($cart_id);
		echo json_encode($single_data);
		

	}
}

?>