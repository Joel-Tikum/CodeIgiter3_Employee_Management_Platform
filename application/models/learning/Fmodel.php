<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fmodel extends CI_Model
{
	public function allWorkers()
	{
		$query = $this->db->get('iq_workers');
		return $query->result();
	}

	public function createWorker($data)
	{
		return $this->db->insert('iq_workers', $data);
	}

	public function getWorker($email)
	{
		return $this->db->get_where('iq_workers', ['email' => $email])->row();
	}



	public function oneEmployee($id)
	{
		return $this->db->get_where('iq_users', array('id' => $id))->result();
	}

	

	public function empUpdate($id, $data)
	{
		return $this->db->where('id', $id)->update('iq_users', $data);
	}

	public function empDelete($id)
	{
		return $this->db->delete('iq_users', array('id' => $id));
	}


	public function adminSignUp($data)
	{
		return $this->db->insert('iq_admins', $data);
	}


	public function getAdmin($email)
	{
		return $this->db->get_where('iq_admins', ['email' => $email])->row();
	}
	public function getOneAdmin($email)
	{
		return $this->db->get_where('iq_admins', ['email' => $email])->row();
	}

}
