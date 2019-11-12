<?php 

/**
 * 
 */
class M_mhs extends CI_Model
{
	
	public function panggilmhs ()
	{
		$query = $this->db->get('tampil');
		return $query->result_array();
	}

	public function hapus_mhs ($id){
		return $this->db->delete('mahasiswa', array('id' =>$id));
	}

	public function riwayatmhs ()
	{
		$query = $this->db->get('history');
		return $query->result_array();
	}

	public function editambilmhs($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('mahasiswa');
			return $query->result_array();
		}

		public function tambahmhs()
		{
			$data = array(
				'nim' => $this->input->post('nim'),
				'nama_mahasiswa' => $this->input->post('nama'),
				'jk' => $this->input->post('jkl'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('nohp')
			);
			return $this->db->insert('mahasiswa',$data);	
		}

		public function ubahmhs()
		{
			$data = array(
				'nim' => $this->input->post('nim'),
				'nama_mahasiswa' => $this->input->post('nama'),
				'jk' => $this->input->post('jkl'),
				'alamat' => $this->input->post('alamat'),
				'no_hp' => $this->input->post('nohp')
			);
			$id_lama = $this->input->post('id');
			$this->db->where('id',$id_lama);
			return $this->db->update('mahasiswa',$data);	
		}


}

?>