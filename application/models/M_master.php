<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {

	public function insertDokter($data_dokter)
	{
		if ($this->db->insert('t_dokter', $data_dokter)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function insertJaminan($data_jaminan)
	{
		if ($this->db->insert('t_jaminan', $data_jaminan)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function insertLayanan($data_layanan)
	{
		if ($this->db->insert('t_layanan', $data_layanan)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function insertAdmin($data_admin)
	{
		if ($this->db->insert('t_administrasi', $data_admin)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function insertJadwal($data_jadwal)
	{
		if ($this->db->insert('t_m_dokter_jadwal', $data_jadwal)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function insertDokterMappingLayanan($data_dokter)
	{
		if ($this->db->insert('t_trs_dokter_layanan', $data_jadwal)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function updateJadwal($data_jadwal, $jadwal_id)
	{
		if ($this->db->where('jadwal_id', $jadwal_id)->update('t_m_dokter_jadwal', $data_jadwal)) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function getDataDokter($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_dokter');

		if (array_key_exists('dr_kode', $pharam)) {

			$this->db->where('dr_kode', $pharam['dr_kode']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else if(array_key_exists('dr_id', $pharam)){

			$this->db->where('dr_id', $pharam['dr_id']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else{

			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
            
		}

		return $result;
	}

	public function getDataJaminan($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_jaminan');

		if (array_key_exists('jaminan_kode', $pharam)) {

			$this->db->where('jaminan_kode', $pharam['jaminan_kode']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else if(array_key_exists('jaminan_id', $pharam)){

			$this->db->where('jaminan_id', $pharam['jaminan_id']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else{

			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
            
		}

		return $result;
	}

	public function getDataLayanan($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_layanan');

		if (array_key_exists('layanan_kode', $pharam)) {

			$this->db->where('layanan_kode', $pharam['layanan_kode']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else if(array_key_exists('layanan_id', $pharam)){

			$this->db->where('layanan_id', $pharam['layanan_id']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else{

			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
            
		}

		return $result;
	}

	public function getDataAdmin($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_administrasi');

		if (array_key_exists('admin_kode', $pharam)) {

			$this->db->where('admin_kode', $pharam['admin_kode']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else if(array_key_exists('admin_id', $pharam)){

			$this->db->where('admin_id', $pharam['admin_id']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else{

			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
            
		}

		return $result;
	}

	public function getDataJadwal($pharam = array())
	{
		$this->db->select('*');
		$this->db->from('t_m_dokter_jadwal');

		if (array_key_exists('dr_id', $pharam)) {
			if ($pharam['dr_id'] != '') {
				$this->db->where('dr_id', $pharam['dr_id']);
			}
		}

		if (array_key_exists('layanan_id', $pharam)) {
			if ($pharam['layanan_id'] != '') {
				$this->db->where('layanan_id', $pharam['layanan_id']);
			}
		}

		if (array_key_exists('jadwal_deletedDate', $pharam)) {
			$this->db->where('jadwal_deletedDate IS NULL');
		}
		
		if (array_key_exists('jadwal_id', $pharam)) {

			$this->db->where('jadwal_id', $pharam['jadwal_id']);
			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->row():FALSE;

		}else{

			$query = $this->db->get();
            $result = ($query->num_rows() > 0)?$query->result():FALSE;
            
		}

		return $result;
	}
}