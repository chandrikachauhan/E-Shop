<?php
	/**
	 * 
	 */
	class User_Register extends CI_controller
	{
		
		
		public function register()
		{
			$this->load->view('common/header');
			$this->load->view('register');
			$this->load->view('common/footer');
		}
		public function insert_data()
		{
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$email = $this->input->post('email');
			$pass = $this->input->post('pass1');
			$mobile = $this->input->post('mobile');

			$this->form_validation->set_rules('fname','First Name','required');
			$this->form_validation->set_rules('lname','Last Name','required');
			$this->form_validation->set_rules('email','email','required');
			$this->form_validation->set_rules('pass1','password','required|min_length[8]');
			$this->form_validation->set_rules('mobile','mobile number','required|exact_length[10]');
			if($this->form_validation->run() == TRUE)
			{
				$user_data = array(
					'first_name' => $fname, 
					'last_name' => $lname, 
					'email' => $email, 
					'password' => md5($pass), 
					'mobile' => $mobile,
					// 'ip' => $this->input->ip_address 
				);
				$sql = $this->User_model->data_insert($user_data);
				if($sql)
				{
					echo "<script>alert('Data Insert Successfull');window.location.href='register'</script>";
				}
			}
			else{
				$this->load->view('common/header');
				$this->load->view('register');
				$this->load->view('common/footer');
			}
		}
	}
?>