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
}