<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('text', 'url'));
        $this->load->model('Usermodel');
    }
    public function index()
    {
        $data['list'] = $this->Usermodel->get_user();

        $this->load->view('header');
        $this->load->view('user/tampilanuser', $data);
        $this->load->view('footer');
    }
    public function detail($a = null)
    {
        $data['detail'] = $this->Usermodel->get_detail_user($a);
        $this->load->view('header');
        $this->load->view('user/detailuser', $data);
        $this->load->view('footer');
    }
    public function add()
    {
        $this->load->view('header');
        $this->load->view('user/addUser');
        $this->load->view('footer');
    }
    public function insert()
    {
        $profile = $_FILES['profile']['name'];
        $config = [
            'upload_path' => "./assets/images/fotoprofile",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('profile');  
        if ($this->Usermodel->insert($this->input->post(), $profile)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('user'));
        }
    
    }
    public function register()
    {
        $profile = $_FILES['profile']['name'];
        $config = [
            'upload_path' => "./assets/images/fotoprofile",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('profile');  
        if ($this->Usermodel->insert($this->input->post(), $profile)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('Login'));
        }
    
    }
    public function edit($a)
    {
        $data['detail'] = $this->Usermodel->get_detail_user($a);
        $this->load->view('header');
        $this->load->view('user/edit', $data);
        $this->load->view('footer');
    }
    public function update($id)
    {
        $profile = $_FILES['profile']['name'];
        $config = [
            'upload_path' => "./assets/images/fotoprofile/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('profile')) {
            $this->Koleksimodel->update_profile($profile, $id);
        }
        if ($this->Usermodel->update($this->input->post(), $id, $profile)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('user'));
        }
    }
    public function delete($a)
    {
        $this->Usermodel->delete($a);
        redirect('user', 'refresh');
    }
}
