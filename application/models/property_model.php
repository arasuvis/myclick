<?php 

class Property_model extends CI_Model
{
	
	function __construct(){
		parent::__construct();
		
    }

    function get_immov_property(){
		return $this->db->get('admin_property');
    }
}
?>