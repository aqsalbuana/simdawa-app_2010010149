<?php

class PendaftaranModel extends CI_Model
{
    private $table = "pendaftaran_pengguna";

    public function get_pendaftaran()
    {
        return $this->db->get($this->table)->result();
    }

    public function cek_nopendaftaran()
    {
        $cek = $this->db->get_where($this->table, ['no_pendaftaran' => $this->input->post('no_pendaftaran')]);
        if ($cek->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function upload_bukti($file)
    {
        $config['upload_path'] = './upload/bukti_daftar/';
        $config['allowed_types'] = 'jpg|png|jpeg|svg';
        $config['max_size'] = 1024;
        $config['remove_spaces'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload($file)) {
            $result = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $result;
        } else {
            $result = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $result;
        }
    }


    public function insert_pendaftaran($file)
    {
        $data = [
            'no_pendaftaran' => $this->input->post('no_pendaftaran'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'no_handphone' => $this->input->post('no_handphone'),
            'bukti_daftar' => $file['file']['file_name'],
            'keterangan' => 'Belum Diverifikasi'
        ];
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            $id = $this->db->insert_id();
            $this->insert_pengguna($id);
        } else {
            $this->session->set_flashdata('pesan', 'Data Pendaftaran Gagal ditambahkan!');
            $this->session->set_flashdata('status', false);
        }
    }

    public function insert_pengguna($id)
    {
        $data = [
            'username' => $this->input->post('no_pendaftaran'),
            'password' => md5($this->input->post('password')),
            'peran' => 'user',
            'pendaftaran_id' => $id
        ];
        $this->db->insert('pengguna', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Pendaftaran Berhasil ditambahkan! Untuk sementara aku kamu masih belum diverifikasi admin. Tunggu 1 X 24 Jam!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data Pengguna Gagal ditambahkan!');
            $this->session->set_flashdata('status', false);
        }
    }

    public function verifikasi_akun($status, $id)
    {
        $this->db->update($this->table, ['keterangan' => $status], ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Verifikasi Akun berhasil');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Verifikasi Akun gagal!');
            $this->session->set_flashdata('status', false);
        }
    }
}
