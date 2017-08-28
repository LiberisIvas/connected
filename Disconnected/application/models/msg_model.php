<?php 
/**
* 
*/
class Msg_model extends CI_Model
{
	
	public function send_message($msg)
	{
		$query = "INSERT INTO messages (message, sender_id, receiver_id, created_at, updated_at) VALUES (?,?,?,?,?)"; //made a query

		$data= array(
			$msg['message'],
			$msg['sender_id'],
			$msg['receiver_id'],
			$msg['created_at'],
			$msg['updated_at']
	   	);

        return $this->db->query($query, $data); //executed in the db
    }
}




 ?>