<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index() {
        $this->load->view('auth/authentication-login1');
    }

    public function do_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Use the UserModel to validate the user's login credentials
        $result = $this->login_model->validate_login($username, $password);

        if ($result === TRUE) {
			redirect(base_url('dashboard'));
        } else {
            echo 'Login failed';
        }
    }
	
}
