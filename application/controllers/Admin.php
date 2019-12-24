<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user']['name'];
		$this->load->model('Admin_model');
		$data['product_index'] = $this->Admin_model->getAllProduct();

		$this->load->view('templates/admin_header', $data);
		$this->load->view('templates/admin_sidebar', $data);
		$this->load->view('templates/admin_topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/admin_footer');
	}

	public function tambah()
	{
		$data['title'] = 'Dashboard';
		$this->load->model('Admin_model');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('flash', 'gagal');
			echo "gagal slur";
		} else {
			$config['upload_path'] = base_url() . './assets/img/product/';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '3048';  //3MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $_FILES['image']['name'];
			$this->upload->initialize($config);
			if (!empty($_FILES['image']['name'])) {
				if ($this->upload->do_upload('image')) {
					$image = $this->upload->data();
					$this->Admin_model->tambahDataProduk($image);
				}
			}
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin');
		}
	}
}
