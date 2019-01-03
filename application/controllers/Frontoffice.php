<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontoffice extends CI_Controller {

	public function __construct() {
	    
	    parent::__construct();
	    $this->load->model('M_master');
		
		 // if ($this->session->userdata('user_name') == "") {
	  //   	redirect('');
	  //   }
	}

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

		$data['layanans'] = $this->M_master->getDataLayanan(array('deletedDate' => '', 'status' => 'aktif'));

		$this->load->view('modules/front_office/v_dokter', $data);
	}

	public function dokter_validasi_kode($dr_kode)
	{
		$data_dokter = $this->M_master->getDataDokter(array('dr_kode' => $dr_kode));

		if ($data_dokter != FALSE) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function dokter_list()
	{
		$data['dokters'] = $this->M_master->getDataDokter(array());
		$data['layanans'] = $this->M_master->getDataLayanan(array());

		$this->load->view('modules/front_office/v_dokter_tables', $data);
	}

	public function dokter_list_tunggal()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_dokter = $this->M_master->getDataDokter(array('dr_kode' => $_POST['dr_kode']));

			if ($data_dokter != FALSE) {
				$response = array(
					'dr_id' => $data_dokter->dr_id,
					'dr_kode' => $data_dokter->dr_kode,
					'dr_nama' => $data_dokter->dr_nama,
					'dr_nama_lengkap' => $data_dokter->dr_nama_lengkap,
					'dr_gelar' => $data_dokter->dr_gelar,
					'dr_tlp' => $data_dokter->dr_tlp,
					'dr_alamat' => $data_dokter->dr_alamat,
					'dr_email' => $data_dokter->dr_email,
					'dr_status' => $data_dokter->dr_status,
					'status' => 'true',
					'message' => 'oke'
				);
			}else{
				$response = array('status' => 'false', 'message' => 'dokter kode not match any data');
			}
		}else{
			$response = array('status' => 'false', 'message' => 'nothing to do here..');
		}

		echo json_encode($response);
	}

	public function dokter_add()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$dokter_validasi_kode = $this->dokter_validasi_kode($_POST['dr_kode']);

			if ($dokter_validasi_kode == TRUE) {

				$response = array('status' => 'false', 'message' => 'kode dokter sudah digunakan');
			
			}else{
				//print_r($_POST);
				// tangkap nilai dari post
				$data_dokter = array(

					'dr_kode' => $_POST['dr_kode'],
					'dr_nama' => $_POST['dr_nama'],
					'dr_nama_lengkap' => $_POST['dr_nama_lengkap'],
					'dr_gelar' => $_POST['dr_gelar'],
					'dr_tlp' => $_POST['dr_tlp'],
					'dr_alamat' => $_POST['dr_alamat'],
					'dr_email' => $_POST['dr_email'],
					'dr_status' => 'aktif',
					'dr_insertedDate' => date('y-m-d')
				);

				// input data ke database
				$input_dokter = $this->M_master->insertDokter($data_dokter);

				// kondisi seletah response dari model
				if ($input_dokter == TRUE) {
					
					$response = array ('status' => 'true', 'message' => 'data dokter berhasil disimpan');

				}else{

					$response = array ('status' => 'false', 'message' => 'data dokter gagal disimpan, error query, please contact system administrator');

				}
			}
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function dokter_add_mapping_layanan()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_mapping = array(

				'layanan_id' => $_POST['layanan_id'],
				'dr_kode' => $_POST['dr_kode'],
			);

			// input data ke database
			$data_mapping = $this->M_master->insertDokterMappingLayanan($data_mapping);

			// kondisi seletah response dari model
			if ($data_mapping == TRUE) {
				
				$response = array ('status' => 'true', 'message' => 'mapping dokter berhasil disimpan');

			}else{

				$response = array ('status' => 'false', 'message' => 'mapping dokter gagal disimpan, error query, please contact system administrator');

			}
			
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function layanan()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'fo';
		$data['page_tree'] = 'master';

		$this->load->view('modules/front_office/v_layanan', $data);
	}

	public function layanan_list()
	{
		$data['layanans'] = $this->M_master->getDataLayanan(array('deletedDate' => ''));

		$this->load->view('modules/front_office/v_layanan_tables', $data);
	}

	public function layanan_AjaxFind()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_layanan = $this->M_master->getDataLayanan(array('layanan_id' => $_POST['layanan_id']));

			if ($data_layanan != FALSE) {
				$response = array(
					'layanan_id' => $data_layanan->layanan_id,
					'layanan_kode' => $data_layanan->layanan_kode,
					'layanan_nama' => $data_layanan->layanan_nama,
					'layanan_status' => $data_layanan->layanan_status,
					'status' => 'true',
					'message' => 'oke'
				);
			}else{
				$response = array('status' => 'false', 'message' => 'dokter kode not match any data');
			}
		}else{
			$response = array('status' => 'false', 'message' => 'nothing to do here..');
		}

		echo json_encode($response);
	}

	public function layanan_validasi_kode($l_kode)
	{
		$data = $this->M_master->getDataLayanan(array('layanan_kode' => $l_kode));

		if ($data != FALSE) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function layanan_add()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$layanan_validasi_kode = $this->layanan_validasi_kode($_POST['l_kode']);

			if ($layanan_validasi_kode == TRUE) {

				$response = array('status' => 'false', 'message' => 'kode dokter sudah digunakan');
			
			}else{
				//print_r($_POST);
				// tangkap nilai dari post
				$data_layanan = array(
					'layanan_kode' => $_POST['l_kode'],
					'layanan_nama' => $_POST['l_nama'],
					'layanan_status' => $_POST['l_status'],
					'layanan_insertedDate' => date('y-m-d')
				);

				// input data ke database
				$input_layanan = $this->M_master->insertLayanan($data_layanan);

				// kondisi seletah response dari model
				if ($input_layanan == TRUE) {
					$response = array ('status' => 'true', 'message' => 'data layanan berhasil disimpan');
				}else{
					$response = array ('status' => 'false', 'message' => 'data layanan gagal disimpan, error query, please contact system administrator');
				}
			}
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function layanan_update()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_layanan = array(
				'layanan_kode' => $_POST['l_kode'],
				'layanan_nama' => $_POST['l_nama'],
				'layanan_status' => $_POST['l_status'],
				'layanan_updatedDate' => date('y-m-d')
			);

			// input data ke database
			$update_layanan = $this->M_master->updateLayanan($data_layanan, $_POST['layanan_id']);

			// kondisi seletah response dari model
			if ($update_layanan == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data layanan berhasil disimpan');
			}else{
				$response = array ('status' => 'false', 'message' => 'data layanan gagal disimpan, error query, please contact system administrator');
			}
			
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function layanan_delete()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_layanan = array(
				'layanan_deletedDate' => date('y-m-d')
			);

			// input data ke database
			$input_layanan = $this->M_master->updateLayanan($data_layanan, $_POST['layanan_id']);

			// kondisi seletah response dari model
			if ($input_layanan == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data layanan berhasil dihapus');
			}else{
				$response = array ('status' => 'false', 'message' => 'data layanan gagal dihapus, error query, please contact system administrator');
			}
			
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);	
	}

	public function jaminan()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'fo';
		$data['page_tree'] = 'master';

		$this->load->view('modules/front_office/v_jaminan', $data);
	}

	public function jaminan_list()
	{
		$data['jaminans'] = $this->M_master->getDataJaminan(array('deletedDate' => ''));

		$this->load->view('modules/front_office/v_jaminan_tables', $data);
	}

	public function jaminan_ajaxFind()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_jaminan = $this->M_master->getDataJaminan(array('jaminan_kode' => $_POST['jaminan_kode']));

			if ($data_jaminan != FALSE) {
				$response = array(
					'jaminan_id' => $data_jaminan->jaminan_id,
					'jaminan_kode' => $data_jaminan->jaminan_kode,
					'jaminan_nama' => $data_jaminan->jaminan_nama,
					'jaminan_status' => $data_jaminan->jaminan_status,
					'jaminan_potongan_tindakan' => $data_jaminan->jaminan_potongan_tindakan,
					'jaminan_potongan_obat' => $data_jaminan->jaminan_potongan_obat,
					'status' => 'true',
					'message' => 'oke'
				);
			}else{
				$response = array('status' => 'false', 'message' => 'dokter kode not match any data');
			}
		}else{
			$response = array('status' => 'false', 'message' => 'nothing to do here..');
		}

		echo json_encode($response);
	}

	public function jaminan_validasi_kode($j_kode)
	{
		$data = $this->M_master->getDataJaminan(array('jaminan_kode' => $j_kode));

		if ($data != FALSE) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function jaminan_add()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$jaminan_validasi_kode = $this->jaminan_validasi_kode($_POST['j_kode']);

			if ($jaminan_validasi_kode == TRUE) {

				$response = array('status' => 'false', 'message' => 'kode dokter sudah digunakan');
			
			}else{
				//print_r($_POST);
				// tangkap nilai dari post
				$data_jaminan = array(
					'jaminan_kode' => $_POST['j_kode'],
					'jaminan_nama' => $_POST['j_nama'],
					'jaminan_status' => $_POST['j_status'],
					'jaminan_potongan_tindakan' => $_POST['j_pt_tind'],
					'jaminan_potongan_obat' => $_POST['j_pt_obat'],
					'jaminan_insertedDate' => date('y-m-d')
				);

				// input data ke database
				$input_jaminan = $this->M_master->insertJaminan($data_jaminan);

				// kondisi seletah response dari model
				if ($input_jaminan == TRUE) {
					$response = array ('status' => 'true', 'message' => 'data jaminan berhasil disimpan');
				}else{
					$response = array ('status' => 'false', 'message' => 'data jaminan gagal disimpan, error query, please contact system administrator');
				}
			}
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function jaminan_update()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_jaminan = array(
				'jaminan_kode' => $_POST['j_kode'],
				'jaminan_nama' => $_POST['j_nama'],
				'jaminan_status' => $_POST['j_status'],
				'jaminan_potongan_tindakan' => $_POST['j_pt_tind'],
				'jaminan_potongan_obat' => $_POST['j_pt_obat'],
				'jaminan_updatedDate' => date('y-m-d')
			);

			// input data ke database
			$input_jaminan = $this->M_master->updateJaminan($data_jaminan, $_POST['jaminan_id']);

			// kondisi seletah response dari model
			if ($input_jaminan == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data jaminan berhasil diubah');
			}else{
				$response = array ('status' => 'false', 'message' => 'data jaminan gagal diubah, error query, please contact system administrator');
			}
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function jaminan_delete()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_jaminan = array(
				'jaminan_deletedDate' => date('y-m-d')
			);

			// input data ke database
			$input_jaminan = $this->M_master->updateJaminan($data_jaminan, $_POST['jaminan_id']);

			// kondisi seletah response dari model
			if ($input_jaminan == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data jaminan berhasil dihapus');
			}else{
				$response = array ('status' => 'false', 'message' => 'data jaminan gagal dihapus, error query, please contact system administrator');
			}
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function admin()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'fo';
		$data['page_tree'] = 'master';

		$this->load->view('modules/front_office/v_admin', $data);
	}

	public function admin_AjaxFind()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_admin = $this->M_master->getDataAdmin(array('admin_id' => $_POST['admin_id']));

			if ($data_admin != FALSE) {
				$response = array(
					'admin_id' => $data_admin->admin_id,
					'admin_kode' => $data_admin->admin_kode,
					'admin_nama' => $data_admin->admin_nama,
					'admin_status' => $data_admin->admin_status,
					'admin_biaya' => $data_admin->admin_biaya,
					'status' => 'true',
					'message' => 'oke'
				);
			}else{
				$response = array('status' => 'false', 'message' => 'dokter kode not match any data');
			}
		}else{
			$response = array('status' => 'false', 'message' => 'nothing to do here..');
		}

		echo json_encode($response);
	}

	public function admin_list()
	{
		$data['admins'] = $this->M_master->getDataAdmin(array('deletedDate' => ''));

		$this->load->view('modules/front_office/v_admin_tables', $data);
	}

	public function admin_validasi_kode($a_kode)
	{
		$data = $this->M_master->getDataAdmin(array('admin_kode' => $a_kode));

		if ($data != FALSE) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function admin_add()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$admin_validasi_kode = $this->admin_validasi_kode($_POST['a_kode']);

			if ($admin_validasi_kode == TRUE) {

				$response = array('status' => 'false', 'message' => 'kode dokter sudah digunakan');
			
			}else{

				// tangkap nilai dari post
				$data_admin = array(
					'admin_kode' => $_POST['a_kode'],
					'admin_nama' => $_POST['a_nama'],
					'admin_status' => $_POST['a_status'],
					'admin_biaya' => $_POST['a_biaya'],
					'admin_insertedDate' => date('y-m-d')
				);

				// input data ke database
				$input_admin = $this->M_master->insertAdmin($data_admin);

				// kondisi seletah response dari model
				if ($input_admin == TRUE) {
					$response = array ('status' => 'true', 'message' => 'data administrasi berhasil disimpan');
				}else{
					$response = array ('status' => 'false', 'message' => 'data administrasi gagal disimpan, error query, please contact system administrator');
				}
			}
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function admin_update()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			// tangkap nilai dari post
			$data_admin = array(
				'admin_kode' => $_POST['a_kode'],
				'admin_nama' => $_POST['a_nama'],
				'admin_status' => $_POST['a_status'],
				'admin_biaya' => $_POST['a_biaya'],
				'admin_updatedDate' => date('y-m-d')
			);

			// input data ke database
			$input_admin = $this->M_master->updateAdmin($data_admin, $_POST['admin_id']);

			// kondisi seletah response dari model
			if ($input_admin == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data administrasi berhasil disimpan');
			}else{
				$response = array ('status' => 'false', 'message' => 'data administrasi gagal disimpan, error query, please contact system administrator');
			}
			
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function admin_delete()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
		
			// tangkap nilai dari post
			$data_admin = array(
				'admin_deletedDate' => date('y-m-d')
			);

			// input data ke database
			$input_admin = $this->M_master->updateAdmin($data_admin, $_POST['admin_id']);

			// kondisi seletah response dari model
			if ($input_admin == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data administrasi berhasil disimpan');
			}else{
				$response = array ('status' => 'false', 'message' => 'data administrasi gagal disimpan, error query, please contact system administrator');
			}
			
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function jadwal()
	{
		$data['page_tittle'] = 'Dashboard Front Office';
		$data['page_val'] = 'fo';
		$data['page_tree'] = 'master';

		$data['layanans'] = $this->M_master->getDataLayanan(array());
		$data['dokters'] = $this->M_master->getDataDokter(array());

		$this->load->view('modules/front_office/v_jadwaldokter', $data);
	}

	public function jadwal_list()
	{
		if (isset($_POST)) {

			$data['jadwals'] = $this->M_master->getDataJadwal(array('dr_id' => $_POST['dr_id'], 'layanan_id' => $_POST['layanan_id'], 'jadwal_deletedDate' => ''));
			$data['dokter'] = $this->M_master->getDataDokter(array('dr_id' => $_POST['dr_id']));
			//print_r($data['jadwals']);

			$this->load->view('modules/front_office/v_jadwaldokter_tables', $data);

		}else{

			echo "nothing to do here..";
		}
	}

	public function jadwal_AjaxFind()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_jadwal = $this->M_master->getDataJadwal(array('jadwal_id' => $_POST['jadwal_id']));

			if ($data_jadwal != FALSE) {
				$response = array(
					'dr_id' => $data_jadwal->dr_id,
					'layanan_id' => $data_jadwal->layanan_id,
					'jadwal_hari' => $data_jadwal->jadwal_hari,
					'jadwal_jam_open' => date('H:i', strtotime($data_jadwal->jadwal_jam_open)),
					'jadwal_jam_close' => date('H:i', strtotime($data_jadwal->jadwal_jam_close)),
					'jadwal_max_px' => $data_jadwal->jadwal_max_px,
					'jadwal_waktu_per_px' => $data_jadwal->jadwal_waktu_per_px,
					'status' => 'true',
					'message' => 'oke'
				);
			}else{
				$response = array('status' => 'false', 'message' => 'dokter kode not match any data');
			}
		}else{
			$response = array('status' => 'false', 'message' => 'nothing to do here..');
		}

		echo json_encode($response);
	}

	public function jadwal_add()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			// tangkap nilai dari post
			$data_jadwal = array(
				'dr_id' => $_POST['dr_id'],
				'layanan_id' => $_POST['layanan_id'],
				'jadwal_hari' => $_POST['jadwal_hari'],
				'jadwal_jam_open' => $_POST['jadwal_jam_open'],
				'jadwal_jam_close' => $_POST['jadwal_jam_close'],
				'jadwal_jam_close' => $_POST['jadwal_jam_close'],
				'jadwal_max_px' => $_POST['jadwal_max_px'],
				'jadwal_waktu_per_px' => $_POST['jadwal_waktu_per_px'],
				'jadwal_insertedDate' => date('y-m-d')
			);

			// input data ke database
			$input_jadwal = $this->M_master->insertJadwal($data_jadwal);

			// kondisi seletah response dari model
			if ($input_jadwal == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data jadwal dokter berhasil disimpan');
			}else{
				$response = array ('status' => 'false', 'message' => 'data jadwal dokter gagal disimpan, error query, please contact system administrator');
			}
			
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function jadwal_update()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			// tangkap nilai dari post
			$data_jadwal = array(
				'jadwal_hari' => $_POST['jadwal_hari'],
				'jadwal_jam_open' => $_POST['jadwal_jam_open'],
				'jadwal_jam_close' => $_POST['jadwal_jam_close'],
				'jadwal_jam_close' => $_POST['jadwal_jam_close'],
				'jadwal_max_px' => $_POST['jadwal_max_px'],
				'jadwal_waktu_per_px' => $_POST['jadwal_waktu_per_px'],
				'jadwal_updatedDate' => date('y-m-d')
			);

			// input data ke database
			$input_jadwal = $this->M_master->updateJadwal($data_jadwal, $_POST['jadwal_id']);

			// kondisi seletah response dari model
			if ($input_jadwal == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data jadwal dokter berhasil diubah');
			}else{
				$response = array ('status' => 'false', 'message' => 'data jadwal dokter gagal diubah, error query, please contact system administrator');
			}
			
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}

	public function jadwal_delete()
	{
		$response = array('status' => '', 'message' => '');

		if (isset($_POST)) {
			
			$data_jadwal = array(
				'jadwal_deletedDate' => date('y-m-d')
			);

			// input data ke database
			$input_jadwal = $this->M_master->updateJadwal($data_jadwal, $_POST['jadwal_id']);

			// kondisi seletah response dari model
			if ($input_jadwal == TRUE) {
				$response = array ('status' => 'true', 'message' => 'data jadwal dokter berhasil dihapus');
			}else{
				$response = array ('status' => 'false', 'message' => 'data jadwal dokter gagal dihapus, error query, please contact system administrator');
			}
			
		}else{
			$response = array ('status' => 'false', 'message' => 'nothing to do here .. ');
		}

		echo json_encode($response);
	}
	public function registrasi()
	{
		$data['page_tittle'] = 'Pendaftaran Front Office';
		$data['page_val'] = 'fo';
		$data['page_tree'] = 'registrasi';

		$this->load->view('modules/front_office/v_registrasi', $data);
	}
	public function booking()
	{
		$data['page_tittle'] = 'Pendaftaran Front Office';
		$data['page_val'] = 'fo';
		$data['page_tree'] = 'booking';

		$this->load->view('modules/front_office/v_booking', $data);
	}
}
