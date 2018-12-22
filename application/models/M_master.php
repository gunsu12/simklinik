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
}