<?php
defined('BASEPATH') or exit('No direct script access allowed');

class about extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('tampilanabout');
        $this->load->view('footer');
    }
}
