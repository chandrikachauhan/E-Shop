<?php
/**
 * 
 */
class User_Login extends CI_controller
{
	public function userLogin()
	{
		$this->load->view('common/header');
		$this->load->view('account');
		$this->load->view('common/footer');
	}
	 public function login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		if ($email !='' && $password !='') {
			$res = $this->Login_model->userlogin($email,$password);
			if ($res) {
				$this->session->set_userData('umail',$email);
				return redirect('home/index');
			}
			else{
				$msg = "Wrong Email or Password !!";
				$this->session->set_flashdata('msg',$msg);
				return redirect('User_Login/userLogin');
			}
			
		}
		else{
			// $msg = "Email or Password Not Match!!";
			// 	$this->session->set_flashdata('msg',$msg);
			// 	return redirect('User_Login/userLogin');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		return redirect('User_Login/userLogin');
	}
}
?>