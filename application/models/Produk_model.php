<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// View All produk
	public function listing()
	{
		$this->db->select('WAKTU.*,
						HAK_AKSES.USERNAME,
						JENIS_WAKTU.LAMA_JENIS_WAKTU');
		$this->db->from('WAKTU');
		// Join
		$this->db->join('HAK_AKSES', 'HAK_AKSES.ID_USER = WAKTU.ID_USER', 'left');
		$this->db->join('JENIS_WAKTU', 'JENIS_WAKTU.ID_JENIS_WAKTU = WAKTU.ID_JENIS_WAKTU', 'left');
		// End Join
		$this->db->order_by('ID_WAKTU', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail All produk untuk edit
	public function detail($id_produk)
	{
		$this->db->select('*');
		$this->db->from('WAKTU');
		$this->db->where('ID_WAKTU', $id_produk);
		$this->db->order_by('ID_WAKTU', 'ASC');
		$query = $this->db->get();
		return $query->row();
	}

	// tambah data produk
	public function tambah($data)
	{
		$this->db->insert('WAKTU', $data);
	}

	// Edit data produk
	public function edit($data)
	{
		$this->db->where('ID_WAKTU', $data['ID_WAKTU']);
		$this->db->update('WAKTU',$data);
	}	

	// Delete data produk
	public function delete($data)
	{
		$this->db->where('ID_WAKTU', $data['ID_WAKTU']);
		$this->db->delete('WAKTU',$data);
	}	

}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */