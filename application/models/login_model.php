<?php

class Login_model extends CI_Model {
    

    public function validate_login($username, $password) {
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}