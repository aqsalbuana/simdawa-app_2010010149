<?php
class Jenis extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('JenisModel');
        $this->load->library('Pdf');
    }

    public function index()
    {
        $data['title'] = "Dashboard | SIMDAWA-APP";
        $data['jenis'] = $this->JenisModel->get_jenis();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('jenis/jenis_read', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['create'])) {
            $this->JenisModel->insert_Jenis();
            redirect('jenis');
        } else {
            $data['title'] = "Tambah Dashboard | SIMDAWA-APP";
            $data['jenis'] = $this->JenisModel->get_jenis();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('jenis/jenis_created');
            $this->load->view('template/footer');
        }
    }

    public function ubah($id)
    {
        if (isset($_POST['update'])) {
            $this->JenisModel->update_jenis();
            redirect('jenis');
        } else {
            $data['title'] = "Perbaharui Dashboard | SIMDAWA-APP";
            $data['jenis'] = $this->JenisModel->get_jenis_byid($id);
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('jenis/jenis_update', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id)
    {
        if (isset($id)) {
            $this->JenisModel->delete_jenis($id);
            redirect('jenis');
        }
    }

    public function cetak()
    {
        $data['jenis'] = $this->JenisModel->get_jenis();
        $this->load->view('jenis/jenis_print', $data);
    }
}
