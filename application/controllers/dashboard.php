<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('navbar/header-all');
        $this->load->view('menu/dashboard-menu');
        $this->load->view('navbar/footer-all');

		$this->data["base_url"] = base_url();
	}
}
