<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_company extends MY_Model {
	public function __construct () {
		parent::__construct();
	}
	public function companyList($code=null){
		$this->db->select('code,name,location,limit,cby,DATE_FORMAT(cdate,"%d-%M-%Y") as cdate');
		$this->db->from('company');
		if(!empty($code))
			$this->db->where('code',$code);
		$query = $this->db->get();
		return $query->result_array();			
				
	}
	
}
?>
