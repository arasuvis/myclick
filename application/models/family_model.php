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
		$family['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
		 $this->db->insert('tbl_family', $family);
		 $query = $this->db->insert_id();

         if($query > 0)
         {
            return $query;
         }
         else
         {
            return false;
         }  
	}

	public function get_by_id($id){
		
		return  $this->db->where('id', $id)
						  ->get('tbl_family');
				  
	}

	public function get_family_mem($id){
		$this->db->select('*');
	    $this->db->from('tbl_family');
	    $this->db->join('admin_relations', 'admin_relations.rel_id = tbl_family.relationship'); 
	    $this->db->where('tbl_family.id', $id);
		$query = $this->db->get();
		return $query->result();

	}

	public function check_family($id){
        $this->db->select('*');
	    $this->db->from('tbl_family');
	    $this->db->join('admin_relations', 'admin_relations.rel_id = tbl_family.relationship'); 
	    
	    $this->db->where('tbl_family.will_id', $id);
	    $query = $this->db->get();
		return $query->result();
	}
	
	public function update($id,$family){
		return $query = $this->db->where('id',$id)
    							->update('tbl_family', $family); 
	}

	public function delete($id){
		 $this->db->where('id', $id)
                  ->delete('tbl_family');

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
      	$query = $this->db->where('member_id', $fam_id)
		        		  ->delete('not_allocated_details'); 
		if($query){
			return true; 
		} else{ return false;}
    }
    
    function fam_det($id){
    
		$this->db->select('tbl_family.id,tbl_family.name,tbl_family.relationship,tbl_family.dob,tbl_family.comments,tbl_family.gender,tbl_family.marital_status,tbl_family.status ,admin_relations.rel_id,admin_relations.name as rel_name');
		$this->db->from('tbl_family');
		$this->db->join('admin_relations','admin_relations.rel_id=tbl_family.relationship','left');
		$this->db->where('id',$id);
		//$this->db->order_by('tbl_family','asc');
		$query = $this->db->get();

		return $query;
    }

    function fam_det_d($id){
    
		$this->db->select('tbl_family.id,tbl_family.name,tbl_family.relationship,tbl_family.dob,tbl_family.comments,tbl_family.gender,tbl_family.marital_status,tbl_family.status ,admin_relations.rel_id,admin_relations.name as rel_name,grant_immovable.fam_id');
		$this->db->from('tbl_family');
		$this->db->join('admin_relations','admin_relations.rel_id=tbl_family.relationship','left');
		$this->db->join('grant_immovable','grant_immovable.fam_id=tbl_family.id','left');
		$this->db->where('tbl_family.id',$id);
		//$this->db->order_by('tbl_family','asc');
		$query = $this->db->get();

		return $query;
    }

    function check_comments($id){
    $query =  $this->db->select('comments')
    						->where('id', $id)
   						  ->get('tbl_family');
	return $query;
    }

    function get_family_check($id){
    $My = array('will_id' => $id, 'relationship' => '1','relationship' => '2');

     $this->db->where($My);
      //$this->db->where('relationship', 1);
      // $this->db->where('relationship', 2);

       return $this->db->get('tbl_family')->result();
		//$query = $this->db->get('tbl_family');
		//return $query->result();
    
    }
}

?>