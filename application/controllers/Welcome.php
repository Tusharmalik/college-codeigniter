<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('home');
        $this->load->helper('url_helper');
    }
	public function index()
	{
		$this->load->helper('url');
		$data['scroller'] = $this->home->scroller();
		$data['id'] = $this->home->id();
		// echo $data['id']->id;
		$this->load->view('templates/header');
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
}
