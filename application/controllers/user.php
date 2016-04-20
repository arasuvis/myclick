<?php 

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	function service()
	{
		$data['personal'] = $this->user_model->personal_details();
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('service',$data);
		$this->load->view('footer');
		
	}

	
	
}

?>