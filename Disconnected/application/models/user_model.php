<?php
//USER_MODEL.PHP

class User_model extends CI_Model {

    public function add_user($new_user)
    
    {
        $query = "INSERT INTO users (fname, lname, pass, email, category, skill, created_at, updated_at) VALUES (?,?,?,?,?,?,?)";
        return $this->db->query($query, $new_user);

                  
    }

    public function get_user_by_email ($checkEmail)
    {
        return $this->db->query("SELECT * FROM users WHERE email = ?", array($checkEmail))->row_array();
    }

    public function get_user_by_id ($id)
    {
        return $this->db->query("SELECT * FROM users WHERE id = ?", array($id))->row_array();
    }

    public function get_members() {
        return $this->db->query("SELECT id, fname, lname, email, job FROM users")->result_array();
    }   


   }
