<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends MY_Model {
	public function __construct () {
		parent::__construct();
	}
	public function auth($email,$password){
		$this->db->select('id,name,email,type');
		$this->db->from('admin');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('status', 1);
		$query = $this->db->get();		
		$result = array();
		if($query->num_rows() != 0){
			foreach($query->result_array() as $row) {
				$result['id'] = $row['id'];
				$result['name'] = $row['name'];
				$result['email'] = $row['email'];
				$result['type'] = $row['type'];
				}
		}
		return $result;
	}
	
}
?>
