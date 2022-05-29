<?php
	/**
	 * 
	 */
	class Product_details extends CI_controller
	{
		
		public function getDetails()
		{
			$ids = $this->input->get('p_id');
			$productDetail = $this->Product_model->getProductDetail($ids);
			$productDetailList = $this->Product_model->getProduct(2);
			$this->load->view('common/header');
			$this->load->view('productDetails',['p_details' => $productDetail,'p_d_list' => $productDetailList]);
			$this->load->view('common/footer');

		}
	}


 ?>