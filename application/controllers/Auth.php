<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('pages/v_login');
	}

	public function signup()
	{
		$this->load->view('pages/v_signup');
	}

	public function act_login()
	{
		$this->load->model('m_users');

		$data_post 	= $this->input->post();
		$username 	= $data_post['username'];
		$password 	= $data_post['password'];

		$data_user 	= $this->m_users->getUserDataRow(array('username' => $username));

		if (password_verify($password, $data_user->password)) {
			// set session
			$sess_array = array(
				'sess_login'				=> '1',
				'sess_user_id' 				=> $data_user->id,
				'sess_user_name' 			=> $data_user->username
			);
			$this->session->set_userdata($sess_array);

			redirect('dashboard');
		}else{
			
			redirect('auth/login');
		}
	}

	public function act_logout()
	{
		// session destroy
		$this->session->sess_destroy();
		redirect('auth/login','refresh');
	}

	public function act_signup()
	{
		$this->load->model('m_users');

		$data_post 		= $this->input->post();
		$username 		= $data_post['username'];
		$name 			= $data_post['name'];
		$email 			= $data_post['email'];
		$password 		= $data_post['password'];

		if (!$this->m_users->isAvailableUsername($username)) {
			redirect('register');
		}

		$data_register 	= array(
			'username' 	=> $username,
			'name'		=> $name,
			'email'		=> $email,
			'password'	=> password_hash($password, PASSWORD_DEFAULT)
		);

		$register = $this->m_users->insert($data_register);

		if ($this->db->affected_rows() > 0) {
			redirect('auth/login');
		}else{
			redirect('auth/signup');
		}
	}
}