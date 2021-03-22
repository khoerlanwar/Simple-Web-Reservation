<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Doctor_model extends CI_Model
{
	public function getDoctorList()
	{
		$this->db->select('dctId, dctFullname, dctStatus, dctCreateTime');
		$this->db->from('data_doctor');
		$this->db->order_by('dctCreateTime', 'desc');
		$this->db->limit(25);
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function getDoctorData()
	{
		$id = $this->input->get('id');

		$this->db->select('dctId, dctFullname, dctStatus, dctCreateTime');
		$this->db->from('data_doctor');
		$this->db->where('dctId', $id);
		$result = $this->db->get()->row();
		return $result;
	}

	public function postDoctorEdit($id)
	{
		$dctFullname = $this->input->post('dctFullname');
		$dctStatus = $this->input->post('dctStatus');

		$data = array(
			'dctFullname' => $dctFullname,
			'dctStatus' => $dctStatus,
			'dctUpdateId' => $this->session->id,
			'dctUpdateTime' => date('Y-m-d H:i:s'),
		);

		if ($this->db->set($data)->where('dctId', $id)->update('data_doctor')) {
			return $result = true;
		} else {
			return $this->db->error();
		}
	}

	public function postDoctorSave()
	{
		$dctFullname = $this->input->post('dctFullname');

		$data = array(
			'dctFullname' => $dctFullname,
			'dctStatus' => 1,
			'dctCreateId' => $this->session->id,
			'dctCreateTime' => date('Y-m-d H:i:s'),
		);

		if ($this->db->insert('data_doctor', $data)) {
			return $result = true;
		} else {
			return $this->db->error();
		}
	}

	public function postDoctorDelete($id)
	{
		if ($this->db->where('dctId', $id)->delete('data_doctor')) {
			return $data = true;
		} else {
			return $this->db->error();
		}
	}

	public function getDoctor($search)
	{
		$this->db->select('dctId, dctFullname');
		$this->db->group_start();
		$this->db->like('dctFullname', $search);
		$this->db->group_end();
		$this->db->from('data_doctor');
		$this->db->order_by('rand()');
		$this->db->limit(30);
		$this->db->where('dctStatus', 1);
		$result = $this->db->get()->result();

		$result_array = array();
			foreach ($result as $row)
			{
				$result_array[] = array('id' => $row->dctId, 'text' => 'dr. '. $row->dctFullname);
			}
		return $result_array;
	}
}