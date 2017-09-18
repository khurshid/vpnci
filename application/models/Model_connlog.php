<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_connlog extends MY_Model {
	public function __construct () {
		parent::__construct();
	}
	public function logList(){
		$this->db->select('uid,device,ccode,in_time,out_time,DATE_FORMAT(cdate,"%d-%M-%Y") as cdate');
		$this->db->from('conn_log');
		$query = $this->db->get();		
		//$result = array('no record found');
		return $query->result_array();
		
			
		
	}
	
}
?>
