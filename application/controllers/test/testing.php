<?php
class testing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }
    public function index()
    {
        $this->unit->run($this->sum(4, 5), 9, "testing sum function");
        $this->load->view('test');
    }
    private function sum($a, $b)
    {
        return $a+$b;
    }
}
