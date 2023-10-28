<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $data;
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->library('parser');
        $this->load->library('session'); 
    }

    public function index() {
        $this->load->view('auth/authentication-login1'); 
    }

    public function do_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->login_model->getUser($username, $password); 

        if ($user) {
            $response = array('success' => true, 'message' => 'Login successful');
        } else {
            $response = array('success' => false, 'message' => 'Invalid credentials');
        }

        header('Content-Type: application/json');
        echo json_encode($response);
    }
	
}
