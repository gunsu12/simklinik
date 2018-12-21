<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmachy extends CI_Controller {

	public function index()
	{
		$data['page_tittle'] = 'Dashboard Pharmachy';
		$data['page_val'] = 'dash';

		$this->load->view('modules/pharmachy/index', $data);
	}
}
