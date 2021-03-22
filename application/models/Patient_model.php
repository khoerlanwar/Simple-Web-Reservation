<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Patient_model extends CI_Model
{

	public function codePatient()
	{
		$LOOP = 0;
		$this->db->select('psnId');
		$this->db->from('data_pasien');
		$COUNT = $this->db->count_all_results();

		$CODE = 'PSN-' . ($COUNT + 1);

		$uniqueCode = $this->uniqueCode($CODE);

		a:
		if ($uniqueCode) {
			$result['CODE'] = $CODE;

		} else {
			$LOOP = $LOOP + 1; $COUNTJML = $COUNT + $LOOP;
			$CODE = 'PSN-' . $COUNTJML;
			$uniqueCode = $this->uniqueCode($CODE);
			goto a;
		}

		return $result;
	}

	public function uniqueCode($value)
	{
		$this->db->select('psnPasienCode');
		$this->db->from('data_pasien');
		$this->db->where('psnPasienCode', $value);
		$HASILCOUNT = $this->db->get()->row();

		if (isset($HASILCOUNT)) {
			return false;
		} else {
			return true;
		}
	}

	public function getPatientList($search)
	{
		$this->db->select('psnId, psnFullname, psnPasienCode, psnGender, psnAddress, psnTglLahir, psnStatus');
		$this->db->from('data_pasien');
		if(!$search == "") {
			$this->db->group_start();
			$this->db->like('psnFullname', $search);
			$this->db->or_like('psnPasienCode', $search);
			$this->db->or_like('psnAddress', $search);
			$this->db->or_like('psnTglLahir', $search);
			$this->db->group_end();
		};
		$this->db->order_by('psnId', 'desc');
		$this->db->limit('25');
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function getPatientData()
	{
		$id = $this->input->get('id');

		$this->db->select('psnId, psnFullname, psnPasienCode, psnGender, psnAddress, psnTglLahir, psnStatus');
		$this->db->from('data_pasien');
		$this->db->where('psnId', $id);
		$result = $this->db->get()->row();
		return $result;
	}

	public function postPatientEdit($id)
	{
		$psnFullname = $this->input->post('psnFullname');
		$psnPasienCode = $this->input->post('psnPasienCode');
		$psnGender = $this->input->post('psnGender');
		$psnAddress = $this->input->post('psnAddress');
		$psnTglLahir = $this->input->post('psnTglLahir');
		$psnStatus = $this->input->post('psnStatus');

		$data = array(
			'psnFullname' => $psnFullname,
			'psnPasienCode' => $psnPasienCode,
			'psnGender' => $psnGender,
			'psnAddress' => $psnAddress,
			'psnTglLahir' => $psnTglLahir,
			'psnStatus' => $psnStatus,
			'psnUpdateId' => $this->session->id,
			'psnUpdateTime' => date('Y-m-d H:i:s'),
		);

		if ($this->db->set($data)->where('psnId', $id)->update('data_pasien')) {
			return $result = true;
		} else {
			return $this->db->error();
		}

	}

	public function postPatientSave()
	{
		$psnFullname = $this->input->post('psnFullname');
		$psnPasienCode = $this->input->post('psnPasienCode');
		$psnGender = $this->input->post('psnGender');
		$psnAddress = $this->input->post('psnAddress');
		$psnTglLahir = $this->input->post('psnTglLahir');

		$data = array(
			'psnFullname' => $psnFullname,
			'psnPasienCode' => $psnPasienCode,
			'psnGender' => $psnGender,
			'psnAddress' => $psnAddress,
			'psnTglLahir' => $psnTglLahir,
			'psnStatus' => 1,
			'psnUpdateId' => $this->session->id,
			'psnUpdateTime' => date('Y-m-d H:i:s'),
		);

		if ($this->db->insert('data_pasien', $data)) {
			return $result = true;
		} else {
			return $this->db->error();
		}
	}

	public function postPatientDelete($id)
	{
		if ($this->db->where('psnId', $id)->delete('data_pasien')) {
			return $data = true;
		} else {
			return $this->db->error();
		}
	}

	public function getPatient($search)
	{
		$this->db->select('psnId, psnFullname, psnPasienCode');
		$this->db->group_start();
		$this->db->like('psnFullname', $search);
		$this->db->or_like('psnPasienCode', $search);
		$this->db->group_end();
		$this->db->from('data_pasien');
		$this->db->order_by('rand()');
		$this->db->limit(30);
		$this->db->where('psnStatus', 1);
		$result = $this->db->get()->result();

		$result_array = array();
			foreach ($result as $row)
			{
				$result_array[] = array('id' => $row->psnId, 'text' => $row->psnPasienCode .' - '. $row->psnFullname);
			}
		return $result_array;
	}
}