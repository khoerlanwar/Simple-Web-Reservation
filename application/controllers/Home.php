<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['session']);
		$this->load->model('reservation_model', 'reservation');

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
			'data' => $this->reservation->getReservationHomeList($search),
			'title' => 'Administrator',
			'css' => $this->css,
			'js' => $this->js
		);

		$this->load->view('dashboard/construct/header', $data);
		$this->load->view('dashboard/home', $data);
		$this->load->view('dashboard/construct/footer', $data);
	}
}
