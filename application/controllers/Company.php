<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends Admin_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('model_company');
		}
	public function index()
	{
		//$this->output->enable_profiler(true);
		$data['pageTitle'] = 'Zingmobile-VPN Company List';
		$row=$this->model_company->companyList();
		$data['rows']=$row;
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('companies');
		$this->load->view('footer');
	}
	private function generateRandomString($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
	public function add($code=null)
	{
		//$this->output->enable_profiler(true);
		if($this->input->post())
		{
		$this->location    = $this->input->post('location'); // please read the below note
		$this->name    = $this->input->post('name');
		$this->limit    = $this->input->post('limit');
		$this->cby=$this->data['profile']['id'];
		if($this->input->post('code'))
		{
			$this->db->where('code',$this->input->post('code'));
			if($this->db->update('company', $this))
			{
				redirect('/company');
				exit;
			}
				
		}
		else
		$this->code=$this->generateRandomString();	
		if($this->db->insert('company', $this))
		{
			redirect('/company');
			exit;
		}
				
		}
		if($code)
		{
			$row=$this->model_company->companyList($code);
			$data['row']=$row;
		}
		else
		$data['row']=[];			
		$data['pageTitle'] = 'Zingmobile-VPN Company Setup';
		$data['script']='form-validation.js';
		$data['jqvalscript']='jquery.validate.js';
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('company');
		$this->load->view('footer');
	}
}
