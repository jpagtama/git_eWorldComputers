<?php

class GetDB extends CI_Model {

    //function for comparing login data with LoginInfo table
    public function checkLogin() {
        $this->db->where('email', $this->input->post('login-email'));
        $this->db->where('password', sha1($this->input->post('login-password')));
        $query = $this->db->get('customer');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function checkAdminLogin() {
        $this->db->where('name', $this->input->post('admin-name'));
        $this->db->where('password', sha1($this->input->post('admin-password')));
        $query = $this->db->get('admin');

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    //return the id of user with given email
    public function getUserID($email) {
        $query = $this->db->query("SELECT id FROM customer WHERE email = '$email'");
        return $query->row()->id;
    }
    
    public function getAdminID($name) {
        $query = $this->db->query("SELECT admin_id FROM admin WHERE name = '$name'");
        return $query->row()->admin_id;
    }

    //returns user data based on user ID
    public function getUserData($userID) {
        $query = $this->db->query("SELECT * FROM customer WHERE id = $userID");
        return $query->row();
    }

    //check to see if email exists in database for a user
    public function doesEmailExist() {
        $email = $this->input->post('email');
        $query = $this->db->query("SELECT * FROM customer WHERE email = '$email'");
        if ($query->num_rows() == 1) {
            return true;
        }
        return false;
    }

//change User values after edit profile
    public function updateUser($userID, $fields, $values) {
        for ($i = 0; $i < count($fields); $i++) {
            $query = $this->db->query("UPDATE Users set $fields[$i] = '" . $values[$i] . "' WHERE PID = $userID");
        }
    }

    //check to see if a user exists before calling insert vs update
    public function doesUserExist($userID) {
        $query = $this->db->query("SELECT * FROM Users WHERE PID = $userID");
        if ($query->num_rows() == 1) {
            return true;
        }
        return false;
    }
    
    public function product($category) {
        $query = $this->db->query("SELECT p.id,p.name,p.price,p.image FROM product AS p INNER JOIN category AS c ON c.id = p.cat_id WHERE UPPER(c.cat_name) = UPPER('" . $category ."')");
        return $query->result_array();
    }
    public function productbyid($id) {
        $query = $this->db->query("SELECT p.id,p.name,p.price,p.image,p.description,c.cat_name FROM product AS p INNER JOIN category AS c ON c.id = p.cat_id where p.id = '" . $id ."'");
        return $query->row_array();
    }
   
}
