<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prodi_model');
    }

    public function index()
    {
        $data['kategori'] = 'Prodi';
        $data['judul'] = 'Halaman Prodi';
        $data['prodi'] = $this->Prodi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['kategori'] = 'Prodi';
        $data['judul'] = 'Halaman Tambah Prodi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Prodi', 'required|trim', [
            'required' => 'Nama must be filled in',
        ]);
        $this->form_validation->set_rules('ruangan', 'Ruangan Prodi', 'required|trim', [
            'required' => 'Ruangan must be filled in',
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan Prodi', 'required|trim', [
            'required' => 'Jurusan must be filled in',
        ]);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi Prodi', 'required|trim', [
            'required' => 'Akreditasi must be filled in',
        ]);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi Prodi', 'required|trim', [
            'required' => 'Nama Kaprodi must be filled in',
        ]);
        $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri Prodi', 'required|trim', [
            'required' => 'Tahun Berdiri must be filled in',
        ]);
        $this->form_validation->set_rules('output_lulusan', 'Output Lulusan Prodi', 'required|trim', [
            'required' => 'Output Lulusan must be filled in',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("prodi/vw_tambah_prodi", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan')
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/prodi/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['prodi']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/prodi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Prodi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Yay!</strong> Data Prodi Berhasil Ditambahkan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('Prodi');
        }
    }
    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Perhatian!</strong> Data Prodi Tidak Dapat Dihapus (Melanggar Aturan Foreign Key).
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Yay!</strong> Data Prodi Berhasil Dihapus.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        }
        redirect('Prodi');
    }
    public function edit($id)
    {
        $data['kategori'] = 'Prodi';
        $data['judul'] = 'Halaman Edit Prodi';
        $data['prodi'] = $this->Prodi_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Prodi', 'required|trim', [
            'required' => 'Nama must be filled in',
        ]);
        $this->form_validation->set_rules('ruangan', 'Ruangan Prodi', 'required|trim', [
            'required' => 'Ruangan must be filled in',
        ]);
        $this->form_validation->set_rules('jurusan', 'Jurusan Prodi', 'required|trim', [
            'required' => 'Jurusan must be filled in',
        ]);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi Prodi', 'required|trim', [
            'required' => 'Akreditasi must be filled in',
        ]);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi Prodi', 'required|trim', [
            'required' => 'Nama Kaprodi must be filled in',
        ]);
        $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri Prodi', 'required|trim', [
            'required' => 'Tahun Berdiri must be filled in',
        ]);
        $this->form_validation->set_rules('output_lulusan', 'Output Lulusan Prodi', 'required|trim', [
            'required' => 'Output Lulusan must be filled in',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("prodi/vw_ubah_prodi", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan')
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/prodi/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['prodi']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/prodi/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Prodi_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Yay!</strong> Data Prodi Berhasil Diubah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('Prodi');
        }
    }
}