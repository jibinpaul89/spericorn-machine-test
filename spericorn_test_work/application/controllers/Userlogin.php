<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller {
private $hashkey = null;
	public function __construct()
	{
		parent::__construct();
		global $user;
		// Your own constructor code
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('string');
		$this->load->library('upload');

		$this->load->model('User_Model');
	}


	public function check_recaptcha($recaptchastr)
	{
		  $secretKey = '6LeYG5wUAAAAAEiBQo6YF14H7tDgjvkVo8wOdAup';
		  // Verify the reCAPTCHA response
		  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$recaptchastr);
			// Decode json data
			$responseData = json_decode($verifyResponse);
			// If reCAPTCHA response is valid
			if($responseData->success){
			return TRUE;
			}else{
			$this->form_validation->set_message('check_recaptcha', 'Robot verification failed, please try again.');
			return FALSE;
			}
	}



	public function login()
	{

    $this->validate_login();
    $data['login_error']="";
    if($this->input->post('submit'))
		{

      $this->form_validation->set_rules('email', 'Email', 'trim|required',array('required' => 'Please provide %s.'));
			$this->form_validation->set_rules('password', 'Password', 'trim|required',array('required' => 'Please provide a valid %s.'));
			$this->form_validation->set_rules('g-recaptcha-response', 'g-recaptcha-response', 'trim|required|callback_check_recaptcha',array('required' => 'Please check on the reCAPTCHA box.'));

      if ($this->form_validation->run() == TRUE)
      			{

              $email=$this->input->post('email');
              $password=$this->input->post('password');
							$validate_login = $this->User_Model->validate_login($email,md5($password));

							if(count($validate_login)==1)
              {
										if($validate_login[0]['status']==1){
											$this->session->unset_userdata('useremail');
											$this->session->set_userdata('userpassword');

											$this->session->set_userdata('useremail',$email);
											$this->session->set_userdata('userpassword',md5($password));

											redirect(base_url().'user/home');
			              }
										elseif ($validate_login[0]['status']==0) {
											$data['login_error']='You are in pending state.You can login after the approval of admin.';
										}
										elseif ($validate_login[0]['status']==2) {
											$data['login_error']='You are blocked by admin.Please contant admin.';
										}
							}
							else{
                $data['login_error']='Invalid Email/Password. Records not found....';
              }

            }
            else
            {
              $data['login_error']='Please check all the mandatory fields';
            }

    }
		$this->load->view('User/login',$data);
	}

public function validate_login()
{
$email=$this->session->userdata('useremail');
$password=$this->session->userdata('userpassword');
if($email!="" && $password!="")
{

$validate_status = $this->User_Model->validate_login($email,md5($password));

if(count($validate_status)<1)
{
	$this->session->unset_userdata('useremail');
	$this->session->unset_userdata('userpassword');
	redirect(base_url().'userlogin/login');
}
else {
  redirect(base_url().'user/manage');
}

}
else {

}
}

public function logout()
{
	$this->session->unset_userdata('useremail');
	$this->session->unset_userdata('userpassword');
	redirect(base_url().'userlogin/login');
}

}
