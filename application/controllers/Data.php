<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function data_latih()
	{
		$data['content'] 		= 'pages/v_data_latih';
		$data['menu']			= 'dashboard';
		$this->load->view('layouts/v_layout', $data);
	}

	public function data_uji($value='')
	{
		$data['content'] 		= 'pages/v_data_uji';
		$data['menu']			= 'dashboard';
		$this->load->view('layouts/v_layout', $data);
	}

	public function hasil_uji()
	{
		$data['content'] 		= 'pages/v_hasil_uji';
		$data['menu']			= 'dashboard';
		$this->load->view('layouts/v_layout', $data);
	}

	public function chart()
	{
		$data['content'] 		= 'pages/v_chart';
		$data['menu']			= 'dashboard';
		$this->load->view('layouts/v_layout', $data);
	}
}
