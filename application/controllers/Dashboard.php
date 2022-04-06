<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
            // $this->load->library(array('form_validation', 'email', 'session'));
            // $this->load->helper(array('text', 'url', 'cookie', 'string'));
            // if ($this->session->userdata('nama') == '') {
            //     redirect(base_url('Login'));
            // }
    }
    public function index()
    {
        $data['nama'] = ' Subiarde';
        $data['alamat'] = ' Jakarta Raya';
        $data['email'] = ' biann12@gmail.com';
        $data['hobi'] = [' Bermusik', 'Traveling', 'Ketawa'];
        $this->load->view('header');
        $this->load->view('tampilandashboard', $data);
        $this->load->view('footer');
    }
}
