<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class modelUser extends CI_Model {
	public function create_user($username,$nama,$password){
		$this->db->set('username', $username);
		$this->db->set('nama', $nama);
		$this->db->set('password', $password);
		$this->db->set('statusPribadi', 1);
		$this->db->insert('donatur'); 
	}

	 public function isDuplicate($username)
    {     
        $this->db->get_where('donatur', array('username' => $username), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
    }

    public function cekakun($username){ 
    	$this->db->where('username',$username);
    	$result = $this->db->get('donatur');
    	return $result->row();
    }
}