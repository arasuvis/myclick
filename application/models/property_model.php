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
		$this->db->from('immovable_propertys');
		$this->db->join('admin_property','admin_property.prop_id=immovable_propertys.name','left');
		
		$this->db->where('will_id',$will_id);
		$query = $this->db->get()->result();
		
		return $query;
    }

    function get_details(){
    	$will_id = $this->session->userdata('is_userlogged_in')['will_id'];

    	$this->db->select('tbl_family.name,grant_immovable.percent,grant_immovable.grant_im_id');
    	$this->db->from('grant_immovable');
    	$this->db->join('tbl_family','tbl_family.id=grant_immovable.fam_id','left');
    	//$this->db->join('admin_relations','admin_relations.rel_id=grant_immovable.rel_id','left');
    	$this->db->where('grant_immovable.will_id',$will_id);
    	$query = $this->db->get();

    	return $query;
     } 

    

    function insert_immov($data){
    $data['will_id'] = $this->session->userdata('is_userlogged_in')['will_id'];

    return $query = $this->db->insert('grant_immovable', $data);
    }

    
}
?>