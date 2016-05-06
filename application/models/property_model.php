<?php 

class Property_model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
		
    }

    function get_immov_property(){
		return $this->db->get('admin_property');
    }

     

    function get_owner(){
		return $this->db->get('admin_ownership');
    }

    
    function save_imov($im_pro){
    	$im_pro['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
		return $this->db->insert('immovable_propertys', $im_pro); 
    }

    function get_immov(){
     	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
     	
     
		$this->db->select('immovable_propertys.Immovable_id,immovable_propertys.name , admin_property.prop_name ,admin_property.prop_id');
        $this->db->distinct('(admin_property.prop_name) as dis_prop_name');
		$this->db->from('immovable_propertys');
		$this->db->join('admin_property','admin_property.prop_id=immovable_propertys.name','left');
		
		$this->db->where('will_id',$will_id);
		
		$query = $this->db->get()->result();
		
		return $query;
    }

    function get_distinct()
    {
        $query = $this->db->distinct('admin_property.prop_name ,admin_property.prop_id')
                        ->get('admin_property');

        return $query->result();
    }

    
    function get_det($id){
    	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];

    	$this->db->select('tbl_family.name,grant_immovable.percent,grant_immovable.grant_im_id,grant_immovable.property_id');
    	$this->db->from('grant_immovable');
    	$this->db->join('tbl_family','tbl_family.id=grant_immovable.fam_id','left');
    	//$this->db->join('admin_relations','admin_relations.rel_id=grant_immovable.rel_id','left');
    	$this->db->where('grant_immovable.will_id',$will_id);
    	$this->db->where('grant_immovable.property_id',$id);
    	$query = $this->db->get();

    	return $query;
     } 

    function check($id,$im_id){
    	 $this->db->where('property_id',$im_id)
    					->where('fam_id',$id)
    					->get('grant_immovable');

    				$res =	$this->db->affected_rows();
       	if($res > 0)
    	{
    		return true;
    	}	
    	else{
    		return false;
    	}
    }

     function check_d($id){
         $this->db
                        ->where('fam_id',$id)
                        ->get('grant_immovable');

                    $res =  $this->db->affected_rows();
        if($res > 0)
        {
            return true;
        }   
        else{
            return false;
        }
    }

    function insert_immov($data){
    $data['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
	
    return $query = $this->db->insert('grant_immovable', $data);
     //$query = $this->db->insert_id();

    /*if($query)
    {
    	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
    	$this->db->select('tbl_family.name,grant_immovable.percent,grant_immovable.grant_im_id');
    	$this->db->from('grant_immovable');
    	$this->db->join('tbl_family','tbl_family.id=grant_immovable.fam_id','left');
    	$this->db->where('grant_immovable.grant_im_id',$query);
    	$this->db->where('grant_immovable.will_id',$will_id);
    	$q = $this->db->get();

       	return $q; 
    } */

    }
 function prop_det($id){
    
		$this->db->select('SUM(percent) as percent_count');
		$this->db->from('grant_immovable');
		//$this->db->join('admin_relations','admin_relations.rel_id=tbl_family.relationship','left');
		$this->db->where('property_id',$id);
		//$this->db->order_by('tbl_family','asc');
		$query = $this->db->get();

		return $query;
    }

     function update_immov($id,$data){
    $data['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
    return $query = $this->db->where('grant_im_id',$id)
    							->update('immovable_propertys', $data); 
	}

    function edit_property($id)
    {
        return $query =  $this->db->where('Immovable_id',$id)
                        ->get('admin_property');
    } 

    function dist(){
    	$this->db->select('count(DISTINCT(name)) as na');  
   		$this->db->from('immovable_propertys');  
     
   		return $query=$this->db->get();  
    }

    function comp_det(){
    
		$this->db->select('count(status) as st') ;
		$this->db->from('grant_immovable');
		//$this->db->join('admin_relations','admin_relations.rel_id=tbl_family.relationship','left');
		$this->db->where('status',1);
		//$this->db->order_by('tbl_family','asc');
		$query = $this->db->get();

		return $query;
    }

    function get_by_id($id){
    	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];
     	
		$this->db->select('grant_immovable.property_id,grant_immovable.grant_im_id,grant_immovable.percent,
			admin_property.prop_name ,admin_property.prop_id,grant_immovable.fam_id,grant_immovable.rel_id,tbl_family.name,tbl_family.id,tbl_family.dob,tbl_family.gender,tbl_family.marital_status,admin_relations.rel_id as rela_id,admin_relations.name as rel_name');
		
		$this->db->from('grant_immovable');
		$this->db->join('admin_property','admin_property.prop_id=grant_immovable.property_id','left');
		$this->db->join('tbl_family','tbl_family.id=grant_immovable.fam_id','left');
		$this->db->join('admin_relations','admin_relations.rel_id=grant_immovable.rel_id','left');
		
		$this->db->where('grant_immovable.grant_im_id',$id);
		$this->db->where('grant_immovable.will_id',$will_id);
		
		
		$query = $this->db->get()->row();
		
		return $query;
		//return $this->db->get('grant_immovable');
    }

    function percentage($pid)
    {
    	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];

    	$query  = $this->db->select('SUM(percent) as remainder')
    				->where('property_id',$pid)
    				->get('grant_immovable');
    	
    	return $query->row();

    }

    function reason_not_alloc(){
    	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];

    	$this->db->select('tbl_family.id,tbl_family.name,tbl_family.status');
    	$this->db->from('tbl_family');
    	
    	$this->db->where('tbl_family.will_id',$will_id);
    	$this->db->where('tbl_family.status','Alive');
    	$this->db->where('tbl_family.id NOT IN (select fam_id from grant_immovable)',NULL,FALSE);
    	
    	$query = $this->db->get()->result();

    	return $query;
     } 

       function save_reason($data){
foreach($data as $key => $val){

	$family['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];
	$family['member_id'] = $key;
	$family['reason'] = $val;
	$family['created_date'] = date("Y-m-d H:i:s");
	$family['modified_date']= date("Y-m-d H:i:s");
	
	$this->db->insert('not_allocated_details', $family);
	
	}return 1;
       
     } 

function del_alloc($id)
    {
         $this->db->where('grant_im_id', $id)
                                ->delete('grant_immovable');

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
?>