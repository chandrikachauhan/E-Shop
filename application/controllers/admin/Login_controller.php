<?php 

/**
 * 
 */
class Login_controller extends CI_controller
{
    public function login()
    {
        if($this->session->userdata('name')==''){
        // $this->session->sess_destroy();
        $this->load->view('admin/login');
    }
    else{
           return redirect('admin/Admin_controller/index');
    }
    }
    public function Logins()
    {
        $this->load->model('admin/Login_admin');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
      if($email !='' && $password !='')
      {
        $data = $this->Login_admin->ad_login($email,$password);
        if($data){
              $sno = $data[0]['sno'];
              $name = $data[0]['name'];
            $this->session->set_userdata('name',$name);
            $this->session->set_userdata('sno',$sno);
            $times = time();
            $time = $times+(1*60);
            $this->session->set_userdata('expire',$time);
           return redirect('admin/Admin_controller/index');
        }
        else{
            $message ="Worng Email Or Possword !!";
            $this->session->set_flashdata('massage',$message);
            return redirect('admin/Login_controller/login');
        }
      }
      else{
            $massage = "Email Or Password Is Requierd";
            $this->session->set_flashdata('massage',$massage);
            return redirect('admin/Login_controller/login');
      }
    }
     public function logout()
    {
      $this->session->sess_destroy();
        return redirect('admin/Login_controller/login');
      }
}
    
?>