<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends Admin_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->model('model_users');
		}
	public function adminusers()
	{

		$data['pageTitle'] = 'Zingmobile-VPN New Admin Users List';
		$row=$this->model_users->adminuserList();
		$data['rows']=$row;
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('adminusers');
		$this->load->view('footer');

	}
public function saveAdminUser()
{
	if($this->input->post())
		{
		$this->name    = $this->input->post('name'); // please read the below note
		$this->email  = $this->input->post('email');
		$this->password  = $this->input->post('password');
		$this->status  = ($this->input->post('status')=='on')?1:0;
		$this->type  = ($this->input->post('isadmin')=='on')?1:2;
		$this->cby=$this->data['profile']['id'];
		if($this->db->insert('admin', $this))
		{
		 $result['code']=200;
		 $result['msg']='Data has been saved successfully!';
		}
		else
		{
		 $result['code']=201;
		 $result['msg']='Error in saving data';
		}
		print json_encode($result);
	}

}
	public function index()
	{
		//$this->output->enable_profiler(true);
		$data['pageTitle'] = 'Zingmobile-VPN Users List';
		$row=$this->model_users->userList();
		$data['freeusr']=$this->model_users->getUserCount(2);
		$data['usedusr']=$this->model_users->getUserCount(1);
		$data['tcompany']=$this->model_users->getUserCount(4);
		$data['tip']=$this->model_users->getUserCount(3);
		$data['rows']=$row;
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('users');
		$this->load->view('footer');
	}
	public function add($id=null)
	{	if($this->input->post())
		{

		$this->ccode    = $this->input->post('ccode'); // please read the below note
		$this->username  = $this->input->post('username');
		$this->password  = $this->input->post('password');
		$this->status  = $this->input->post('status');
		$this->isused  = ($this->input->post('isused')=='on')?1:0;
		$this->cby=$this->data['profile']['id'];
		if($this->input->post('id'))
		{
			$this->db->where('id',$this->input->post('id'));
			if($this->db->update('clients', $this))
			{
				redirect('/users');
				exit;
			}


		}
		if($this->db->insert('clients', $this))
		{
			redirect('/users');
			exit;
		}


		}
		if($id)
		{
			$row=$this->model_users->userList($id);
			$data['row']=$row;
			$company=$this->model_users->getCompanyList($row[0]['ccode']);
		}
		else
		$company=$this->model_users->getCompanyList();
		$data['companyList']=$company;
		$data['pageTitle'] = 'Zingmobile-VPN New User';
		$data['script']='form-validation.js';
		$data['jqvalscript']='jquery.validate.js';
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('user');
		$this->load->view('footer');

	}
	/* upload files */
	public function upload()
	{
		$data['error']='';
		if($this->input->post())
		{
			    $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'csv';
                $config['max_size']             = 4096;
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('userFile'))
                {
                        $data['error'] = $this->upload->display_errors();
				 }
                else
								{
                        $fname=$this->upload->data('file_name');
						$this->ccode=$this->input->post('ccode');
						$this->cby=$this->data['profile']['id'];
						$csv = array_map('str_getcsv', file($config['upload_path'].'/'.$fname));
						unset($csv[0]);
						foreach($csv as $k)
						{
						$this->username = $k[0];
						$this->password = $k[1];
						$this->db->insert("clients",$this);
						}
						redirect('/users');
						exit;

                }

		}
		$company=$this->model_users->getCompanyList();
		$data['companyList']=$company;
		$data['pageTitle'] = 'Zingmobile-VPN Upload Users';
		$data['script']='form-validation.js';
		$data['jqvalscript']='jquery.validate.js';
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->load->view('upload');
		$this->load->view('footer');

	}

}
