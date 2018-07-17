<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model extends CI_Model {

	public function view()
	{
		$this->db->select("No, Nama, Jpekerjaan, Nip, Date_FORMAT(Tanggal, '%d-%m-%Y') as Tanggal, Alamat, foto");
		$query = $this->db->get('pekerja');
		return $query->result();
	}

	public function view_row()
	{
		$this->db->select("No, Nama,Jpekerjaan, Nip, Date_FORMAT(Tanggal, '%d-%m-%Y') as Tanggal, Alamat, foto");
		$query = $this->db->get('pekerja');
		return $query->result();
	}

}

/* End of file cetak_model.php */
/* Location: ./application/models/cetak_model.php */