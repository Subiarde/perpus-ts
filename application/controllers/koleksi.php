<?php
defined('BASEPATH') or exit('No direct script access allowed');
class koleksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('Koleksimodel');
    }
    public function index()
    {
        $data['list'] = $this->Koleksimodel->get_koleksi_buku();

        $this->load->view('header');
        $this->load->view('koleksi/tampilankoleksi', $data);
        $this->load->view('footer');
    }
    public function detail($a = null)
    {
        $data['detail'] = $this->Koleksimodel->get_detail($a);
        $this->load->view('header');
        $this->load->view('koleksi/tampilandetail', $data);
        $this->load->view('footer');
    }
    public function add()
    {
        $this->load->view('header');
        $this->load->view('koleksi/addBuku');
        $this->load->view('footer');
    }
    public function insert()
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->Koleksimodel->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('koleksi'));
        }
    }

    public function edit($a)
    {
        $data['detail'] = $this->Koleksimodel->get_detail($a);
        $this->load->view('header');
        $this->load->view('koleksi/edit', $data);
        $this->load->view('footer');
    }

    public function update($id)
    {
        $cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
            $this->Koleksimodel->update_cover($cover, $id);
        }
        if ($this->Koleksimodel->update($this->input->post(), $id, $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('koleksi'));
        }
    }

    public function delete($a)
    {
        $this->Koleksimodel->delete($a);
        redirect('koleksi', 'refresh');
    }
}
