<?php

class Login_model extends CI_Model {
    
    public function getUser($username, $password) {

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query->num_rows() === 1) {
            $user = $query->row();

            
            if (password_verify($password, $user->password)) {
                return $user; 
            }
        }
        return false; 
    
    }
}