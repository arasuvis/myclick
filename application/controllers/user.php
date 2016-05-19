
<?php 

class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');		
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('base');
		$this->load->model('user_model');
		$this->load->model('family_model');
		$this->load->model('property_model');
		$this->load->model('doctor_model');
		 $this->will_id = $this->session->userdata('is_userlogged_in')['will_id'];
	   

		//if( ! $this->session->userdata('is_userlogged_in'))
			//redirect('user/signin');
	}

	function index()
	{
		if(isset($this->session->userdata('is_userlogged_in')['user_id'])){
			redirect('user/profile'); 
		} else{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer'); }
	}

	function signin()
	{
		
		$data['gen'] = $this->family_model->get_gender()->result();
			$data['m_sta'] = $this->family_model->get_marital_status()->result();
		if(isset($this->session->userdata('is_userlogged_in')['user_id'])){
			redirect('user/profile'); 
		} else{			
		$this->load->view('header');
		$this->load->view('sign',$data);
		$this->load->view('footer'); }
	}
	
    function signin_form()
	{
	
		$email_address = $_POST['email_address'];
		$password = $_POST['password'];
		$valid_check = $this->user_model->login_valid($email_address,$password);
		
		
		if($valid_check == true)
		{
			$session_data = $this->session->userdata('is_userlogged_in');
				$will_id=$this->user_model->get_will_id($valid_check);
				$session_data['user_id'] = $valid_check;
				$session_data['will_id'] = $will_id;
				$this->session->set_userdata("is_userlogged_in", $session_data);
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
		
		$data['gen'] = $this->family_model->get_gender()->result();
		$data['m_sta'] = $this->family_model->get_marital_status()->result();
		$this->form_validation->set_rules('fname','First Name','trim|required|alpha');
		//$this->form_validation->set_rules('mname','Middle Name','trim|required');
		$this->form_validation->set_rules('surname','Surname','trim|required');
		$this->form_validation->set_rules('email','Email Id','trim|required|valid_email|is_unique[user_register.email]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');
		$this->form_validation->set_rules('dob','DOB','trim|required');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		//$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('mobile','Mobile Number','trim|required|exact_length[10]|integer');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run() == False)
		{
		//echo "error"; 
			$this->load->view('header',$data);
		$this->load->view('sign',$data);
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
				
		$this->load->view('header',$data);
		$this->load->view('sign',$data);
		$this->load->view('footer');
			}
		}
		else
		{
			$this->load->view('header',$data);
		$this->load->view('sign',$data);
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

	/*  START of Profile Panel      */

	function profile()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['personal'] = $this->user_model->personal_details($session);
		//print_r($data); die();
		$data['gen'] = $this->family_model->get_gender()->result();
		$data['m_sta'] = $this->family_model->get_marital_status()->result();
		$data['tab'] = "profile";
		$data['width'] = "10%";
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

	/*  END of Profile Panel      */

	/*  START Of Family Panel      */

	function family()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$id = $this->uri->segment(3,0);
		//echo "<pre>";
		$data['lis'] = $this->family_model->get_paged_list()->result();
		//print_r($data); die();
		$data['rel'] = $this->family_model->get_relation()->result();
		$data['gen'] = $this->family_model->get_gender()->result();
		$data['m_sta'] = $this->family_model->get_marital_status()->result();
		$data['st'] = $this->family_model->get_status()->result();
		$data['tab'] = "family";
		$data['width'] = "21%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		if(isset($id)){
			$family = $this->family_model->get_by_id($id)->row();
			$data['families']= $family;
			//print_r($data); die();
			$this->load->view('family',$data);
		}else{
		$this->load->view('family',$data);}
		$this->load->view('footer'); }
		else { redirect('user/signin');}

	}

	function addFamily()
	{

		$id = $this->input->post('id');
		//print_r($this->input->post('comments'));
		if($this->input->post('comments') == ' ' || $this->input->post('comments') == null)
			{ 
				
			$family = array('name' => $this->input->post('name'),
			'relationship'=>$this->input->post('relationship'),
			'dob'=>$this->input->post('dob'),
			'gender'=>$this->input->post('gender'),
			'marital_status' => $this->input->post('marital_status'),
			'status' => $this->input->post('status'));
			 }
		else{
			
			$family = array('name' => $this->input->post('name'),
			'relationship'=>$this->input->post('relationship'),
			'comments' => $this->input->post('comments'),
			'status' => 'Alive');
		}
			$id = $this->family_model->save($family);
			$data['family'] = $this->family_model->get_by_id($id)->row();
			if($data)
			{
				echo json_encode($data);
			}
			else {
				echo 2 ; die();
			}			
	}

	function edit_family()
	 {
	 	$id = $this->input->post('id');
	 	//$fam = $this->input->post('fam');
	 	$data['family'] = $this->family_model->get_by_id($id)->row();
	 	$data['families'] = $this->family_model->get_family_mem($id);
		echo json_encode($data); die();	
	 }

	 function parents_check()
	 {
	 	$will_id = $this->will_id;
        $d1 = $this->family_model->check_family($will_id); 

        $d2 = json_encode($d1);

        $d3= json_decode($d2,TRUE);

       if($this->check_array('Father', $d3, 'name') && $this->check_array('Mother', $d3, 'name')) 
        {
        	echo "1";
        }else
        {
        	echo "0";
        }
 
	 }	

	  function check_array($text,$myarray,$key){
        $i = 0;
        foreach($myarray as $k=>$val){
            if(trim($val[$key]) == trim($text)){
              $i =1;
            }
        }
        if($i == 1){
            return true;
        }else{
        return false;
        }
        }		
	
	function updateFamily()
	{
			$id = $this->input->post('id');
			if($this->input->post('comments') == ' ' || $this->input->post('comments') == null  )
			{
				$family = array('name' => $this->input->post('name'),
							'relationship'=>$this->input->post('relationship'),
							'dob'=>$this->input->post('dob'),
							'gender'=>$this->input->post('gender'),
							'marital_status' => $this->input->post('marital_status'),
							'status' => $this->input->post('status')); }
			else { $family = array('name' => $this->input->post('name'),
			'relationship'=>$this->input->post('relationship'),
			'comments' => $this->input->post('comments'));
			}
							
			$data['f'] = $this->family_model->update($id,$family);

			$data['family'] = $this->family_model->get_by_id($id)->row();
			if($data)
			{

				echo json_encode($data);
			}
			else {
				echo 2 ; die();
			}
	}

	function delete()
	{
		$id = $this->input->post('id');
            $pro = $this->family_model->delete($id);
            if($pro)
            {
                $data['id'] = $this->input->post('id');
                echo json_encode($data);
            }
            else {
            echo 2; die();
        }
	}

	/*  END Of Family Panel      */

	/*  START of Property Panel      */

	function property()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
			//echo "<pre>";
		$data['lis'] = $this->property_model->get_prop_list()->result();
		//print_r($data); die();
		$data['pro'] = $this->property_model->get_immov_property()->result();
		//print_r($data); die();
		$data['own'] = $this->property_model->get_owner()->result();		
		insert_activity($this->will_id,1,2);
		$data['tab'] = "property";
		$data['width'] = "34%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('property',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function check_prop_details()
	{		
		$id = $this->input->post('id');
		$data = $this->property_model->get_prop_det($id)->result();
		if($data)
		{
			echo 1; 
		}
		else {
			echo 2; 
		}

	}

	function addProperty()
	{
		//print_r($_POST); die();
		parse_str($_POST['prop_data'], $searcharray);
			 
			if($searcharray['property'] == "immovable")
			{
				$im_pro = array(
				'name' => $searcharray['immov_prop'],
				'nature_of_ownership' => $searcharray['ownership'],
				'municipal_number' => $searcharray['muncipal'],
				'year_of_purchase' => $searcharray['year_of_purchase'],
				'area' => $searcharray['area'],
				'address' => $searcharray['address'],
				'type' => 1,
				'created_date' => date("Y-m-d H:i:s"),
				'modified_date'=> date("Y-m-d H:i:s") );

				$id = $this->property_model->save_imov($im_pro);
				if($id > 0){
					 $data['lis'] = $this->property_model->get_prop($id)->result();
					 echo json_encode($data); die();
				} else{ 
					echo 1; die();
				}
			}
			else if($searcharray['property'] == "movable"){
				$im_prop = array('name' => $searcharray['name_mov'],
				'comments' => $searcharray['comments'] ,
				'type' => 2
				 );

				$id = $this->property_model->save_imov($im_prop);
				if($id > 0){
					$data['lis'] = $this->property_model->get_prop($id)->result();
					 echo json_encode($data); die();
				} else{ 
					echo 1; die();
				}
			}	
	}

	function edit_property(){

		$id = $this->input->post('id');
		$data['pro'] = $this->property_model->edit_property($id)->row();
		if($data){
			echo json_encode($data);
		}
		else{
			echo 2; die();
		}
		
	}


	function update_property() {
	
		//print_r($_POST); die();
		$id = $this->input->post('id');
		parse_str($_POST['details'], $searcharray); 
			if($searcharray['property'] == "immovable")
			{
				$a = array(
				'nature_of_ownership' => $searcharray['ownership'],
				'municipal_number' => $searcharray['muncipal'],
				'year_of_purchase' => $searcharray['year_of_purchase'],
				'area' => $searcharray['area'],
				'address' => $searcharray['address'],
				'type' => 1,
				'created_date' => date("Y-m-d H:i:s"),
				'modified_date'=> date("Y-m-d H:i:s") );
			}
			else if($searcharray['property'] == "movable"){
				$a = array(
				'comments' => $searcharray['comments'],
				'type'=> 2 );
			}
		
		$pro = $this->property_model->update_property($id,$a);
		if($pro)
		{
			$data['pro']=$this->property_model->name_property($id);
			echo json_encode($data);
		}
		else {
			echo 2; die();
		}
				
	}

	function delete_property()
	{
			$id = $this->input->post('id');
			$pro = $this->property_model->delete_prop($id);
			if($pro)
			{
				$data['id'] = $this->input->post('id');
				echo json_encode($data);
			}
			else {
			echo 2; die();
		}
	}
	

	/*  END Of Property Panel      */

	/*  START of Property Allocation Panel      */

	function property_alloc()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		//$data['personal'] = $this->user_model->personal_details();
			
		$data['immov'] = $this->property_model->get_immov();		
		
		$data['fam_a'] = $this->family_model->get_fam_a()->result();
		$data['dead'] = $this->property_model->get_dead()->result();
		//echo "<pre>"; print_r($data); die();
		insert_activity($this->will_id,1,3);
		//
		$data['tab'] = "property_alloc";
		$data['width'] = "48%";
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
		
		 if(empty($data[0]->percent_count)) echo 100; else  echo 100 - $data[0]->percent_count; die();
	} 
	
	function get_property_list()
	{
	    $id = $_POST['id'];
		$data = $this->property_model->prop_list($id)->result();
		if($data){
			echo json_encode($data);
		}
		else{
			echo 2; die();
		}

			} 

	function get_details()
	{
		//print_r($_POST); die();
		$id = $_POST['id'];
		$im_id = $_POST['im_id'];

		$r = $this->family_model->check_comments($id)->row();
		//print_r($res->comments); die();
		if(empty($r->comments))
		{
			$res = $this->property_model->check($id,$im_id);
		
		   if($res){
			echo 1;
		    }
			else{
			$data = $this->family_model->fam_det($id)->result();
			echo json_encode($data[0]); die();
			}
		}
		else{
			$res = $this->property_model->check($id,$im_id);
		
		   if($res){
			echo 1;
		    }
			else{
			$data = $this->family_model->fam_det($id)->result();
			echo json_encode($data[0]); die();
			}
		}
		
		
	} 

	function dead_per()
	{
		$data = $this->property_model->dead_per()->result();
		//echo "pre"; print_r($data); die();
	//	print_r($data[0]);
		 if(empty($data[0]->percent_count)) echo 100; else  echo 100 - $data[0]->percent_count; die();
	} 

	
	function save_dead()
	{
		$a = $_POST;
		$id = $this->property_model->save_dead($a);
		$data['per'] = $this->property_model->dead_per()->result();
			$data['fam_details'] = $this->property_model->get_dead_ajax($id)->result();
			if($data)
			{
				echo json_encode($data);
			}
			else {
				echo 2 ; die();
			}
	} 

	function get_dead_details()
	{
		$id = $this->input->post('id');
		
		$r = $this->family_model->check_comments($id)->row();
		if(empty($r->comments))
		{
			$res = $this->property_model->check_dead($id);
			if($res){
				echo 1;
			}
			else{		
			$data = $this->family_model->fam_det_d($id)->result(); 
			echo json_encode($data[0]); die();
			}
		}
		else{
			$res = $this->property_model->check_dead($id);
			if($res){
				echo 1;
			}
			else{		
			$data = $this->family_model->fam_det_d($id)->result(); 
			echo json_encode($data[0]); die();
			}
		}


		
	} 

	function add_property_alloc()
	{		
		parse_str($_POST['p_alloc_data'] , $searcharray);
		
		$fam_id = $searcharray['fam_id'];
		$percent = $searcharray['percent'];
		$myallocation = $searcharray['myallocation'];
		//print_r($fam_id); echo $percent; echo $myallocation; die();
		$var =  $percent - $myallocation;
		if($var == 0)
		{
			$data = array( 'property_id' => $searcharray['property_id'],
		 'fam_id' => $searcharray['fam_id'],
		 'rel_id' => $searcharray['rel_id'],
		 'percent' => $searcharray['myallocation'],
		 'status' => '1'
		 );
		}
		else{
			$data = array( 'property_id' => $searcharray['property_id'],
		 'fam_id' => $searcharray['fam_id'],
		 'rel_id' => $searcharray['rel_id'],
		 'percent' => $searcharray['myallocation'],
		 'status' => 0 );
		}			

			$v = $this->property_model->insert_immov($data);
			if($v > 0)
			{
				$dat['p'] = $this->property_model->name_pro_alloc($v);
				echo json_encode($dat); die();
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

	function edit_alloc(){

		$pid = $this->input->post('pid');
		$id = $this->input->post('id');
		$data['allpro'] = $this->property_model->get_by_id($id);

		if($data){
			$data['rem'] = $this->property_model->percentage($pid);
			echo json_encode($data);
		}
		else{
			echo 2; die();
		}
	}

	function update_property_alloc(){
		//print_r($_POST); die();
		$id = $this->input->post('id');
		parse_str($_POST['details'], $searcharray);

		$per = $searcharray['myallocation'];
		$rem = $searcharray['percent'];
		$before = $this->input->post('data');
		
		$add = $before + $rem;
		
		if($per == $add)
		{
			$data = array( 
		 'percent' => $searcharray['myallocation'],
		 'status' => 1 );
		}
		else
		{
			$data = array( 
		 'percent' => $searcharray['myallocation'],
		 'status' => 0 );
		}
		
		$v = $this->property_model->update_immov($id,$data);
			if($v)
			{
				$data['p']=$this->property_model->name_pro_alloc($id);
				echo json_encode($data); 
			}
			else{ echo 2; die();
		}
		
	}

	function del_alloc(){

		$id = $this->input->post('id');
			$alloc = $this->property_model->del_alloc($id);
			if($alloc)
			{
				$data['id'] = $this->input->post('id');
				echo json_encode($data);
			}
			else {
			echo 2; die();
		}
	 }

	 function edit_dead_alloc()
	 {
	 	$id = $this->input->post('id');
	 	$fam = $this->input->post('fam');
	 	$r = $this->family_model->check_comments($fam)->row();
		if(empty($r->comments))
		{
			$data['fam_d'] = $this->property_model->edit_dead_alloc($id)->row();
	 	$data['rem_p'] = $this->property_model->dead_per()->row();
	 	echo json_encode($data); die();
		}
		else{
			$data['fam_d'] = $this->property_model->edit_dead_alloc($id)->row();
	 	$data['rem_p'] = $this->property_model->dead_per()->row();
	 	echo json_encode($data); die();
			}
	 }

	 function update_dead_alloc(){
	 	$dead_id = $this->input->post('dead_id');
	 	$a_per = $this->input->post('a_per');

		$dead = $this->property_model->update_dead_alloc($dead_id,$a_per);

		if($dead)
		{
			$data['id'] = $this->input->post('dead_id');	
			$data['alloc'] = $this->property_model->get_dead_alloc($dead_id)->row();
		    $data['per'] = $this->property_model->dead_per()->row();
			echo json_encode($data);
		}
		else {
			echo 2;
		}

	 }

	 function delete_dead_alloc()
	 {
	 		$id = $this->input->post('id');

			$dead = $this->property_model->delete_dead_alloc($id);
			if($dead)
			{
				$data['id'] = $this->input->post('id');
				$data['rem_p'] = $this->property_model->dead_per()->row();
				echo json_encode($data);
			}
			else {
			echo 1; die();
		}
	}

	 /*  END of Property Allocation Panel      */

	 /*  START of Reason Panel      */

	function reason_for_not_alloc()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['reason'] = $this->property_model->reason_not_alloc();
		$data['tab'] = "reason_for_not_alloc";
		$data['width'] = "66%";
		insert_activity($this->will_id,1,4);
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('reason_for_not_alloc',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function save_reason()
	{  
		parse_str($_POST['details'],$searcharray);
				
		$res = $this->property_model->save_reason($searcharray);
		if($res)
		{
			echo 1;
		}
		else{
			echo 2;
		}
	}

	/*  END of Reason Panel      */

	/*  START of Previous Will Panel      */

	function previous_will()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		//$data['personal'] = $this->user_model->personal_details();
		$data['tab'] = "previous_will";
		insert_activity($this->will_id,1,5);
		$data['width'] = "76%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('previous_will',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	/*  END of Previous Will Panel      */

	/*  START of Executor Panel      */

	function executor()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['executor'] = $this->doctor_model->get_executor()->result();
		//print_r($data); die();
		$data['tab'] = "executor";
		$data['width'] = "85%";
		insert_activity($this->will_id,1,6);
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('executor',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function save_executor()
	{
		//print_r($_POST); die();
		parse_str($_POST['exec_data'], $searcharray);
		$ex = $this->doctor_model->save_executor($searcharray);
		if($ex)
		{
			$data['name']=$this->doctor_model->name_executor($ex);
			echo json_encode($data); 
		}
		else{
			echo 2; die();
		}
	}

	function edit_executor(){		

		$id = $this->input->post('id');
		$data['ex'] = $this->doctor_model->edit_executor($id)->row();
		if($data){
			echo json_encode($data);
		}
		else{
			echo 2; die();
		}
		
	}


	function update_executor() {

		$id = $this->input->post('id');
		parse_str($_POST['details'], $searcharray);
		$a = $searcharray;
		
		$ex = $this->doctor_model->update_executor($id,$a);
		if($ex)
		{
			$data['ex']=$this->doctor_model->name_executor($id);
			echo json_encode($data); 
		}
		else {
			echo 2; die();
		}			
	}

	function delete_executor()
	{
		$id = $this->input->post('id');
			$ex = $this->doctor_model->delete_executor($id);
			if($ex)
			{
				$data['id'] = $this->input->post('id');
				echo json_encode($data);
			}
			else {
			echo 2; die();
		}
	}

	/*  END of Executor Panel      */

	/*  START of Doctor Panel      */

	function doctor()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['doctor'] = $this->doctor_model->get_doctor()->result();
		$data['tab'] = "doctor";
		$data['width'] = "92%";
		insert_activity($this->will_id,1,6);
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('doctor',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function save_doctor()
	{
		parse_str($_POST['doc_data'], $searcharray);
		
		$doc = $this->doctor_model->save_doctor($searcharray);
		if($doc)
		{
			$data['name']=$this->doctor_model->name_doctor($doc);
			echo json_encode($data); 
		}
		else{
			echo 2; die();
		}
	}

	function edit_doctor(){
		$id = $this->input->post('id');
		$data['d'] = $this->doctor_model->edit_doctor($id)->row();
		if($data){
			echo json_encode($data);
		}
		else{
			echo 2; die();
		}
		
	}

	function update_doctor() {
		///print_r($_POST); die();
		$id = $this->input->post('id');
		parse_str($_POST['details'], $searcharray);
		$a = $searcharray;
		
		$doc = $this->doctor_model->update_doctor($id,$a);
		if($doc)
		{
			$data['name']=$this->doctor_model->name_doctor($id);
			echo json_encode($data); 
		}
		else {
			echo 2; die();
		}
				
	}

	function delete_doctor()
	{		$id = $this->input->post('id');
			$doc = $this->doctor_model->delete_doctor($id);
			if($doc)
			{
				$data['id'] = $this->input->post('id');
				echo json_encode($data);
			}
			else {
			echo 2; die();
		}
	}

	/*  END of Doctor Panel      */

	/*  START of Witness Panel      */

	function witness()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
		$data['witness'] = $this->doctor_model->get_witness()->result();
		$data['tab'] = "witness";
		$data['width'] = "100%";
		insert_activity($this->will_id,1,7);
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('witness',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}

	function save_witness()
	{
		parse_str($_POST['wit_data'], $searcharray);
		
		$wit = $this->doctor_model->save_witness($searcharray);
		if($wit)
		{
			$data['name']=$this->doctor_model->name_witness($wit);
			echo json_encode($data); 
		}
		else{
			echo 2; die();
		}
	}

	function edit_witness(){

		$id = $this->input->post('id');
		$data['w'] = $this->doctor_model->edit_witness($id)->row();
		if($data){
			echo json_encode($data);
		}
		else{
			echo 2; die();
		}
		
		
	}

	function update_witness() {
		
		$id = $this->input->post('id');
		parse_str($_POST['details'], $searcharray);
		$a = $searcharray;
		
		$wit = $this->doctor_model->update_witness($id,$a);
		if($wit)
		{
			$data['wit']=$this->doctor_model->name_witness($id);
			echo json_encode($data); 
		}
		else {
			echo 2; die();
		}
				
	}

	function delete_witness()
	{
		$id = $this->input->post('id');
			$wit = $this->doctor_model->delete_witness($id);
			if($wit)
			{
				$data['id'] = $this->input->post('id');
				echo json_encode($data);
			}
			else {
			echo 2; die();
		}
	}

	/*  END of Witness Panel      */

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

	function p_a()
	{
		if($session = $this->session->userdata('is_userlogged_in')['user_id'])
		{
			
		$data['immov'] = $this->property_model->get_immov();		
		
		$data['fam_a'] = $this->family_model->get_fam_a()->result();
		$data['dead'] = $this->property_model->get_dead()->result();
		//echo "<pre>"; print_r($data); die();
		//insert_activity($this->will_id,1,3);
		//
		$data['tab'] = "p_a";
		$data['width'] = "48%";
		$this->load->view('header');
		$this->load->view('navbar',$data);
		$this->load->view('p_a',$data);
		$this->load->view('footer'); }
		else { redirect('user/signin');}
	}
	
}

?>