<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {
    // function get_all_quotes()
    // {
    //     return $this->db->query("SELECT * FROM users")->result_array();
    // }
    // function get_by_quote_id($quote_id)
    // {
    //     return $this->db->query("SELECT * FROM quotes WHERE id = ?", array($quote_id))->row_array();
    // }
    public function add_user($values)
    {
        $query = "INSERT INTO users 
        	(first_name, last_name, email, password , created_at, updated_at)
        		VALUES (?,?,?,?,?,?)";
        
             return $this->db->query($query, $values);
    }

    public function get_user($check){
        
        return $this->db->query( "SELECT * FROM users WHERE email=?",array($check))->row_array();

    }

    public function show_post (){


    }

    public function add_post($new_post){
            $query = "INSERT INTO posts
            (users_idusers, post)
                VALUES (?,?)";
            return $this->db->query($query, $new_post);
    }






}