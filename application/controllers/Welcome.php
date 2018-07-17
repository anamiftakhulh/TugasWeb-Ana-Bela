<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('model_products');
	// 	$this->load->model('model_users');
	// 	$this->load->model('model_orders');

	// }

	// public function index()
	// {
	// 	$data['products'] = $this->model_products->all();
	// 	$this->load->view('welcome_message', $data);

	// 		// if ($this->session->userdata('logged_in')) {
	// 		// 	$session_data = $this->session->userdata('logged_in');
	// 		// 	if ($session_data['level'] === 'admin') {
	// 		// 		$this->load->view('backend/admin_menu');
	// 		// 	}elseif($session_data['level'] === 'user'){
	// 		// 		$this->load->view('layout/top_menu');
	// 		// 	}
	// 		// }else{
	// 		// 	$this->load->view('partials/header');
	// 		// }
		 
	// 	    // $data['feed'] = $this->model_products->all();   	
	// 	    // $data['uwer'] = $this->model_users->getadmin();
	// 	    // $data['book'] = $this->Books_model->bookAll();
		    
	// 	    // $this->load->view('welcome_message', $data);    
	// 	}
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_products');
	}

	public function index()
	{
		$data['products'] = $this->model_products->all();
		$this->load->view('welcome_message', $data);
	}
	public function add_to_cart($product_id)
	{
		$product = $this->model_products->find($product_id);
		$data = array(
					   'id'      => $product->id,
					   'qty'     => 1,
					   'price'   => $product->price,
					   'name'    => $product->name
					);

		$this->cart->insert($data);
		redirect(base_url());
	}
	
	public function cart(){
		// displays what currently inside the cart
		//print_r($this->cart->contents());
		$this->load->view('show_cart');
	}
	
	public function clear_cart()
	{
		$this->cart->destroy();
		redirect(base_url());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */