<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_ip extends MY_Model {
	public function __construct () {
		parent::__construct();
	}
	public function ipList($id=null){
		$this->db->select('ccode,id,ip,port,version,remote_identifier,local_identifier,secret_key,certificate,DATE_FORMAT(cdate,"%d-%M-%Y") as cdate');
		$this->db->from('ip');
		if(intval($id)!=0)
			$this->db->where('id',$id);
		$query = $this->db->get();		
		return $query->result_array();
			
	}
	
}
?>
