<?php 

class Doctor_model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
    }

    function save_executor($a)
    {
	$a['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
		
	 $this->db->insert('tbl_executor', $a);
	$query =	$this->db->insert_id();	
		if($query > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}     
    } 

    function name_executor($doc)
    {
	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
		
	 $query = $this->db->select('e_name,e_id,e_mobile')
	 			->where('e_id', $doc)
	 			->where('will_id',$will_id)
	 			->get('tbl_executor');
	
		if($query)
		{
			return $query->row();
		}
		else
		{
			return false;
		}     
    } 

    function save_doctor($a)
    {
	$a['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
		
	 $this->db->insert('tbl_doctor', $a);
		$query =	$this->db->insert_id();		
		if($query > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}     
    } 

    function name_doctor($doc)
    {
	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
		
	 $query = $this->db->select('d_name,d_id,d_mobile')
	 			->where('d_id', $doc)
	 			->where('will_id',$will_id)
	 			->get('tbl_doctor');
	
		if($query)
		{
			return $query->row();
		}
		else
		{
			return false;
		}     
    } 

    function name_witness($doc)
    {
	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
		
	 $query = $this->db->select('w_name,w_id')
	 			->where('w_id', $doc)
	 			->where('will_id',$will_id)
	 			->get('tbl_witness');
	
		if($query)
		{
			return $query->row();
		}
		else
		{
			return false;
		}     
    } 

    function save_witness($a)
    {
	$a['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
	$a['created_date'] = date("Y-m-d H:i:s");
	$a['modified_date']= date("Y-m-d H:i:s");
		
	 $this->db->insert('tbl_witness', $a);
		$query =	$this->db->insert_id();		
		if($query > 0)
		{
			return $query;
		}
		else
		{
			return false;
		}
	} 

	function get_executor()
    {
		return $this->db->get('tbl_executor');
	} 

	function get_doctor()
    {
		return $this->db->get('tbl_doctor');
	} 

	function get_witness()
    {
		return $this->db->get('tbl_witness');
	} 

	function edit_executor($id)
    {
		return $query =  $this->db->where('e_id',$id)
						->get('tbl_executor');
	} 

	function update_executor($id,$a)
    {
    	$a['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
		 $query = $this->db->where('e_id', $id)
					->update('tbl_executor', $a); 
			 
			if($query > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
	} 

	function edit_doctor($id)
    {
		return $query =  $this->db->where('d_id',$id)
						->get('tbl_doctor');
	} 

	function update_doctor($id,$a)
    {
    	$a['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
		  $query = $this->db->where('d_id', $id)
					->update('tbl_doctor', $a); 
			
			if($query)
			{
				return true;
			}
			else
			{
				return false;
			}
	} 

	function edit_witness($id)
    {
		return $query =  $this->db->where('w_id',$id)
						->get('tbl_witness');
	} 

	function update_witness($id,$a)
    {
    	$a['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
		 $query =  $this->db->where('w_id', $id)
					->update('tbl_witness', $a); 
			
			if($query > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
	} 

	function delete_executor($id)
    {
		 $this->db->where('e_id', $id)
								->delete('tbl_executor');

				$query =  $this->db->affected_rows();
				if($query > 0)
				{
					return true;
				}
				else
				{
					return false;
				}
	} 

	function delete_doctor($id)
    {
		 $this->db->where('d_id', $id)
								->delete('tbl_doctor');

				$query =  $this->db->affected_rows();
				if($query > 0)
				{
					return true;
				}
				else
				{
					return false;
				}
	} 

	function delete_witness($id)
    {
		 $this->db->where('w_id', $id)
								->delete('tbl_witness');

				$query =  $this->db->affected_rows();
				if($query > 0)
				{
					return true;
				}
				else
				{
					return false;
				}
	} 

	
    
}