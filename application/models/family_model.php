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
		return $this->db->select(['rel_id','name'])
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
}

?>