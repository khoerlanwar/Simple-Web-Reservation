<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['session']);
		$this->load->model('reservation_model', 'reservation');
		$this->load->model('patient_model', 'patient');

		$this->css = array (
			base_url('templete/adminLTE/plugins/fontawesome-free/css/all.min.css'),
			base_url('templete/adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css'),
			base_url('templete/adminLTE/dist/css/adminlte.min.css'),
			base_url('templete/adminLTE/plugins/select2/css/select2.min.css'),
			base_url('templete/adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css'),
			'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
			base_url('templete/adminLTE/plugins/daterangepicker/daterangepicker.css'),
			
		);

		$this->js = array (
			base_url('templete/adminLTE/plugins/jquery/jquery.min.js'),
			base_url('templete/adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js'),
			base_url('templete/adminLTE/dist/js/adminlte.min.js'),
			base_url('templete/adminLTE/plugins/select2/js/select2.full.min.js"'),
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
			'data' => $this->reservation->getReservationList(),
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/reservation/list', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}


	public function add()
	{
		$data = array(
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js,
			'app' => base_url('assets/js/reservation/custom.js'),
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/reservation/add', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}

	public function edit()
	{
		$data = array(
			'data' => $this->reservation->getReservationData(),
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js,
			'app' => base_url('assets/js/reservation/custom.js'),
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/reservation/edit', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}

	public function postAdd()
	{
		$result = $this->reservation->postReservationSave();

		if ($result) {
			$this->session->set_flashdata('success', 'Success Add Data Reservation');
			redirect('/reservation', 'refresh');
		} else {
			$this->session->set_flashdata('danger', 'Add Data Failed');
			redirect('/reservation/add', 'refresh');
		}
	}

	public function postEdit()
	{
		$id = $this->input->post('rsvId');
		$result = $this->reservation->postReservationEdit($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Success Edit Data Reservation');
			redirect('/reservation');
		} else {
			$this->session->set_flashdata('danger', 'Edit Data Failed');
			redirect('/reservation/edit?id='. $id, 'refresh');
		}
	}

	public function delete()
	{
		$id = $this->input->get('id');
		$result = $this->reservation->postReservationDelete($id);

		if ($result) {
			$this->session->set_flashdata('success', 'Success Delete Data Reservation');
			redirect('/reservation', 'refresh');
		} else {
			$this->session->set_flashdata('danger', 'Delete Data Failed');
			redirect('/reservation', 'refresh');
		}
		
	}

	
}
