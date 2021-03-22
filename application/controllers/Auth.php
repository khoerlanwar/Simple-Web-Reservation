<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->helper(['form', 'url']);
		$this->load->library(['form_validation', 'encryption']);
		$this->load->model('auth_model', 'auth');

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


	}

	public function idxAuth()
	{
		$data = array(
			'css' => $this->css,
			'js' => $this->js,
		);

		$this->load->view('auth/authorization', $data);
	}

	public function postAuth()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$remember = true;

			$validates = $this->auth->validateAuth($username);

			if (!is_null($validates)) {
				if ($validates->usrPassword == $password) {

					$this->_sessionRegister($validates->usrId);
				} else {
					$this->session->set_flashdata('warning', 'Your password is wrong, plase try again.');
					redirect('/', 'refresh');
				}
			} else {
				$this->session->set_flashdata('warning', 'Your username is wrong, plase try again.');
				redirect('/', 'refresh');
			}
		} else {
			$this->session->set_flashdata('warning', 'Your username is wrong, plase try again.');
			redirect('/', 'refresh');
		}

	}

	public function _sessionRegister($id)
	{
		$result = array();
		$local = $this->auth->getLocal($id);

		$result['status'] = true;
		$result['id'] = (int)$local->usrId;
		$result['name'] = $local->usrFullname;
		$result['type'] = $local->usrType;

		$this->session->set_userdata($result);

		if ($local->usrType == '1') {
			redirect('/home', 'refresh');
		} else {
			redirect('/home', 'refresh');
		}
	}

	public function getLogout()
	{
		$this->session->sess_destroy();

		$this->session->set_flashdata('success', 'You have been logout.');
		redirect('/', 'refresh');
	}
}