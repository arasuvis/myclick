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
		$data['tab'] = "service";
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('service',$data);
		$this->load->view('footer');
		
	}
	function profile()
	{
		$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "profile";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('profile',$data);
		$this->load->view('footer');
		
	}
	function family()
	{
		$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "family";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('family',$data);
		$this->load->view('footer');
		
	}

	
	
}

?>