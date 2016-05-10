<?php 

class Will_model extends CI_Model
{
	function get_will_details()
	{
			$this->load->library('mydb');
			return $arr  = $this->mydb->GetMultiResults("CALL Proc_willdetails(28,8,0)");			
	}

	/*function w(){
		SELECT grant_immovable.property_id, property_id.fam_id , property_id.percent , 
    admin_property.prop_id, admin_property.prop_name , admin_property.type ,tbl_family.id, tbl_family.name
FROM  grant_immovable
INNER JOIN admin_property ON grant_immovable.property_id = admin_property.prop_id
INNER JOIN tbl_family ON grant_immovable.fam_id = tbl_family.id
WHERE admin_property.type = 1 

	}
*/
		
}
?>