<?php 

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');		
		$this->load->library('session');
		$this->load->library('email');
		$this->load->model('user_model');
		$this->load->model('family_model');
	}

	function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	function signin()
	{
		$this->load->view('header');
		$this->load->view('sign');
		$this->load->view('footer');
	}
	
	function reg_details()
	{
		$this->form_validation->set_rules('fname','First Name','trim|required|alpha');
		$this->form_validation->set_rules('mname','Middle Name','trim|required');
		$this->form_validation->set_rules('surname','Surname','trim|required');
		$this->form_validation->set_rules('email','Email Id','trim|required|valid_email|is_unique[user_register.email]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');
		$this->form_validation->set_rules('age','Age','trim|required|integer');
		$this->form_validation->set_rules('gender','Gender','trim|required|alpha');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('mobile','Mobile Number','trim|required|exact_length[10]|integer');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run() == False)
		{
		//echo "error"; 
			$this->load->view('header');
		$this->load->view('sign');
		$this->load->view('footer');
		}
		else
		{

		$data = array(
			'fname' => $this->input->post('fname'),
			'mname' => $this->input->post('mname'),
			'surname' => $this->input->post('surname'),
			'email' => $this->input->post('email'),
			'password' =>md5($this->input->post('password')),
			'age' => $this->input->post('age'),
			'gender' => $this->input->post('gender'),
			'address' => $this->input->post('address'),
			'mobile' => $this->input->post('mobile')
						);
		
		 $id = $this->user_model->save_reg($data);
		 $session_data = $this->session->userdata('is_userlogged_in');
		 $will_id=$this->user_model->get_will_id($id);
				$session_data['user_id'] = $id;
				$session_data['will_id'] = $will_id;

				$this->session->set_userdata("is_userlogged_in", $session_data);
		
		if($id)
		{
			if($this->user_model->reg_will_id($id))
			{
				redirect('user/profile');
			 }
			else
			{
		$this->load->view('header');
		$this->load->view('sign');
		$this->load->view('footer');
			}
		}
		else
		{
			$this->load->view('header');
		$this->load->view('sign');
		$this->load->view('footer');
		}
	}
	}

	
	function yServices()
	{
		$this->load->view('header');
		$this->load->view('yServices');
		$this->load->view('footer');
	}

	function service()
	{
		$session = $this->session->userdata('is_userlogged_in');
		$data['personal'] = $this->user_model->personal_details($session);
		$data['tab'] = "service";
		$data['width'] = "13%";
		$this->load->view('navbar',$data);
		$this->load->view('header');
		$this->load->view('service',$data);
		$this->load->view('footer');
		
	}
	function profile()
	{
		$session = $this->session->userdata('is_userlogged_in');
		$data['personal'] = $this->user_model->personal_details($session);
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
		$id = $this->uri->segment(3,0);
		$data['lis'] = $this->family_model->get_paged_list()->result();
		$data['rel'] = $this->family_model->get_relation()->result();
		$data['gen'] = $this->family_model->get_gender()->result();
		$data['m_sta'] = $this->family_model->get_marital_status()->result();
		$data['st'] = $this->family_model->get_status()->result();
		$data['tab'] = "family";
		$data['width'] = "36%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		if(isset($id)){
			$family = $this->family_model->get_by_id($id)->row();
			$data['families']= $family;
			$this->load->view('family',$data);
		}else{
		$this->load->view('family',$data);}
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

	function delete()
	{
		$id = $this->input->post('id');
		$this->family_model->delete($id);

		//redirect('user/family','refresh');
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