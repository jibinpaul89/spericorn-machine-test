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
	public function get_category_details()
	{

		 $this->db->select('cat1.cat_id,cat1.cat_name,cat1.cat_image,cat1.cat_parent,cat1.status,cat2.cat_name as par_cat_name');
		 $this->db->from('category cat1');
		 $this->db->join('category cat2', 'cat1.cat_parent=cat2.cat_id','left' );
		 $this->db->where('cat1.status',1);
		 $query=$this->db->get();
		 //echo $this->db->last_query();exit;
		 return $query->result_array();

	}

	public function insertcategorydetails($data)
	{
		//print_r($data);exit;
		$ins=$this->db->insert('category', $data);
		//echo $this->db->last_query();exit;
		if($ins) return $this->db->insert_id();
		else return 0;
	}



public function delete_category($cat_id)
{
$this->db->delete('category', array('cat_id' => $cat_id));
	return 1;
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




}
