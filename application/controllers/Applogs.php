<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppLogs extends Admin_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('model_connlog');
		}
	public function index()
	{
		//$this->output->enable_profiler(true);
		$this->load->helper("users");
		$data['pageTitle'] = 'Zingmobile-VPN Connection Logs';
		$row=$this->model_connlog->logList();
		$data['rows']=$row;
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('logs');
		$this->load->view('footer');
	}
	
}
