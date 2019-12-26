<?php

/**
 * 
 */
class Keranjang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index(){
		$data['title']='Keranjang';
		$this->load->view('templates/detail_header',$data);
		$this->load->view('keranjang/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambahKeKeranjang(){
		$data_product=array('id'=>$this->input->post('id'),
			'nama' => $this->input->post('nama'),
			'harga'=> $this->input->post('harga'),
			'gambar'=>$this->input->post('gambar')
		);

		$this->cart->insert($data_product);
		$this->session->set_flashdata('flash','ditambahkan');
		redirect('home');
	}
}



?>