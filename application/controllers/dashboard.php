<?php

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->load->model('M_mahasiswa');
		$this->auth->cek_login();
	}

	public function index()
	{
		$data['chart_data'] = $this->M_mahasiswa->get_chart_data();
		$data['sum_harga'] = $this->M_mahasiswa->get_sum_harga();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template_administrator/footer');
	}
}
