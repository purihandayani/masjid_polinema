<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgendaModel extends CI_Model {

	// List all your items
	public function getAllAgenda()
	{
		$this->db->select('*');
		$this->db->from('agenda');
		$query = $this->db->get();
		return $query->result();
	}

	// Add a new item
	public function add()
	{
		$array = array(
			'nama_agenda'	=> $this->input->post('nama_agenda'),
			'jenis_agenda'	=> $this->input->post('jenis_agenda'),
			'waktu'			=> $this->input->post('waktu'),
			'pelaksana'		=> $this->input->post('pelaksana')
		);
		$this->db->insert('agenda', $array);
	}

	//Update one item
	public function getSelectedAgenda($id)
	{
		$this->db->where('id_agenda', $id);
		$result = $this->db->get('agenda');
		return $result->result();
	}

	//Delete one item
	public function delete($id)
	{
		$this->db->where('id_agenda', $id);
		$this->db->delete('agenda');
	}
	public function update($id){
		$array = array(
			'nama_agenda'	=> $this->input->post('nama_agenda'),
			'jenis_agenda'	=> $this->input->post('jenis_agenda'),
			'waktu'			=> $this->input->post('waktu'),
			'pelaksana'		=> $this->input->post('pelaksana')
		);
		$this->db->where('id_agenda', $id);
		$this->db->update('agenda', $array);
	}
}

/* End of file AgendaModel.php */
/* Location: ./application/models/AgendaModel.php */
 ?>