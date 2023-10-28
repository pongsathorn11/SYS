<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $data;
    public function __construct() {

        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('parser');
        $this->load->library('session');

        $this->data["base_url"] = base_url();
    }

    public function index() {
        $this->parser->parse('auth/authentication-login1', $this->data); 
    }

    public function checkLogin() {
        
        $data = $this->input->get(NULL);
        $this->load->model('login_model', 'auth/authentication-login1');
        $result = $this->login->checkLoginDb($data);

        if ($result['result'] == true){
            $this->session->set_userdata('users');
        }
        echo json_encode($result);
    }
	
}
