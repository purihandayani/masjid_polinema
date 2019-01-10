<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KeuanganModel extends CI_Model {

	// List all your items
	public function getAllAnggaran()
	{
		$this->db->select('*');
		$this->db->from('anggaran');
		$query = $this->db->get();
		return $query->result();
	}

	// Add a new item
	public function add()
	{
		$array = array(
			'nama_masjid'	=> $this->input->post('nama_masjid'),
			'jenis_kotak'	=> $this->input->post('jenis_kotak'),
			'bulan'	=> $this->input->post('waktu'),
			'donatur'			=> $this->input->post('donatur'),
			'pemasukan'		=> $this->input->post('pemasukan'),
			'pengeluaran'		=> $this->input->post('pengeluaran')
		);
		$this->db->insert('anggaran', $array);
	}

	//Update one item
	public function getSelectedAnggaran($id)
	{
		$this->db->where('id_anggaran', $id);
		$result = $this->db->get('anggaran');
		return $result->result();
	}

	//Delete one item
	public function delete($id)
	{
		$this->db->where('id_anggaran', $id);
		$this->db->delete('anggaran');
	}
	public function update($id){
		$array = array(
		    'nama_masjid'	=> $this->input->post('nama_masjid'),
			'jenis_kotak'	=> $this->input->post('jenis_kotak'),
			'bulan'	=> $this->input->post('waktu'),
			'donatur'			=> $this->input->post('donatur'),
			'pemasukan'		=> $this->input->post('pemasukan'),
			'pengeluaran'		=> $this->input->post('pengeluaran')
		);
		$this->db->where('id_anggaran', $id);
		$this->db->update('anggaran', $array);
	}
	public function hitungSaldo()
	{	
		$bagian = $this->db->select_sum('donatur','total_donatur');
		$bagian = $this->db->select_sum('pemasukan',' total_pemasukan');
		$bagian = $this->db->select_sum('pengeluaran','total_pengeluaran');
		$bagian = $this->db->get('anggaran');
		return $bagian->result();
 	}

}

/* End of file KeuanganModel.php */
/* Location: ./application/models/KeuanganModel.php */ ?>