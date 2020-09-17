<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_users_list()
	{
		 $this->db->select('`id`,`name`,`email`,`address`,`image`,`status`');
		 $this->db->from('users');
		 $query=$this->db->get();
		 //echo $this->db->last_query();exit;
		 return $query->result_array();
	}








public function change_status($user_id,$status)
{
$data = array('status'	=>  $status);
$this->db->where('id', $user_id);
$this->db->update('users', $data);
return $this->db->affected_rows();
}

public function insertregistrationdetails($data)
{
	//print_r($data);exit;
	$ins=$this->db->insert('users', $data);
	//echo $this->db->last_query();exit;
	if($ins) return $this->db->insert_id();
	else return 0;
}

public function validate_login($email,$password)
{
	 $this->db->select('`status`');
	 $this->db->from('users');
	 $this->db->where('email',$email);
	 $this->db->where('password',$password);
	 //$this->db->where('status',1);
	 $query=$this->db->get();
	 //echo $this->db->last_query();exit;
	 return $query->result_array();
}


public function get_user_id()
{
	 $this->db->select('id');
	 $this->db->from('users');
	 $this->db->where('email',$this->session->userdata('useremail'));
	 $this->db->where('password',$this->session->userdata('userpassword'));
	 //$this->db->where('status',1);
	 $query=$this->db->get();
	 //echo $this->db->last_query();exit;
	 return $query->row_array();
}

public function get_user_details($user_id)
{
	 $this->db->select('`name`,`email`,`password`,`address`,`image`,`status`');
	 $this->db->from('users');
	 $this->db->where('id',$user_id);
	 //$this->db->where('status',1);
	 $query=$this->db->get();
	 //echo $this->db->last_query();exit;
	 return $query->row_array();
}



public function update_profileimage($user_id,$image)
{
	$data = array('image'	=>  $image);
	$this->db->where('id', $user_id);
	$this->db->update('users', $data);
	return $this->db->affected_rows();
}


public function updateprofile_process($user_id,$data)
{




	try {

		$this->db->where('id', $user_id);
		$this->db->update('users', $data);
		//echo $this->db->last_query();exit;
		return 1;
		//return $this->db->affected_rows();

	} catch (Exception $e) {

		return 0;


	}






}

public function email_used($user_id,$email)
{
	$this->db->select('id');
	$this->db->from('users');
	$this->db->where('id!=',$user_id);
	$this->db->where('email',$email);
	$query=$this->db->get();
	//echo $this->db->last_query();exit;
	return $query->result_array();
}

public function email_usedregister($email)
{
	$this->db->select('id');
	$this->db->from('users');
	$this->db->where('email',$email);
	$query=$this->db->get();
	//echo $this->db->last_query();exit;
	return $query->result_array();
}




}
