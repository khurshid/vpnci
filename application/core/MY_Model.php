<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
    }
    
	function getCompanyList($code=null)
	{
		$this->db->select('code,CONCAT(name,"(",location,")") as name');
		$this->db->from('company');
		$query = $this->db->get();		
		$dropdown='';
		if($query->num_rows() != 0){
			
			foreach($query->result_array() as $row) {
			$sel='';			
			if($code==$row['code']) $sel='selected';
				$dropdown.= '<option value="'.$row['code'].'" '.$sel.'>'.$row['name'].'</option>';
				}
		return $dropdown;
		}
		else return 'no record found';
		
	}

}
