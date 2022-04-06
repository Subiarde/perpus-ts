<html>
<?php
class Usermodel extends CI_Model

{
    function __construct()
    {
        $this->load->database();
    }
    function get_user()
    {
        return $this->db->get('users')->result_array();
    }
    public function get_detail_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users')->row_array();
    }
    function insert($a, $profile)
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => md5($a['password']),
            'telepon' => $a['telepon'],
            'alamat' => $a['alamat'],
            'profile' => $profile
        ];
        return $this->db->insert('users', $data);
    }

    function update($a, $id, $profile = null)
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => $a['password'],
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon'],
            'profile' => $profile
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    function update_profile($a, $id)
    {
        $data = [
            'profile' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
    function delete($a)
    {
        $this->db->where('id', $a);
        return $this->db->delete('users');
    }
    function auth($email, $pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('users')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_detail($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('users')->row_array();
    }

    function get_detail_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('users')->row_array();
    }

    function update_cookie($cookie, $id)
    {
        $data = [
            'cookie' => $cookie
        ];
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
}
?>

</html>