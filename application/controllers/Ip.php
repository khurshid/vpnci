<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ip extends Admin_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('model_ip');
		}
	public function index()
	{
		//$this->output->enable_profiler(true);
		$data['pageTitle'] = 'Zingmobile-VPN IP List';
		$row=$this->model_ip->ipList();
		$data['rows']=$row;
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('ips');
		$this->load->view('footer');
	}
	public function add($id=null)
	{
		//$this->output->enable_profiler(true);
		if($this->input->post())
		{
		$this->ccode    = $this->input->post('ccode'); // please read the below note
		$this->ip  = $this->input->post('ip');
		$this->port  = $this->input->post('port');
		$this->secret_key  = $this->input->post('secret_key');
		$this->remote_identifier  = $this->input->post('remote_identifier');
		$this->local_identifier  = $this->input->post('local_identifier');
		$this->version  = 1;
		$this->cby=$this->data['profile']['id'];
		$config['upload_path']          = 'certificates/';
		$config['allowed_types']        = 'crt|ppk|pem|csr|key|txt';
		$config['max_size']             = 2048;
		$this->load->library('upload', $config);
		 if(!$this->upload->do_upload('certificate'))
                {
                        $this->certificate=$this->input->post('h_certificate');
				 }
                else
                {
					$this->certificate=$this->upload->data('file_name');
				}
				
		if($this->input->post('id'))
		{
			$this->db->where('id',$this->input->post('id'));
			$this->version=$this->input->post('version')+1;
			if($this->db->update('ip', $this))
			{
				redirect('/ip');
				exit;
			}
				
			
		}	
		if($this->db->insert('ip', $this))
		{
			redirect('/ip');
			exit;
		}
			
		
		}
		if($id)
		{
			$row=$this->model_ip->ipList($id);
			$data['row']=$row;
			$company=$this->model_ip->getCompanyList($row[0]['ccode']);
		}
		else		
		$company=$this->model_ip->getCompanyList();
		
		$data['companyList']=$company;
		$data['pageTitle'] = 'Zingmobile-VPN New IP';
		$data['script']='form-validation.js';
		$data['jqvalscript']='jquery.validate.js';
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('ip');
		$this->load->view('footer');
	}
}
