<?php 

class User_model extends CI_Model
{

function personal_details()
{
	$query = $this->db->where('user_id',28)
			 ->get('user_register');
	//print_r($query->result()); die();
	return $query->result();
}

}
?>