<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mhs extends CI_Controller
{
	
	public function tambahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');

		if (!$this->form_validation->run()==false) {
			$this->M_mhs->tambahmhs();
			redirect ('C_page/');
		}else {
			redirect('C_page/tambahmhs');
		}
	}

	public function ubahmhs()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');

		if (!$this->form_validation->run()==false) {
			$this->M_mhs->ubahmhs();
			redirect ('c_page/');
		}else {
			redirect('c_page/editmhs');
		}
	}

	public function hapusmhs ($id)
	{
		if ($id != "") {
			$this->M_mhs->hapus_mhs($id);
			redirect('c_page');
		}else{
			redirect('c_page');
		}
	}
}

