<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datatable extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();

		$this->load->helper('url');
		$this->load->library('parser');
		$this->load->library('session');

		$this->data["base_url"] = base_url();
	}

	public function index()
	{
		$this->parser->parse('navbar/header-all', $this->data);
		$this->parser->parse('menu/datatable', $this->data);
		$this->parser->parse('navbar/footer-all', $this->data);
	}
}

