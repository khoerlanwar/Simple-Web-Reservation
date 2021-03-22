<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['session']);
		$this->load->model('doctor_model', 'doctor');

		$this->css = array (
			base_url('templete/adminLTE/plugins/fontawesome-free/css/all.min.css'),
			base_url('templete/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css'),
			base_url('templete/adminLTE/dist/css/adminlte.min.css'),

			'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
			
		);

		$this->js = array (
			base_url('templete/adminLTE/plugins/jquery/jquery.min.js'),
			base_url('templete/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js'),
			base_url('templete/adminLTE/dist/js/adminlte.min.js'),
		);

		if (!$this->session->status) {
			$this->session->set_flashdata('category_error', 'Your must login before continue system');
			redirect('/');
		} 
	}

	public function index()
	{
		$search = $this->input->get('search');
		
		$data = array(
			'data' => $this->doctor->getDoctorList($search),
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/doctor/list', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}

	public function add()
	{
		$data = array(
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/doctor/add', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}

	public function edit()
	{
		$data = array(
			'data' => $this->doctor->getDoctorData(),
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/doctor/edit', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}

	public function postAdd()
	{
		$result = $this->doctor->postDoctorSave();

		if ($result) {
			$this->session->set_flashdata('success', 'Success Add Data Doctor');
			redirect('/doctor', 'refresh');
		} else {
			$this->session->set_flashdata('danger', 'Add Data Failed');
			redirect('/doctor/add', 'refresh');
		}
	}

	public function postEdit()
	{
		$id = $this->input->post('dctId');
		$result = $this->doctor->postDoctorEdit($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Success Edit Data Doctor');
			redirect('/doctor');
		} else {
			$this->session->set_flashdata('danger', 'Edit Data Failed');
			redirect('/doctor/edit?id='. $id, 'refresh');
		}
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$result = $this->doctor->postDoctorDelete($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Success Delete Data Doctor');
			redirect('/doctor', 'refresh');
		} else {
			$this->session->set_flashdata('danger', 'Delete Data Failed');
			redirect('/doctor', 'refresh');
		}
		
	}

	public function selectDoctor()
	{
		$search = $this->input->get('search');
		$result = $this->doctor->getDoctor($search);
		echo json_encode($result);
	}
}
