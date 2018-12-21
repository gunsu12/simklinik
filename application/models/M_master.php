<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Controller {

	public function insertDokter($data_dokter)
	{
		if ($this->db->insert('t_dokter', $data_dokter)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
}