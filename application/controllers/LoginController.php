<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Login Aplikasi POS';
		$this->load->view('login/v_login', $data);
	}

}

/* End of file LoginController.php */
/* Location: ./application/controllers/LoginController.php */