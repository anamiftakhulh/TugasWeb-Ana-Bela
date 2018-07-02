<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model 
{

	// public function check_credential()
	// {
	// 	$username = set_value('username');
	// 	$password = set_value('password');
	// 	$group = set_value('group');
		
	// 	$hasil = $this->db->where('username', $username)
	// 					  ->where('password', $password)
	// 					  ->where('group', $group)
	// 					  ->limit(1)
	// 					  ->get();
		
	// 	if($hasil->num_rows() > 0)
	// 	{
	// 		return $hasil->row();
	// 	} 
	// 	else 
	// 	{
	// 		return array();
	// 	}
	// }
	
	 	public function check_credential($username,$password)
	 	{
	 		$this->db->select('id,username,password,group');
	 		$this->db->from('users');
	 		$this->db->where('username',$username);
	 		$this->db->where('password', MD5($password));
	 		$query = $this->db->get();
	 		if($query->num_rows()==1)
	 		{
	 			return $query->result();
	 		}
	 		else
	 		{
	 			return false;
	 		}
	 		
	 	}

		function insert()
	 	{
	 		$data = array(
	 			'username' => $this->input->post('username'),
	 			'password' => md5($this->input->post('password')),
	 			'group' => $this->input->post('group')
	 		);
	 		
	 		$this->db->insert('users',$data);
	 	}
}