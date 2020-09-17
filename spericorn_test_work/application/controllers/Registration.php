<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
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

		if($this->session->userdata('useremail')!='' && $this->session->userdata('userpassword')!='')
		{
			redirect(base_url().'user/home');
		}



	}

public function register()
{
	$data=array();
	//$data['userslist'] = $this->Admin_Model->get_users_list();
	$this->load->view('User/register',$data);
}

public function registration_process()
{

$data['name']=trim($_POST['name']);
$data['email']=trim($_POST['email']);
$data['password']=md5(trim($_POST['password']));
$con_password=md5(trim($_POST['con_password']));
$data['address']=trim($_POST['address']);
$data['status']=0;
//$file=$_POST['file'];

				if($data['name']=="" || $data['email']=='' || $data['password']=='' || $data['address']=="")
				{
				echo "0@@##@@Please fill all the mandatory fields";exit;
				exit;
				}elseif ($data['password']!=$con_password) {
				echo "0@@##@@Password and confirm password should be same";exit;
					exit;
				}
				else {
				$emailused=$this->User_Model->email_usedregister($data['email']);
				if(count($emailused)<1)
				{
					$success = $this->User_Model->insertregistrationdetails($data);
					if($success>0)
					{
						echo 1;exit;
					}else {
						echo "0@@##@@Some error occured. Please try again later.";exit;
					}
				}
				else {
					echo "0@@##@@Email id is already used";exit;
				}
				}
      }



public function changestatus($user_id,$status)
{
$delstatus = $this->Admin_Model->change_status($user_id,$status);
if($delstatus=='1')
{
echo 1;exit;
}
else {
	echo 0;exit;
}
}




}
