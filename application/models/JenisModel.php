<?php

class JenisModel extends CI_Model
{

    private $table = "jenis_beasiswa";

    public function get_jenis()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert_jenis()
    {
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->db->insert($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Jenis Beasiswa Berhasil ditambahkan!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data Jenis Beasiswa Gagal ditambahkan!');
            $this->session->set_flashdata('status', false);
        }
    }

    public function get_jenis_byid($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function update_jenis()
    {
        $data = [
            'nama_jenis' => $this->input->post('nama_jenis'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Jenis Beasiswa Berhasil diubah!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data Jenis Beasiswa Gagal diubah!');
            $this->session->set_flashdata('status', false);
        }
    }

    public function delete_jenis($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Data Jenis Beasiswa Berhasil dihapus!');
            $this->session->set_flashdata('status', true);
        } else {
            $this->session->set_flashdata('pesan', 'Data Jenis Beasiswa Gagal dihapus!');
            $this->session->set_flashdata('status', false);
        }
    }
}
