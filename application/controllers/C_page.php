<?php 

class C_page extends CI_Controller
{
	
	public function index ()
	{
		$data['mhs'] = $this->M_mhs->panggilmhs();
		$this->load->view('v_mhs', $data);
	}

	public function riwayat ()
	{
		$data['mhs'] = $this->M_mhs->riwayatmhs();
		$this->load->view('v_riwayat_mhs', $data);
	}

	public function tambahmhs()
	{
		$this->load->view('v_mhs_tambah');
	}

	public function editmhs($id)
	{
		$data['mhs'] = $this->M_mhs->editambilmhs($id);
		$this->load->view('v_edit_mhs', $data);
	}
}
