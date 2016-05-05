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
		$this->load->model('property_model');
		$this->load->model('doctor_model');

		//if( ! $this->session->userdata('is_userlogged_in'))
			//redirect('user/signin');
	}

	function index()
	{
		if($this->session->userdata('is_userlogged_in')['user_id']){
			redirect('user/profile'); 
		} else{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer'); }
	}

	function signin()
	{
		if($this->session->userdata('is_userlogged_in')['user_id']){
			redirect('user/profile'); 
		} else{
			$data['gen'] = $this->family_model->get_gender()->result();
			$data['m_sta'] = $this->family_model->get_marital_status()->result();
		$this->load->view('header');
		$this->load->view('sign',$data);
		$this->load->view('footer'); }
	}
	
    function signin_form()
	{
	
		$email_address = $_POST['email_address'];
		$password = $_POST['password'];
		$valid_check = $this->user_model->login_valid($email_address,$password);
		$session_data = $this->session->userdata('is_userlogged_in');
		 $will_id=$this->user_model->get_will_id($valid_check);
				$session_data['user_id'] = $valid_check;
				$session_data['will_id'] = $will_id;

				$this->session->set_userdata("is_userlogged_in", $session_data);
		
		if($valid_check == true)
		{
			echo 1;
		}
		else
		{
			echo 2;
		}
	}

	function logout()
	{
		$this->session->unset_userdata('is_userlogged_in');
		redirect('user/signin');	
	}	

	function reg_details()
	{
		
		$this->form_validation->set_rules('fname','First Name','trim|required|alpha');
		$this->form_validation->set_rules('mname','Middle Name','trim|required');
		$this->form_validation->set_rules('surname','Surname','trim|required');
		$this->form_validation->set_rules('email','Email Id','trim|required|valid_email|is_unique[user_register.email]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');
		$this->form_validation->set_rules('dob','DOB','trim|required');
		$this->form_validation->set_rules('gender','Gender','trim|required');
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
			'dob' => $this->input->post('dob'),
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
		$session = $this->session->userdata('is_userlogged_in')['user_id'];
		//print_r($session);
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
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['personal'] = $this->user_model->personal_details($session);
		//print_r($data); die();
		$data['gen'] = $this->family_model->get_gender()->result();
		$data['tab'] = "profile";
		$data['width'] = "24%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('profile',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function profileUpdate()
	{
		//$gender = $this->input->post(); print_r($gender) ; die();
		//print_r($_POST); die();
		$id = $this->input->post('id');
		//echo $id; die();
		$profile = array('fname' => $this->input->post('fname'),
			'mname' => $this->input->post('mname'),
			'surname' => $this->input->post('surname'),
			'dob'=>$this->input->post('dob'),
			'gender'=>$this->input->post('gender'),
			'address' => $this->input->post('address'),
			'mobile' => $this->input->post('mobile'));

		$this->user_model->profileUpdate($id,$profile);
			redirect('user/family');
	}
	/*  START Of Family Panel      */

	function family()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
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
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function addFamily()
	{
			$id = $this->input->post('id');
			$family = array('name' => $this->input->post('name'),
			'relationship'=>$this->input->post('relationship'),
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
							'gender'=>$this->input->post('gender'),
							'marital_status' => $this->input->post('marital_status'),
							'status' => $this->input->post('status'));
							
			$this->family_model->update($id,$family);
			redirect('user/family');
	}

	function delete($id)
	{
		//$id = $this->input->post('id');
		$this->family_model->delete($id);

		redirect('user/family','refresh');
	}

	/*  END Of Family Panel      */

	/*  START of Property Panel      */

	function property()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
			//echo "<pre>";
		$data['pro'] = $this->property_model->get_immov_property()->result();
		//print_r($data); die();
		$data['own'] = $this->property_model->get_owner()->result();
		
		$data['tab'] = "property";
		$data['width'] = "50%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('property',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function addProperty()
	{
		//print_r($_POST); die();
			$prop = $this->input->post('property'); 
			if($prop == "immovable")
			{
				$im_pro = array(
				'name' => $_POST['immov_prop'],
				'nature_of_ownership' => $_POST['ownership'],
				'municipal_number' => $_POST['muncipal'],
				'year_of_purchase' => $_POST['year_of_purchase'],
				'area' => $_POST['area'],
				'address' => $_POST['address'],
				'type' => 1,
				'created_date' => date("Y-m-d H:i:s"),
				'modified_date'=> date("Y-m-d H:i:s") );

				$id = $this->property_model->save_imov($im_pro);
				if($id){
					redirect('user/property');
				} else{ 
					echo "error"; die();
				}
			}
			else{
				$im_prop = array('name' => $this->input->post('name_mov'),
				'comments' => $this->input->post('comments') ,
				'type' => 2
				 );

				$id = $this->property_model->save_imov($im_prop);
				if($id){
					redirect('user/property');
				} else{ 
					echo "error"; die();
				}
			} 
			
			
	}	

	/*  END Of Property Panel      */

	function property_alloc()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		//$data['personal'] = $this->user_model->personal_details();
			//echo "<pre>";
		$data['immov'] = $this->property_model->get_immov();
			//print_r($data); die();
		
		
		$data['fam_a'] = $this->family_model->get_fam_a()->result();
		$data['fam_d'] = $this->family_model->get_fam_d()->result();
		//
		$data['tab'] = "property";
		$data['width'] = "64%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('property_alloc',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function details()
	{
		$id = $this->input->post('id');
		$data = $this->property_model->get_det($id)->result();
		echo json_encode($data); die();
	}
	function get_property_details()
	{
	    $id = $_POST['id'];
		$data = $this->property_model->prop_det($id)->result();
		//echo "pre"; print_r($data); die();
	//	print_r($data[0]);
		 if(empty($data[0]->percent_count)) echo 100; else  echo 100 - $data[0]->percent_count; die();
	} 

	function get_details()
	{
		$id = $_POST['id'];
		$im_id = $_POST['im_id'];
		//echo $id; echo $im_id; die();
		$res = $this->property_model->check($id,$im_id);
		if($res){
			echo 1;
		}
		else{
			$data = $this->family_model->fam_det($id)->result();
		echo json_encode($data[0]); die();
		}
		
	} 

	function add_property_alloc()
	{
		$percent = $this->input->post('percent');
		$myallocation = $this->input->post('myallocation');
		$var =  $percent - $myallocation;
		if($var == 0)
		{
			$data = array( 'property_id' => $this->input->post('property_id'),
		 'fam_id' => $this->input->post('fam_id'),
		 'rel_id' => $this->input->post('rel_id'),
		 'percent' => $this->input->post('myallocation'),
		 'status' => 1
		 );
		}
		else{
			$data = array( 'property_id' => $this->input->post('property_id'),
		 'fam_id' => $this->input->post('fam_id'),
		 'rel_id' => $this->input->post('rel_id'),
		 'percent' => $this->input->post('myallocation'),
		 'status' => 0 );
		}
		//echo "<pre>"; print_r($data); 
		//die();			

			$v = $this->property_model->insert_immov($data);
			if($v)
			{
				//echo json_encode($v[0]); die();
				redirect('user/property_alloc');
			}
			else{ echo "error"; die();}
	}

	function comp_det()
	{ 
		$dat=$this->property_model->dist()->row();
		$original = $dat->na;
		$status = $this->property_model->comp_det()->row();
		$got = $status->st;
		
		if($original == $got)
		{
			echo 1;
		}
		else
		{
			echo 2;
		}
				
	}

	function edit_alloc($id){

		$pid = $this->uri->segment(4,0);
		$data['rem'] = $this->property_model->percentage($pid);
		//print_r($data); die();
		$data['allpro'] = $this->property_model->get_by_id($id);
		//print_r($data); die();
		$data['immov'] = $this->property_model->get_immov();
		$data['fam_a'] = $this->family_model->get_fam_a()->result();
		$data['grantid'] = $id;
		//print_r($data); die();
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('property_alloc',$data);
		$this->load->view('footer'); 
	}

	function update_property_alloc(){
		$id = $_POST['grantid'];
		$per = $_POST['myallocation'];
		$rem = $_POST['percent'];
		$before = $_POST['data'];
		
		$add = $before + $rem;
		
		if($per == $add)
		{
			$data = array( 
		 'percent' => $this->input->post('myallocation'),
		 'status' => 1 );
		}
		else
		{
			$data = array( 
		 'percent' => $this->input->post('myallocation'),
		 'status' => 0 );
		}
		$v = $this->property_model->update_immov($id,$data);
			if($v)
			{
				redirect('user/property_alloc');
			}
			else{ echo "error"; die();}
		
	}

	function reason_for_not_alloc()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['reason'] = $this->property_model->reason_not_alloc();
		//echo "<pre>";
		//print_r($data); die();
		$data['tab'] = "property";
		$data['width'] = "76%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('reason_for_not_alloc',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function save_reason()
	{  
		$a = $_POST;
		
		$res = $this->property_model->save_reason($a);
		if($res)
		{
			$this->previous_will();
		}
		else{
			redirect('user/reason_for_not_alloc');
		}
		
	
	}

	function previous_will()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		//$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "property";
		$data['width'] = "76%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('previous_will',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function executor()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['executor'] = $this->doctor_model->get_executor()->result();
		//print_r($data); die();
		$data['tab'] = "property";
		$data['width'] = "76%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('executor',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function save_executor()
	{
		//print_r($_POST); die();
		$a = $_POST;

		$ex = $this->doctor_model->save_executor($a);
		if($ex)
		{
			redirect('user/executor');
		}
		else{
			echo "error"; die();
		}
	}

	function edit_executor($id){
		$data['executor'] = $this->doctor_model->get_executor()->result();
		$data['exec'] = $this->doctor_model->edit_executor($id)->row();

		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('executor',$data);
		$this->load->view('footer');
		
	}


	function update_executor() {
		$id = $this->input->post('e_id');
		$a = $_POST;
		unset($a['e_id']);
		
		$ex = $this->doctor_model->update_executor($id,$a);
		if($ex)
		{
			redirect('user/executor');
		}
		else {
			echo "error"; die();
		}
				
	}

	function delete_executor($id)
	{
			$ex = $this->doctor_model->delete_executor($id);
			if($ex)
			{
				redirect('user/executor');
			}
			else {
			echo "error"; die();
		}
	}

	function doctor()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['doctor'] = $this->doctor_model->get_doctor()->result();
		$data['tab'] = "property";
		$data['width'] = "76%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('doctor',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function save_doctor()
	{
		//print_r($_POST); die();
		$a = $_POST;

		$doc = $this->doctor_model->save_doctor($a);
		if($doc)
		{
			redirect('user/doctor');
		}
		else{
			echo "error"; die();
		}
	}

	function edit_doctor($id){

		$data['doctor'] = $this->doctor_model->get_doctor()->result();
		$data['d'] = $this->doctor_model->edit_doctor($id)->row();

		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('doctor',$data);
		$this->load->view('footer');
		
	}

	function update_doctor() {

		$id = $this->input->post('d_id');
		$a = $_POST;
		unset($a['d_id']);
		
		$doc = $this->doctor_model->update_doctor($id,$a);
		if($doc)
		{
			redirect('user/doctor');
		}
		else {
			echo "error"; die();
		}
				
	}

	function delete_doctor($id)
	{
			$doc = $this->doctor_model->delete_doctor($id);
			if($doc)
			{
				redirect('user/doctor');
			}
			else {
			echo "error"; die();
		}
	}

	function witness()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['witness'] = $this->doctor_model->get_witness()->result();
		$data['tab'] = "property";
		$data['width'] = "76%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('witness',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function save_witness()
	{
		//print_r($_POST); die();
		$a = $_POST;

		$doc = $this->doctor_model->save_witness($a);
		if($doc)
		{
			redirect('user/witness');
		}
		else{
			echo "error"; die();
		}
	}

	function edit_witness($id){

		$data['witness'] = $this->doctor_model->get_witness()->result();
		$data['wit'] = $this->doctor_model->edit_witness($id)->row();

		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('witness',$data);
		$this->load->view('footer');
		
	}

	function update_witness() {
		$id = $this->input->post('w_id');
		$a = $_POST;
		unset($a['w_id']);
		
		$wit = $this->doctor_model->update_witness($id,$a);
		if($wit)
		{
			redirect('user/witness');
		}
		else {
			echo "error"; die();
		}
				
	}

	function delete_witness($id)
	{
			$wit = $this->doctor_model->delete_witness($id);
			if($wit)
			{
				redirect('user/witness');
			}
			else {
			echo "error"; die();
		}
	}


	function finish()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		//$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "property";
		$data['width'] = "76%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('finish',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');
	}
	}
		

	

	
	
}

?>