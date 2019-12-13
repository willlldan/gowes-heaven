<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Gowes Heaven";
        $this->load->view('templates/header', $data);
        $this->load->view('Home/index');
        $this->load->view('templates/footer');
    }
}
