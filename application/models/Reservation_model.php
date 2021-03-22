<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Reservation_model extends CI_Model
{
	public function getReservationHomeList($search)
	{
		$this->db->select('rsvPsnId, psnFullname, psnPasienCode, dctFullname, usrFullname, DATE_FORMAT(rsvReserveDate, "%Y-%m-%d") as rsvReserveDate, DATE_FORMAT(rsvReserveDate, "%H:%i %p") as rsvReserveTime, rsvStatus, rsvId');
		$this->db->from('data_reservasi');
		$this->db->join('data_users', 'usrId=rsvCreateId', 'left');
		$this->db->join('data_pasien', 'psnId=rsvPsnId', 'left');
		$this->db->join('data_doctor', 'dctId=rsvDctId', 'left');
		$this->db->where('DATE_FORMAT(rsvReserveDate, "%Y-%m-%d") =', date('Y-m-d'));
			if(!$search == "") {
				$this->db->group_start();
				$this->db->like('psnFullname', $search);
				$this->db->or_like('psnPasienCode', $search);
				$this->db->or_like('dctFullname', $search);
				$this->db->or_like('rsvReserveDate', $search);
				$this->db->group_end();
			};
		$this->db->order_by('rsvReserveTime', 'asc');
		$this->db->order_by('rsvStatus', 'desc');
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function getReservationList($search)
	{
		$this->db->select('rsvPsnId, psnFullname, psnPasienCode, dctFullname, usrFullname, DATE_FORMAT(rsvReserveDate, "%Y-%m-%d") as rsvReserveDate, DATE_FORMAT(rsvReserveDate, "%H:%i") as rsvReserveTime, rsvStatus, rsvId');
		$this->db->from('data_reservasi');
		$this->db->join('data_users', 'usrId=rsvCreateId', 'left');
		$this->db->join('data_pasien', 'psnId=rsvPsnId', 'left');
		$this->db->join('data_doctor', 'dctId=rsvDctId', 'left');
			if(!$search == "") {
				$this->db->group_start();
				$this->db->like('psnFullname', $search);
				$this->db->or_like('psnPasienCode', $search);
				$this->db->or_like('dctFullname', $search);
				$this->db->or_like('rsvReserveDate', $search);
				$this->db->group_end();
			};
		$this->db->where_in('rsvStatus', [1, 2, 0]);
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function getReservationData()
	{
		$id = $this->input->get('id');

		$this->db->select('rsvId, rsvDctId, rsvPsnId, psnFullname, psnPasienCode, dctFullname, usrFullname, DATE_FORMAT(rsvReserveDate, "%Y-%m-%d %H:%i") as rsvReserveDate, rsvStatus, rsvId');
		$this->db->from('data_reservasi');
		$this->db->join('data_users', 'usrId=rsvCreateId', 'left');
		$this->db->join('data_pasien', 'psnId=rsvPsnId', 'left');
		$this->db->join('data_doctor', 'dctId=rsvDctId', 'left');
		$this->db->where('rsvId', $id);
		$result = $this->db->get()->row();
		return $result;
	}

	public function postReservationEdit($id)
	{
		$rsvPsnId = $this->input->post('rsvPsnId');
		$rsvDctId = $this->input->post('rsvDctId');
		$rsvReserveDate = date( "Y-m-d H:i:s", strtotime($this->input->post('rsvReserveDate')));
		$rsvStatus = $this->input->post('rsvStatus');

		$data = array(
			'rsvPsnId' => $rsvPsnId,
			'rsvDctId' => $rsvDctId,
			'rsvReserveDate' => $rsvReserveDate,
			'rsvStatus' => $rsvStatus,
			'rsvUpdateId' => $this->session->id,
			'rsvUpdateTime' => date('Y-m-d H:i:s'),
		);

		if ($this->db->set($data)->where('rsvId', $id)->update('data_reservasi')) {
			return $result = true;
		} else {
			return $this->db->error();
		}
	}

	public function postReservationSave()
	{
		$rsvPsnId = $this->input->post('rsvPsnId');
		$rsvDctId = $this->input->post('rsvDctId');
		$rsvReserveDate = date( "Y-m-d H:i:s", strtotime($this->input->post('rsvReserveDate')));

		$data = array(
			'rsvPsnId' => $rsvPsnId,
			'rsvDctId' => $rsvDctId,
			'rsvReserveDate' => $rsvReserveDate,
			'rsvStatus' => 0,
			'rsvCreateId' => $this->session->id,
			'rsvCreateTime' => date('Y-m-d H:i:s'),
		);

		if ($this->db->insert('data_reservasi', $data)) {
			return $result = true;
		} else {
			return $this->db->error();
		}
	}

	public function postReservationDelete($id)
	{
		if ($this->db->where('rsvId', $id)->delete('data_reservasi')) {
			return $data = true;
		} else {
			return $this->db->error();
		}
	}
}