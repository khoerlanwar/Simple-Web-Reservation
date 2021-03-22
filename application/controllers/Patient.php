<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['session']);
		$this->load->model('patient_model', 'patient');

		$this->css = array (
			base_url('templete/adminLTE/plugins/fontawesome-free/css/all.min.css'),
			base_url('templete/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css'),
			base_url('templete/adminLTE/dist/css/adminlte.min.css'),
			base_url('templete/adminLTE/plugins/daterangepicker/daterangepicker.css'),
			'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
			
		);

		$this->js = array (
			base_url('templete/adminLTE/plugins/jquery/jquery.min.js'),
			base_url('templete/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js'),
			base_url('templete/adminLTE/dist/js/adminlte.min.js'),
			base_url('templete/adminLTE/plugins/moment/moment.min.js'),
			base_url('templete/adminLTE/plugins/daterangepicker/daterangepicker.js'),
		);

		if (!$this->session->status) {
			$this->session->set_flashdata('category_error', 'Your must login before continue system');
			redirect('/');
		} 
	}

	public function index()
	{

		$data = array(
			'data' => $this->patient->getPatientList(),
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/patient/list', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}

	public function add()
	{
		$data = array(
			'count' => $this->patient->codePatient(),
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js,
			'app' => base_url('assets/js/patient/custom.js'),
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/patient/add', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}

	public function edit()
	{
		$data = array(
			'data' => $this->patient->getPatientData(),
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js,
			'app' => base_url('assets/js/patient/custom.js'),
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/patient/edit', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}

	public function postAdd()
	{
		$result = $this->patient->postPatientSave();

		if ($result) {
			$this->session->set_flashdata('success', 'Success Add Data Patient');
			redirect('/patient', 'refresh');
		} else {
			$this->session->set_flashdata('danger', 'Add Data Failed');
			redirect('/patient/add', 'refresh');
		}
	}

	public function postEdit()
	{
		$id = $this->input->post('psnId');
		$result = $this->patient->postPatientEdit($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Success Edit Data Patient');
			redirect('/patient');
		} else {
			$this->session->set_flashdata('danger', 'Edit Data Failed');
			redirect('/patient/edit?id='. $id, 'refresh');
		}
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$result = $this->patient->postPatientDelete($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Success Delete Data Patient');
			redirect('/patient', 'refresh');
		} else {
			$this->session->set_flashdata('danger', 'Delete Data Failed');
			redirect('/patient', 'refresh');
		}
		
	}

	public function selectPatient()
	{
		$search = $this->input->get('search');
		$result = $this->patient->getPatient($search);
		echo json_encode($result);
	}
}
