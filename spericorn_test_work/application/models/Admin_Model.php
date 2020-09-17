<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_users_list()
	{
		 $this->db->select('`id`,`name`,`email`,`address`,`image`,`status`');
		 $this->db->from('users');
		 $this->db->order_by("id", "desc");
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

public function validate_login($email,$password)
{
	 $this->db->select('`status`');
	 $this->db->from('admin');
	 $this->db->where('email',$email);
	 $this->db->where('password',$password);
	 //$this->db->where('status',1);
	 $query=$this->db->get();
	 return $query->result_array();
}

public function check_login($email,$password)
{
	 $this->db->select('id');
	 $this->db->from('admin');
	 $this->db->where('email',$email);
	 $this->db->where('password',$password);
	 $this->db->where('status',1);
	 $query=$this->db->get();
	 //echo $this->db->last_query();exit;
	 return $query->num_rows();
}


}
