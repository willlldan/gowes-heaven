<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user']['name'];

		$this->load->view('templates/user_header', $data);
		$this->load->view('templates/user_sidebar', $data);
		$this->load->view('templates/user_topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/user_footer');
	}
}
