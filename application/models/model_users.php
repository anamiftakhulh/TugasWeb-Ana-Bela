<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_users extends CI_Model {

/*	public function getadmin(){
			$uery = $this->db->get_where('users', array('level' => 'admin'));
			return $uery->result();
		}

	public function login($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',md5($password));
			$query = $this->db->get('users');
			if ($query->num_rows() == 1) {
				return $query->result();
			}else{
				return false;
			}

		}*/
		public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		
		$hasil = $this->db->where('username', $username)
						  ->where('password', $password)
						  ->limit(1)
						  ->get('users');
		
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

	public function register()
	 	{
	 		$data = array(
	 			'username' => $this->input->post('username'),
	 			'password' => $this->input->post('password'),
	 			'group' => $this->input->post('group')
	 		);
	 		$this->db->insert('users',$data);
	 	}

}