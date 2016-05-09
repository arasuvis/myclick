<?php 

class User_model extends CI_Model
{
	function save_reg($data)
	{
		$query = $this->db->insert('user_register',$data);
					
		return $this->db->insert_id();
		
	}
	
	function personal_details($id)
	{
	$query = $this->db->where('user_id',$id)
			 ->get('user_register');
	//print_r($query->result()); die();
	return $query->result();
	}

	function reg_will_id($id)
	{
		$status = 0;
		$name = "Default Will";
		$query = $this->db->query("INSERT INTO `tbl_will`(`will_name`,`user_id`, `status`) VALUES ('$name','$id','$status')");
		$w_id = $this->db->insert_id();
		if($w_id)
		{
			$q = $this->db->query("INSERT INTO `activity`(`will_id`,`status`,`cat_id`) VALUES ('$w_id',0,1)");

			return $w_id;
		}
		else
		{
			$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
			$q = $this->db->query("INSERT INTO `activity`(`will_id`,`status`,`cat_id`) VALUES ('$w_id',0,1)");
			return false; 
		}
		
	}

	function ins_cat(){
		print_r('hello'); die();
		$default = "Profile";
		$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
		$query = $this->db->select('cat_id')
							->where('name',$default)
							->get('admin_category');
		$q = $query->row;
		print_r($q);
		 die();
	}

	function login_valid($email,$password)
	{
		$pass = md5($password);
		$sql = "Select * from user_register where email='$email' and password='$pass' ";
		$res = $this->db->query($sql);
		$result = $res->result();
		if(!empty($result))
		{
			return $result[0]->user_id;	
		}
		else
		{
			return false;
		}
	}


	function get_will_id($log_id)
	{
				
		$query = $this->db->select_max('will_id')
				 ->where('user_id',$log_id)
				 ->get('tbl_will');
		
		
		if($query->row()->will_id)
		{
			return $query->row()->will_id;
		}
		else
		{
		$status = 0;
		$name = "Default Will";
		$query = $this->db->query("INSERT INTO `tbl_will`(`will_name`,`user_id`, `status`) VALUES ('$name','$log_id','$status')");
		return $this->db->insert_id();
		}
	}

	function get_will()
	{
		return $query = $this->db->get('tbl_will');
	}

	function forgot_pass($email)
	{
		$sql = "select * from user_register where email='$email' ";
		$res = $this->db->query($sql);

		if($res->num_rows > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function resetpassword($pass,$email)
	{	
		$password = array( 'password' => $pass );	
		$this->db->where('email', $email);
		$res = $this->db->update('user_register', $password);
		if($res)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function current($pass)
	{
		$id = $this->session->userdata['is_userlogged_in']['user_id'];
		$sql = "select * from user_register where user_id='$id'  ";
		$res = $this->db->query($sql);
		$password = $res->row()->password;
		if($pass == $password)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function change_pass($newpass)
	{
		$id = $this->session->userdata['is_userlogged_in']['user_id'];
		$sql = "update user_register set password = '$newpass' where user_id = '$id'  ";
		$res = $this->db->query($sql);
		if($res)
		{
			
			return true;
		}
		else
		{
			return false;
		}
	}

	function profileUpdate($id,$profile)
	{
		return $query = $this->db->where('user_id', $id)
						  ->update('user_register', $profile); 

	}
}
?>