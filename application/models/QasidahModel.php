<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QasidahModel extends CI_Model {

	// List all your items
	public function getAllQasidah()
	{
		$this->db->select('*');
		$this->db->from('qasidah');
		$query = $this->db->get();
		return $query->result();
	}

	// Add a new item
	public function add()
	{
		$array = array(
			'judul_qasidah'	=> $this->input->post('judul'),
			'audio_qasidah'	=> $this->input->post('audio'),
			'text_qasidah'			=> $this->input->post('teks')
		);
		$this->db->insert('qasidah', $array);
	}

	//Update one item
	public function getSelectedQasidah($id)
	{
		$this->db->where('id_qasidah', $id);
		$result = $this->db->get('qasidah');
		return $result->result();
	}

	//Delete one item
	public function delete($id)
	{
		$this->db->where('id_qasidah', $id);
		$this->db->delete('qasidah');
	}
	public function update($id){
		$array = array(
			'judul_qasidah'	=> $this->input->post('judul'),
			'audio_qasidah'	=> $this->input->post('audio'),
			'text_qasidah'			=> $this->input->post('teks')
		);
		$this->db->where('id_qasidah', $id);
		$this->db->update('qasidah', $array);
	}
}

/* End of file AgendaModel.php */
/* Location: ./application/models/AgendaModel.php */
 ?>