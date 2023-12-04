<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pinjol extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Pinjol_model');
  }

  public function index()
  {
    $data['kategori'] = 'Pinjol';
    $data['judul'] = 'Halaman Pinjol';
    $data['Pinjol'] = $this->Pinjol_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("pinjol/vw_Pinjol", $data);
    $this->load->view("layout/footer", $data);
  }
  public function tambah()
  {
    $data['kategori'] = 'Pinjol';
    $data['judul'] = 'Halaman Tambah Pinjol';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("pinjol/vw_tambah_Pinjol", $data);
    $this->load->view("layout/footer", $data);
  }
  public function hapus($id)
  {
    $this->Pinjol_model->delete($id);
    redirect('Pinjol');
  }
  public function upload()
  {
    $data = [
      'nik' => $this->input->post('nik'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'email' => $this->input->post('email'),
      'besar_pinjaman' => $this->input->post('besar_pinjaman'),
      'durasi' => $this->input->post('durasi'),
    ];
    $this->Pinjol_model->insert($data);
    redirect('pinjol');
  }
  public function edit($id)
  {
    $data['kategori'] = 'pinjol';
    $data['judul'] = 'Halaman Edit pinjol';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['Pinjol'] = $this->Pinjol_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("pinjol/vw_ubah_pinjol", $data);
    $this->load->view("layout/footer", $data);
  }
  public function update()
  {
    $data = [
      'nik' => $this->input->post('nik'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'email' => $this->input->post('email'),
      'besar_pinjaman' => $this->input->post('besar_pinjaman'),
      'durasi' => $this->input->post('durasi'),
    ];
    $id = $this->input->post('id');
    $this->Pinjol_model->update(['id' => $id], $data);
    redirect('Pinjol');
  }
  public function detail($id)
  {
    $data['kategori'] = 'Pinjol';
    $data['judul'] = 'Halaman Detail Pinjol';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['Pinjol'] = $this->Pinjol_model->getById($id);
    $this->load->view("layout/header", $data);
    $this->load->view("pinjol/vw_detail_pinjol", $data);
    $this->load->view("layout/footer", $data);
  }
}


/* End of file Pinjol.php */
/* Location: ./application/controllers/Pinjol.php */