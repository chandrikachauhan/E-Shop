<?php
/**
 * 
 */
class Admin_controller extends CI_controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('admin/Category_model');
	}
	public function index()
	{ 
		 if(time()>$this->session->userdata('expire'))
        {
     	$this->session->sess_destroy();
        return redirect('admin/Login_controller/login');
        }
		if($this->session->userdata('name') !=''){
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/home');
		$this->load->view('admin/common/footer');
		}
		else{
			return redirect('admin/Login_controller/login');
		}
	}
	public function static_layout()
	{
		$ids = $this->input->get('edit_id');
		// echo $ids;
		// die();
		$data_edit = $this->Category_model->edit_category($ids);
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/create-category',['edit_data'=>$data_edit]);
		$this->load->view('admin/common/footer');
	}
	public function layout_light()
	{
		$cate_data = $this->Category_model->all_cate();
		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
		$this->load->view('admin/all_category',['cate_data_show' =>$cate_data]);
		$this->load->view('admin/common/footer');
	}
	public function add_category()
	{
		$update =$this->input->post('update');
		if(isset($update))
		{
			$cate = $this->input->post('cate');
			$desc = $this->input->post('desc');
			$sno = $this->input->post('sno');
			if($cate!=='' && $desc!=='')
			{
				$data = array('category_name' => $cate,'description' =>$desc );
				$res = $this->Category_model->updated_cate($sno,$data);
				if($res){
					echo "<script>alert('Data Update Successfull');window.location.href='layout_light'</script>";
				}

			}
		}
		$submit =$this->input->post('submit');
		if(isset($submit))
		{
			$cate = $this->input->post('cate');
			$desc = $this->input->post('desc');
			if($cate!=='' && $desc!=='')
			{
				$data = array('category_name' => $cate,'description' =>$desc );
				$res = $this->Category_model->insert_cate($data);
				if($res){
					echo "<script>alert('Data Save Successfull');window.location.href='static_layout'</script>";
				}

			}
		}
	}
	public function delete_cate()
	{
		$id = $this->input->get('delete_id');
		$data_del = $this->Category_model->delete_category($id);
		if($data_del)
		{
			echo "<script>alert('Data Delete Successfull');window.location.href='layout_light'</script>";
		}
	}
}

?>