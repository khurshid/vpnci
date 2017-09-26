<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index($e=false)
    {
        //$this->output->enable_profiler(true);
        $data['pageTitle'] = 'Zingmobile-VPN Login';
        $data['error']='';
        if ($e) {
            $data['error'] = 'Inavlid E-mail and password combination!';
        }
        $this->load->view('l_header', $data);
        $this->load->view('login');
        $this->load->view('l_footer');
    }
    public function auth()
    {
        $this->load->model('model_login');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $row=$this->model_login->auth($email, $password);
        $this->session->set_userdata('profile', $row);
        if ($row['id']) {
            redirect('/users', 'location', 301);
        } else {
            redirect('/login/index/1', 'location', 301);
        }
    }
    public function forgotpassword()
    {
        $email=$this->input->post('email');
        if (!empty($email)) {
            return 1;
        }
    }
    /* Logout from the appplication */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/login', 'location', 301);
        exit;
    }
}
