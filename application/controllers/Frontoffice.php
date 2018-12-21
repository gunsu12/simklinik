<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontoffice extends CI_Controller {

	public function index()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'dash';
		$data['page_tree'] = 'dash';

		$this->load->view('modules/front_office/index', $data);
	}

	public function dokter()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'fo';
		$data['page_tree'] = 'master';

		$this->load->view('modules/front_office/v_dokter', $data);
	}

	public function layanan()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'dash';

		$this->load->view('modules/front_office/v_layanan', $data);
	}

	public function jaminan()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'dash';

		$this->load->view('modules/front_office/v_jaminan', $data);
	}

	public function admin()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'dash';

		$this->load->view('modules/front_office/v_admin', $data);
	}

	public function jadwal()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'dash';

		$this->load->view('modules/front_office/v_jadwaldokter', $data);
	}
}
