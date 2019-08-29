<?php
class User_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function login ($email, $enc_password){
    
         $query = $this->db->get_where('users', array('email' => $email, 'password' => $enc_password));

        return $query->row_array();
    }   
    public function register($enc_password){
        $data = array(
                'email' => $this->input->post('email'),
                'password' => $enc_password
        ); 
        return $this->db->insert('users', $data);
	}	
	public function get_user_num(){
		return $this->db->count_all('users');
    }
}
?>