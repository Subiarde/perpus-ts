<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('Usermodel');
    }

    public function index()
    {
        $cookie = get_cookie('tigaserangkai');
        if ($this->session->userdata('nama') != '') {
            redirect(base_url('Dashboard'));
        } else if ($cookie != '') {
            $sesi = $this->Usermodel->get_detail_by_cookie($cookie);
            $this->session->set_userdata($sesi);
            redirect('Dashboard');
        }
        // $this->load->view('form_login/header');
        $this->load->view('loginView');
        $this->load->view('footer');
    }

    public function auth()
    {
        
        $email = $this->input->post('email');
        $pwd = $this->input->post('password');
        $auth = $this->Usermodel->auth($email, $pwd);
        if ($auth == TRUE) {
            $sesi = $this->Usermodel->get_detail($email);
            if ($this->input->post('remember-me') != '') {
                $key = random_string('alnum', 64);
                set_cookie('tigaserangkai', $key, 3600 * 24 * 30);
                $this->Usermodel->update_cookie($key, $sesi['id']);
            }
            $this->session->set_userdata($sesi);
            redirect('Dashboard');
        } else {
            $this->session->set_flashdata('pesan', 'Username atau password salah !');
            $sesi = array('flag' => '1');
            $this->session->set_userdata($sesi);
            redirect('Login');
        }
    }

    public function register()
    {
        $this->load->view('register');
        $this->load->view('footer');
    }

    public function logout()
    {
        delete_cookie('tigaserangkai');
        $this->session->sess_destroy();
        redirect('Login');
    }
}