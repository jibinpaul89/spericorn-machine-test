<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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

		$this->load->model('Admin_Model');
	}

public function manage()
{
	$data=array();
	$data['userslist'] = $this->Admin_Model->get_users_list();
	$this->load->view('Admin/manage',$data);
}

public function add_category_process()
{

$data['cat_name']=$_POST['category'];

$data['cat_parent']=$_POST['par_cat'];
$data['status']=1;
//$file=$_POST['file'];

if($data['cat_name']=="" || $data['cat_parent']=='' || !(isset($_FILES['file']['name'])) && ($_FILES['file']['name'] != ''))
{
echo "0@@##@@Please fill all the manadatory fields.";
exit;
}

if ((isset($_FILES['file']['name'])) && ($_FILES['file']['name'] != '')) {
      $path = $_FILES['file']['name'];
      $ext = pathinfo($path, PATHINFO_EXTENSION);

      if ($ext != 'gif' && $ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
				echo "0@@##@@Invalid file type.";
				exit;
      }
      $catfilename = time().$_FILES['file']['name'];
      $catfilename = preg_replace('/\s+/', '_', $catfilename);
      $this->load->library('upload');
      $config['upload_path'] = './uploads/category/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size'] = '700';
			$config['file_name'] = $catfilename;

      //$config['max_width'] = '1050';
      //$config['max_height'] = '275';
      $config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('file')) {
        echo $this->upload->display_errors();
        exit;
      }
      else {

				$data['cat_image']=$catfilename;
				$success = $this->Category_Model->insertcategorydetails($data);


				if($success>0)
				{

	$catlist_details = $this->Category_Model->get_category_details();
$str='';


for($j=0;$j<count($catlist_details);$j++)
{
$str.='<tr><td>'.($j+1).'</td>';
$str.='<td>'.$catlist_details[$j]['cat_name'].'</td>';
$str.='<td><img height="100px" width="100px" src="'.base_url().'uploads/category/'.$catlist_details[$j]['cat_image'].'">'.'</td>';
$str.='<td>'.$catlist_details[$j]['par_cat_name'].'</td>';
if($catlist_details[$j]['status']==1){
$str.='<td>Active</td>';
}
else
{
$str.='<td>Inactive</td>';
}
$str.='<td><a href="'.base_url().'category/delete/'.$catlist_details[$j]['cat_id'].'">Delete</a></td>';
$str.='</tr>';
}


echo "1@@##@@".$str;exit;


				}




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
