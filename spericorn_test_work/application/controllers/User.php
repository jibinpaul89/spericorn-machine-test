<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	private $userid = null;
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

		if($this->session->userdata('useremail')=='' || $this->session->userdata('userpassword')=='')
		{
			redirect(base_url().'userlogin/logout');
		}
		$useridarray = $this->User_Model->get_user_id();
		if(count($useridarray)<1)
		{
			redirect(base_url().'userlogin/logout');
		}

		$this->userid=$useridarray['id'];
	}

public function home()
{
	$data=array();
	$data['user_details']= $this->User_Model->get_user_details($this->userid);
	$this->load->view('User/home',$data);
}
public function profileimage()
{
	$data=array();
	$data['user_details']= $this->User_Model->get_user_details($this->userid);
	$this->load->view('User/profileimage',$data);
}

public function profilechange_process()
{


	if ((isset($_FILES['file']['name'])) && ($_FILES['file']['name'] != '')) {
	      $path = $_FILES['file']['name'];
	      $ext = pathinfo($path, PATHINFO_EXTENSION);

	      if ($ext != 'gif' && $ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
					echo "0@@##@@Invalid file type.";
					exit;
	      }
	      $pro_image = time().$_FILES['file']['name'];
	      $pro_image = preg_replace('/\s+/', '_', $pro_image);
	      $this->load->library('upload');
	      $config['upload_path'] = 'uploads/users/';
	      $config['allowed_types'] = 'gif|jpg|png|jpeg';
	      $config['max_size'] = '700';
				$config['file_name'] = $pro_image;

	      //$config['max_width'] = '1050';
	      //$config['max_height'] = '275';
	      $config['overwrite'] = TRUE;
	      $this->load->library('upload', $config);
	      $this->upload->initialize($config);
	      if (!$this->upload->do_upload('file')) {
	        echo "0@@##@@".$this->upload->display_errors();
	        exit;
	      }
	      else {
					$data['image']=$pro_image;
					$success = $this->User_Model->update_profileimage($this->userid,$data['image']);

					if($success>0)
					{
						echo "1@@##@@".$data['image'];exit;
					}
	      }
	    }else {
				echo "0@@##@@Please choose profile image.";
				exit;
	    }




}

public function edit()
{
	$data=array();
	$data['user_details']= $this->User_Model->get_user_details($this->userid);
	$this->load->view('User/edit',$data);
}

public function updateprofile()
{

	$data['name']=trim($_POST['name']);
	$data['email']=trim($_POST['email']);
	$data['address']=trim($_POST['address']);
	//$data['status']="hiii";

	//$file=$_POST['file'];
	$emailused=$this->User_Model->email_used($this->userid,$data['email']);

if(count($emailused)<1)
{
	if($data['name']=="" || $data['email']=='' || $data['address']=="")
	{
	echo 0;
	exit;
	}
	else {

			$success = $this->User_Model->updateprofile_process($this->userid,$data);

			if($success==1)
			{
				echo 1;exit;
			}else {
				echo "0@@##@@Some error occured. Please try again later.";exit;
			}
	}
}
else {
	echo "0@@##@@Email id is already used";exit;
}


}




public function changestatus($user_id,$status)
{
$delstatus = $this->User_Model->change_status($user_id,$status);
if($delstatus=='1')
{
echo 1;exit;
}
else {
	echo 0;exit;
}
}




}
