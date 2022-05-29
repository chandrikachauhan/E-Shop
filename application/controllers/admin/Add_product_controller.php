<?php
/**
 * 
 */
class Add_product_controller extends CI_controller
{
	function __construct()
{
	parent::__construct();
	$this->load->model('admin/AddProduct_model');
}
	public function view_form_product()
	{
		$this->load->model('admin/Category_model');
		$cate_data = $this->Category_model->getCategory();
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/add_product',['cate_d'=>$cate_data]);
		$this->load->view('admin/common/footer');
	}
	public function view_all_product()
	{
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$result = $this->AddProduct_model->getProduct_data();
		$this->load->view('admin/all_product',['all_data'=>$result]);
		$this->load->view('admin/common/footer');
	}
	public function addProduct()
	{
		$sno = $this->session->userdata('sno');
		$config['upload_path'] = './assets/product_image';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['encrypt_name'] = 'true';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('p_image'))
		{
			$data = array('upload_data'=>$this->upload->data());
			$image =$data['upload_data']['file_name'];
			$datas = array(
							'product_name' =>$this->input->post('p_name'),
							'product_image' =>$image,
							'product_price' =>$this->input->post('p_price'),
							'product_type' =>$this->input->post('p_type'),
							'desciption' =>$this->input->post('description'),
							'made_in' =>$this->input->post('made_in'),
							'color' =>$this->input->post('color'),
							'cate_id' =>$this->input->post('cate_id'),
							'created_by' =>$sno
							);
			$result = $this->AddProduct_model->add_data($datas);
			if($result>0){
				$msg = "Data Added successfull";
				$this->session->set_flashdata('message',$msg);
				redirect('admin/Add_product_controller/view_form_product');
			}
			
		}
		else{
			echo "error";
		}
	}
	public function del_data()
	{
		$id = $this->input->get('del_id');
		$resul = $this->AddProduct_model->delet_data($id);
		if($resul)
		{
			$msg = "Delet Data SuccessFull";
			$this->session->set_flashdata('messages',$msg);
			redirect('admin/Add_product_controller/view_all_product');
		}
	}
}

?>