<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_users extends MY_Model {
	public function __construct () {
		parent::__construct();
	}
	public function userList($id=null){
		$this->db->select('id,username,status,password,cby,DATE_FORMAT(cdate,"%d-%M-%Y") as cdate,ccode,isused');
		$this->db->from('clients');
		$this->db->order_by('id','desc');
		if(intval($id)!=0)
			$this->db->where('id',$id);
		$query = $this->db->get();	
		return $query->result_array();		
				
	}
	
	public function adminuserList($id=null){
		$this->db->select('id,name,email,status,type,password,cby,DATE_FORMAT(cdate,"%d-%M-%Y") as cdate');
		$this->db->from('admin');
		$this->db->order_by('id','desc');
		if(intval($id)!=0)
			$this->db->where('id',$id);
		$query = $this->db->get();	
		return $query->result_array();		
				
	}
	
	public function getUserCount($type=null)
	{
		switch($type)
		{
		case "1": // used userList
		$this->db->where("isused",1);
		$this->db->from("clients");
		return $this->db->count_all_results();
		break;
		case "2": //Free userList
		$this->db->where("isused",0);
		$this->db->from("clients");
		return $this->db->count_all_results();
		break;
		case "3":
		return $this->db->count_all_results('ip');
		break;
		case "4":
		return $this->db->count_all_results('company');
		break;
		default:
		return $this->db->count_all_results('clients');
	 }
	}
	
}
?>
