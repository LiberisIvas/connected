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
        	(first_name, last_name, email, password , category , looking_for , link , story , image , created_at, updated_at)
        		VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        
             return $this->db->query($query, $values);
    }

    public function get_user($check){
        
        return $this->db->query( "SELECT * FROM users WHERE email=?",array($check))->row_array();

    }

    

    public function add_message($new_message){
            $query = "INSERT INTO messages
            (id_user, id_recipient, status, text_message, created_at, updated_at)
                VALUES (?,?,?,?,?,?)";
            return $this->db->query($query, $new_message);
    }
    

    public function show_category($check){
        
        return $this->db->query( "SELECT * FROM users WHERE category=?",array($check))->result_array();

    }
    public function get_user_profile($check){
        
        return $this->db->query( "SELECT * FROM users WHERE idusers=? ",array($check))->row_array();

    }

    public function get_inbox ($mail){
        return $this->db->query( "SELECT * FROM messages WHERE id_recipient=? AND status = '1' ORDER BY id_message DESC",array($mail))->result_array();
    }
    public function get_outbox ($mail){
        return $this->db->query( "SELECT * FROM messages WHERE id_user=? ORDER BY id_message DESC ",array($mail))->result_array();
    }


    public function delete_message ($message){
           // return $this->db->query( "UPDATE messages SET status='2' WHERE id_message=? " , $message );
        $this->db->where('id_message',$message);
        $this->db->update('messages','2');
       
    }



}