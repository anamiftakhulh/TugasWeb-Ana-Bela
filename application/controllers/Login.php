<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
		{
			$this->form_validation->set_rules('username','Username','required|alpha_numeric');
			$this->form_validation->set_rules('password','Password','required|alpha_numeric');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('form_login');
			} else {
				$this->load->model('model_users');
				$valid_user = $this->model_users->check_credential();
				
				if($valid_user == FALSE)
				{
					$this->session->set_flashdata('error','Wrong Username / Password!');
					redirect('login');
				} else {
					// if the username and password is a match
					$this->session->set_userdata('username', $valid_user->username);
					$this->session->set_userdata('group', $valid_user->group);
					
					switch($valid_user->group){
						case 1 : //admin
									redirect('admin/products'); 
									break;
						case 2 : //member
									redirect(base_url());
									break;
						default: break; 
					}
				}
			}
		}
	// 	$this->form_validation->set_rules('username','Username','required|alpha_numeric');
	// 	$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		
	// 	// if($this->form_validation->run() == FALSE)
	// 	// {
	// 	// 	$this->load->view('form_login');
	// 	// } 
	// 	// else 
	// 	// {
	// 	// 	$this->load->model('model_users');
	// 	// 	$username = $this->input->post('username');
	// 	// 	$password = $this->input->post('password');
	// 	// 	$level = $this->input->post('level');
	// 	// 	$valid_user = $this->model_users->login($username,$password,$level);
			
	// 	// 	if($valid_user == FALSE)
	// 	// 	{
	// 	// 		$this->session->set_flashdata('error','Wrong Username / Password!');
	// 	// 		redirect('login');
	// 	// 	} 
	// 	// 	else 
	// 	// 	{
	// 	// 		// if the username and password is a match
	// 	// 		$this->session->set_userdata('username', $valid_user->username);
	// 	// 		$this->session->set_userdata('level', $valid_user->level);
				
	// 	// 		switch($valid_user->level)
	// 	// 		{
	// 	// 			case 1 : //admin
	// 	// 						redirect('admin/products'); 
	// 	// 						break;
	// 	// 			case 2 : //member
	// 	// 						redirect(base_url());
	// 	// 						break;
	// 	// 			default: break; 
	// 	// 		}
	// 	// 	}
	// 	// }
	// 	if($this->form_validation->run() == FALSE)
	// 	{
	// 		$this->load->view('form_login');
	// 	} else {
	// 		$this->load->model('model_users');
	// 		$valid_user = $this->model_users->login($username,$password);
			
	// 		if($valid_user == FALSE)
	// 		{
	// 			$this->session->set_flashdata('error','Wrong Username / Password!');
	// 			redirect('login');
	// 		} else {
	// 			// if the username and password is a match
	// 			$this->session->set_userdata('username', $valid_user->username);
	// 			$this->session->set_userdata('level', $valid_user->level);
				
	// 			switch($valid_user->level){
	// 				case 1 : //admin
	// 							redirect('admin/products'); 
	// 							break;
	// 				case 2 : //member
	// 							redirect(base_url());
	// 							break;
	// 				default: break; 
	// 			}
	// 		}
	// 	}
	// }

// public function login(){
// 		$this->form_validation->set_rules('username', 'username', 'trim|required');
// 		$this->form_validation->set_rules('password', 'password', 'trim|required|callback_cekDb');

// 		if ($this->form_validation->run() == FALSE) {
// 			$this->load->view('form_login');
// 		}else{	
// 			if ($this->session->userdata('logged_in')) {
// 				$session_data = $this->session->userdata('logged_in');
// 					if ($session_data['level'] == 'user') {
// 						redirect('welcome_message','refresh');
// 					}elseif($session_data['level'] == 'admin'){
// 						redirect('backend/admin_menu','refresh');
// 					}//Penutub Else IF
// 			}//Penutub if Pertama
// 		}

// 	}
		

	public function register()
 	{
 		$this->load->library('form_validation');

 		$this->form_validation->set_rules('username','Username','trim|required');
 		$this->form_validation->set_rules('password','Password','trim|required');
 		if ($this->form_validation->run() == FALSE) {
 			$this->load->view('form_regist');
 		} else {
 			$this->load->model('model_users');
 			$this->model_users->register();
 			// $this->model_users->insert();
 			redirect('login','refresh');
 		}
 	}

 	public function cekDb($password){
		$user = $this->input->post('username');
		$result = $this->model_users->login($user,$password);

		if ($result) {
			foreach ($result as $row) {
				$sess = array(
					'id' => $row->id,
					'username' => $row->username,
					'group' => $row->group
				 );
				$this->session->set_userdata('logged_in',$sess);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb','Login Gagal');
			return false;
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}