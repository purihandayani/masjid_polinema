<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InventarisModel extends CI_Model {

	// List all your items
	public function getAllInventaris()
	{
		$this->db->select('*');
		$this->db->from('inventaris');
		$query = $this->db->get();
		return $query->result();
	}

	// Add a new item
	public function add()
	{
		$array = array(
			'nama_barang'			=> $this->input->post('nama'),
			'jumlah_barang'			=> $this->input->post('jumlah'),
			'kondisi_barang'		=> $this->input->post('kondisi'),
			'keterangan_barang'		=> $this->input->post('keterangan')
		);
		$this->db->insert('inventaris', $array);
	}

	//Update one item
	public function getSelectedInventaris($id)
	{
		$this->db->where('kd_barang', $id);
		$result = $this->db->get('inventaris');
		return $result->result();
	}

	//Delete one item
	public function delete($id)
	{
		$this->db->where('kd_barang', $id);
		$this->db->delete('inventaris');
	}
	public function update($id){
		$array = array(
			'nama_barang'			=> $this->input->post('nama'),
			'jumlah_barang'			=> $this->input->post('jumlah'),
			'kondisi_barang'		=> $this->input->post('kondisi'),
			'keterangan_barang'		=> $this->input->post('keterangan')
		);
		$this->db->where('kd_barang', $id);
		$this->db->update('inventaris', $array);
	}
}

/* End of file AgendaModel.php */
/* Location: ./application/models/AgendaModel.php */
 ?>