<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	public function validateAuth($username)
	{
		$this->db->select('usrId, usrPassword');
		$this->db->from('data_users');
		$this->db->where('usrUsername', $username);
		$this->db->where('usrStatus', 1);
		return $this->db->get()->row();
	}

	public function getLocal($id)
	{
		$this->db->select('usrId, usrFullname, usrType');
		$this->db->from('data_users');
		$this->db->where('usrId', $id);
		$result = $this->db->get()->row();
		return $result;
	}
}