<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontoffice extends CI_Controller {

	public function index()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'dash';

		$this->load->view('modules/front_office/index', $data);
	}
}