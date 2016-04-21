<?php 

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('family_model');
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
		$data['width'] = "13%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('service',$data);
		$this->load->view('footer');
		
	}
	function profile()
	{
		$data['personal'] = $this->user_model->personal_details();
		//print_r($data); die();
		$data['gen'] = $this->family_model->get_gender()->result();
		$data['tab'] = "profile";
		$data['width'] = "24%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('profile',$data);
		$this->load->view('footer');
	}

	/*  START Of Family Panel      */

	function family()
	{
		$data['lis'] = $this->family_model->get_paged_list()->result();
		$data['rel'] = $this->family_model->get_relation()->result();
		$data['gen'] = $this->family_model->get_gender()->result();
		$data['m_sta'] = $this->family_model->get_marital_status()->result();
		$data['st'] = $this->family_model->get_status()->result();
		$data['tab'] = "family";
		$data['width'] = "36%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('family',$data);
		$this->load->view('footer');
	}

	function addFamily()
	{
			$family = array('name' => $this->input->post('name'),
			'relationship'=>$this->input->post('relationship'),
			'age'=>$this->input->post('age'),
			'dob'=>$this->input->post('dob'),
			'gender'=>$this->input->post('gender'),
			'marital_status' => $this->input->post('marital_status'),
			'status' => $this->input->post('status'));
			
			$id = $this->family_model->save($family);
			if($id)
			{
			redirect('user/family');}
			else{
				echo "error"; die();
			}		
	}		
	
	function editFamily($id)
	{
		$data['lis'] = $this->family_model->get_paged_list()->result();
		$data['rel'] = $this->family_model->get_relation()->result();
		$data['gen'] = $this->family_model->get_gender()->result();
		$data['m_sta'] = $this->family_model->get_marital_status()->result();
		$data['st'] = $this->family_model->get_status()->result();
		// prefill form values
		$family = $this->family_model->get_by_id($id)->row();
		//print_r($family); die();		
		$data['families']= $family; 
	
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('family',$data);
		$this->load->view('footer');
	}

	function updateFamily()
	{
			$id = $this->input->post('id');
			$family = array('name' => $this->input->post('name'),
							'relationship'=>$this->input->post('relationship'),
							'dob'=>$this->input->post('dob'),
							'age'=>$this->input->post('age'),
							'gender'=>$this->input->post('gender'),
							'marital_status' => $this->input->post('marital_status'),
							'status' => $this->input->post('status'));

			$this->family_model->update($id,$family);
	}

	function delete($id)
	{
		$this->family_model->delete($id);
		redirect('user/family','refresh');
	}

	/*  END Of Family Panel      */

	function property()
	{
		//$data['rel'] = $this->user_model->personal_details();
		$data['tab'] = "property";
		$data['width'] = "50%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('property',$data);
		$this->load->view('footer');
	}

	function property_alloc()
	{
		//$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "property";
		$data['width'] = "64%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('property_alloc',$data);
		$this->load->view('footer');
	}

	function witness()
	{
		//$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "property";
		$data['width'] = "76%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('witness',$data);
		$this->load->view('footer');
	}

	function lawyer()
	{
		//$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "property";
		$data['width'] = "87%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('lawyer',$data);
		$this->load->view('footer');
	}

	function finish()
	{
		//$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "property";
		$data['width'] = "100%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('property',$data);
		$this->load->view('footer');
	}

	
	
}

?>