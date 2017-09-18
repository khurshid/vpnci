<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
		#Check the request User
		$this->isAdmin();	
	
	}

	private function isAdmin(){
		$_LoggedIn = $this->session->userdata('profile');
		$this->data['profile'] = $_LoggedIn;		
		if (!$_LoggedIn['id'])
			redirect(base_url());
			
		return true;	
	}

}
