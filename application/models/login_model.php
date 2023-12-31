<?php

class Login_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function checkLoginDb($data)
    {

        $username = $data["username"];
        $password = $data["password"];

        $result = $this->db->query("SELECT * FROM users
                                    WHERE username = ?
                                    AND password = ?", [$username, $password]);

        if ($result->num_rows() > 0) {
            return ['result' => true, 'message' => 'login success'];
        } else {
            return ['result' => false, 'message' => 'Invalid username or password'];
        }
    }
}
