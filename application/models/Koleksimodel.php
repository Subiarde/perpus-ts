<html>
<?php
class Koleksimodel extends CI_Model

{
    function __construct()
    {
        $this->load->database();
    }
    function get_koleksi_buku()
    {
        return $this->db->get('koleksi_buku')->result_array();
    }
    function get_detail($a)
    {
        $this->db->where('id', $a);
        return $this->db->get('koleksi_buku')->row_array();
    }
    function insert($a, $cover)
    {
        $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'sinopsis' => $a['sinopsis'],
            'cover' => $cover
        ];
        return $this->db->insert('koleksi_buku', $data);
    }
    function update($a, $id, $cover = null)
    {
        $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'sinopsis' => $a['sinopsis'],
            'cover' => $cover
        ];
        $this->db->where('id', $id);
        return $this->db->update('koleksi_buku', $data);
    }
    function update_cover($a, $id)
    {
        $data = [
            'cover' => $a
        ];
        $this->db->where('id', $id);
        return $this->db->update('koleksi_buku', $data);
    }

    function delete($a)
    {
        $this->db->where('id', $a);
        return $this->db->delete('koleksi_buku');
    }
}

?>

</html>