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

	public function dokter_add()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			// tangkap nilai dari post
			$data_dokter = array(

				'dr_kode' => $_POST['dr_kode'],
				'dr_nama' => $_POST['dr_nama'],
				'dr_nama_lengkap' => $_POST['dr_nama_lengkap'],
				'dr_gelar' => $_POST['dr_gelar'],
				'dr_tlp' => $_POST['dr_tlp'],
				'dr_alamat' => $_POST['dr_alamat'],
				'dr_email' => $_POST['dr_email']
			);

			// input data ke database
			$input_dokter = $this->M_master->insertDokter($data_dokter);

			// kondisi seletah response dari model
			if ($input_dokter) {
				
				$response = array ('status' => 'oke', 'message' => 'data dokter berhasil disimpan');

			}else{

				$response = array ('status' => 'false', 'message' => 'data dokter gagal disimpan, error query, please contact system administrator');

			}

		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}
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
