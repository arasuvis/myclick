<?php 

class family_model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
		
    }

    function get_paged_list()
	{
	$session_variable = $this->session->userdata('is_userlogged_in');
	 $will_id = $session_variable['will_id'];
		return $this->db->where('will_id',$will_id)
						->get('tbl_family');
	}

    function get_relation()
	{
		$this->db->order_by('rel_id','asc');
		return $this->db->select(['rel_id','name','date'])
						->get('admin_relations');
	}

	function get_gender()
	{
		return $this->db->get('tbl_gender');
	}

	function get_marital_status()
	{
		return $this->db->get('tbl_marital_status');
	}
	
	function get_status()
	{
		return $this->db->get('tbl_status');
	}

	function save($family){	
	$session_variable = $this->session->userdata('is_userlogged_in');
		$family['will_id'] = $session_variable['will_id'];
		 $this->db->insert('tbl_family', $family);
		
		 return $this->db->insert_id();
	}

	public function get_by_id($id){
		
		return  $this->db->where('id', $id)
						  ->get('tbl_family');
				  
	}
	
	public function update($id,$family){

		$this->db->where('id', $id);
		$this->db->update('tbl_family', $family);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_family');
	}



	function get_fam_a(){
     	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
     	$status = "Alive";
		$this->db->select('tbl_family.id,tbl_family.name,tbl_family.relationship,tbl_family.dob,tbl_family.gender,tbl_family.marital_status,tbl_family.status ,admin_relations.rel_id,admin_relations.name as rel_name');
		$this->db->from('tbl_family');
		$this->db->join('admin_relations','admin_relations.rel_id=tbl_family.relationship','left');
		$this->db->where('will_id',$will_id);
		$this->db->where('status',$status);
		//$this->db->order_by('tbl_family','asc');
		$query = $this->db->get();

		return $query;
    }

    function del_id($fam_id){
    	//echo $fam_id; die();
    	$query = $this->db->where('member_id', $fam_id)
				->delete('not_allocated_details'); 
		if($query){
			return true; 
		} else{ return false;}
    }
    
    function fam_det($id){
    
		$this->db->select('tbl_family.id,tbl_family.name,tbl_family.relationship,tbl_family.dob,tbl_family.gender,tbl_family.marital_status,tbl_family.status ,admin_relations.rel_id,admin_relations.name as rel_name');
		$this->db->from('tbl_family');
		$this->db->join('admin_relations','admin_relations.rel_id=tbl_family.relationship','left');
		$this->db->where('id',$id);
		//$this->db->order_by('tbl_family','asc');
		$query = $this->db->get();

		return $query;
    }

    function fam_det_d($id){
    
		$this->db->select('tbl_family.id,tbl_family.name,tbl_family.relationship,tbl_family.dob,tbl_family.gender,tbl_family.marital_status,tbl_family.status ,admin_relations.rel_id,admin_relations.name as rel_name,grant_immovable.fam_id,grant_immovable.percent');
		$this->db->from('tbl_family');
		$this->db->join('admin_relations','admin_relations.rel_id=tbl_family.relationship','left');
		$this->db->join('grant_immovable','grant_immovable.fam_id=tbl_family.id','left');
		$this->db->where('tbl_family.id',$id);
		//$this->db->order_by('tbl_family','asc');
		$query = $this->db->get();

		return $query;
    }
}

?>