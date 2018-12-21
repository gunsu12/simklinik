<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

	public function index()
	{
		$data['page_tittle'] = 'Dashboard Billing';
		$data['page_val'] = 'dash';

		$this->load->view('modules/billing/index', $data);
	}
}
