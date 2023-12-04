<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Mahasiswa_model');
        $this->load->model('Prodi_model');
    }

    public function index()
    {
        $data['kategori'] = 'Mahasiswa';
        $data['judul'] = 'Halaman Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['kategori'] = 'Mahasiswa';
        $data['judul'] = 'Halaman Form Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|trim', [
            'required' => 'Nama must be filled in',
        ]);
        $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required|trim', [
            'required' => 'NIM must be filled in',
        ]);
        $this->form_validation->set_rules('email', 'Email Mahasiswa', 'required|trim', [
            'required' => 'Email must be filled in',
        ]);
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|trim', [
            'required' => 'Nama must be filled in',
        ]);
        $this->form_validation->set_rules('prodi', 'Prodi Mahasiswa', 'required|trim', [
            'required' => 'Prodi must be filled in',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'required|trim', [
            'required' => 'Alamat must be filled in',
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah Mahasiswa', 'required|trim', [
            'required' => 'Asal Sekolah must be filled in',
        ]);
        $this->form_validation->set_rules('no_hp', 'NO HP Mahasiswa', 'required|trim', [
            'required' => 'No HP must be filled in',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'email' => $this->input->post('email'),
                'prodi' => $this->input->post('prodi'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'no_hp' => $this->input->post('no_hp')
            ];
            $this->Mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> Data Mahasiswa Berhasil Ditambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('Mahasiswa');
        }
    }

    public function detail($id)
    {
        $data['kategori'] = 'Mahasiswa';
        $data['judul'] = 'Halaman Detail Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
        $this->load->view("layout/footer", $data);
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Yay!</strong> Data Mahasiswa Berhasil Dihapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
        redirect('Mahasiswa');
    }

    public function edit($id)
    {
        $data['kategori'] = 'Mahasiswa';
        $data['judul'] = 'Halaman Edit Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $data['prodi'] = $this->Prodi_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|trim', [
            'required' => 'Nama must be filled in',
        ]);
        $this->form_validation->set_rules('nim', 'NIM Mahasiswa', 'required|trim', [
            'required' => 'NIM must be filled in',
        ]);
        $this->form_validation->set_rules('email', 'Email Mahasiswa', 'required|trim', [
            'required' => 'Email must be filled in',
        ]);
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|trim', [
            'required' => 'Nama must be filled in',
        ]);
        $this->form_validation->set_rules('prodi', 'Prodi Mahasiswa', 'required|trim', [
            'required' => 'Prodi must be filled in',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat Mahasiswa', 'required|trim', [
            'required' => 'Alamat must be filled in',
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah Mahasiswa', 'required|trim', [
            'required' => 'Asal Sekolah must be filled in',
        ]);
        $this->form_validation->set_rules('no_hp', 'NO HP Mahasiswa', 'required|trim', [
            'required' => 'No HP must be filled in',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'email' => $this->input->post('email'),
                'prodi' => $this->input->post('prodi'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),

            ];
            $id = $this->input->post('id');
            $this->Mahasiswa_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yay!</strong> Data Mahasiswa Berhasil Diubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('Mahasiswa');
        }
    }
    function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),

        ];
        $id = $this->input->post('id');
        $this->Mahasiswa_model->update(['id' => $id], $data);
        redirect('Mahasiswa');
    }
}