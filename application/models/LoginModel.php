<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    private $tabel = "pengguna";
    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $cek = $this->db->get_where($this->tabel, ['username' => $username, 'password' => $password]);
        if ($cek->num_rows() > 0) {
            $data_login = $cek->row();

            $data_pengguna = $this->db->get_where('pendaftaran_pengguna', ['id' => $data_login->pendaftaran_id])->row();

            if ($data_pengguna->keterangan == 'Belum Diverifikasi' || $data_pengguna->keterangan == 'Akun Dibatalkan') {
                $return = ['status' => false, 'pesan' => 'Akun Anda Belum Diverifikasi oleh Operator Kemahasiswaan'];
            } else {
                $return = ['status' => true, 'data_login' => $data_login, 'nama_lengkap' => $data_pengguna->nama_lengkap];
            }
        } else {
            $return = ['status' => true, 'data_login' => '', 'pesan' => 'Username dan Password tidak ditemukan disistem !'];
        }

        return $return;
    }
}
