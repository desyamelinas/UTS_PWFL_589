<?php 

class C_page extends CI_Controller
{

	public function index ()
	{
		$data = array(
			"title"	=> "Dashboard",
			"home"	=> "class='nav-item active'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item'", 
			);
		// $data['mhs'] = $this->M_mhs->panggilmhs();
		$this->load->view('template/v_header',$data);
		$this->load->view('v_dashboard', $data);
		$this->load->view('template/v_footer');
	}	
	public function mhs ()
	{
		$data = array(
			"title"	=> "Dashboard",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item active'",
			"vlog"	=> "class='nav-item'", 
			);
		$data['mhs'] = $this->M_mhs->panggilmhs();
		$this->load->view('template/v_header',$data);
		$this->load->view('v_mhs', $data);
		$this->load->view('template/v_footer');
	}

	public function riwayat ()
	{
		$data = array(
			"title"	=> "Dashboard",
			"home"	=> "class='nav-item'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item active'", 
			);
		$data['mhs'] = $this->M_mhs->riwayatmhs();
		$this->load->view('template/v_header',$data);
		$this->load->view('v_riwayat_mhs', $data);
		$this->load->view('template/v_footer');
	}

	public function tambahmhs()
	{
		$data = array(
			"title"	=> "Dashboard",
			"home"	=> "class='nav-item active'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item'", 
			);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_mhs_tambah');
		$this->load->view('template/v_footer');
	}

	public function editmhs($id)
	{
		$data = array(
			"title"	=> "Dashboard",
			"home"	=> "class='nav-item active'",
			"vmhs"	=> "class='nav-item'",
			"vlog"	=> "class='nav-item'", 
			);
		$data['mhs'] = $this->M_mhs->editambilmhs($id);
		$this->load->view('template/v_header',$data);
		$this->load->view('v_edit_mhs', $data);
		$this->load->view('template/v_footer');
	}
}
