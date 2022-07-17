<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BeasiswaModel extends CI_Model
{
    private $tabel = 'beasiswa';

    public function get_beasiswa()
    {
        //kode program untuk mengambil data dalam tabel
        $query = "SELECT beasiswa.*, jenis_beasiswa.nama_jenis, jenis_beasiswa.keterangan FROM beasiswa INNER JOIN jenis_beasiswa ON beasiswa.jenis_id = jenis_beasiswa.id";
        return $this->db->query($query)->result();
    }

    public function insert_beasiswa()
    {
        //ambil data dari komponen yang ada di form
        $data = [
            'nama_beasiswa' => $this->input->post('nama_beasiswa'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai'),
            'jenis_id' => $this->input->post('jenis_id')
        ];
        //simpan/insert data
        $this->db->insert($this->tabel, $data);

        //mengirim pesan berhasil atau gagal
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data Beasiswa Berhasil Ditambahkan!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data Beasiswa Gagal Ditambahkan!");
            $this->session->set_flashdata('status', false);
        }
    }

    public function get_beasiswa_byid($id)
    {
        //ambil data satu baris berdasar kolom id
        return $this->db->get_where($this->tabel, ['id' => $id])->row();
    }

    public function update_beasiswa($id)
    {
        //ambil data dari komponen yang ada di form
        $data = [
            'nama_beasiswa' => $this->input->post('nama_beasiswa'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'tanggal_selesai' => $this->input->post('tanggal_selesai'),
            'jenis_id' => $this->input->post('jenis_id')
        ];

        //update/perbarui data
        $this->db->where('id', $id);
        $this->db->update($this->tabel, $data);

        //mengirim pesan berhasil atau gagal
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data Beasiswa Berhasil Diperbaharui!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data Beasiswa Gagal Diperbaharui!");
            $this->session->set_flashdata('status', false);
        }
    }

    public function delete_beasiswa($id)
    {
        //hapus data
        $this->db->where('id', $id);
        $this->db->delete($this->tabel);

        //mengirim pesan berhasil atau gagal
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "Data Beasiswa Berhasil Dihapus!");
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', "Data Beasiswa Gagal Dihapus!");
            $this->session->set_flashdata('status', false);
        }
    }
}
