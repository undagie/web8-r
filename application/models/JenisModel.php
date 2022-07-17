<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisModel extends CI_Model
{
    private $tabel = 'jenis_beasiswa';

    public function get_jenis()
    {
        //kode program untuk mengambil data dalam tabel
        return $this->db->get($this->tabel)->result();
    }

    public function insert_jenis()
    {
        //ambil data dari komponen yang ada di form
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];
        //simpan/insert data
        $this->db->insert($this->tabel, $data);
    }

    public function get_jenis_byid($id)
    {
        //ambil data satu baris berdasar kolom id
        return $this->db->get_where('jenis_beasiswa', ['id' => $id])->row();
    }

    public function update_jenis($id)
    {
        //ambil data dari komponen yang ada di form
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];

        //update/perbarui data
        $this->db->where('id', $id);
        $this->db->update($this->tabel, $data);
    }

    public function delete_jenis($id)
    {
        //hapus data
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);
    }
}
