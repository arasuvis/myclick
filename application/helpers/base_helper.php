<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function insert_activity($will_id,$status,$cat_id)
	{
	$CI =& get_instance();	
	$ql = $CI->db->select('progress_id')->from('tbl_progress')->where('will_id',$will_id)->where('cat_id',$cat_id)->get();
	if( $ql->num_rows() > 0 ) {return 1;} else {
    return  $q = $CI->db->query("INSERT INTO `tbl_progress`(`will_id`,`status`,`cat_id`) VALUES ('$will_id','$status','$cat_id')");	
	}
	}
	function get_my_status($will_id,$cat_id)
	{
	$CI =& get_instance();	
	$ql = $CI->db->select('progress_id')->from('tbl_progress')->where('will_id',$will_id)->where('cat_id',$cat_id)->where('status',1)->get();
	if( $ql->num_rows() > 0 ) {return 1;} else {
    return  0;	
	}
	}


