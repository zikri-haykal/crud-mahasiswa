<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Poster
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Poster extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->model('Poster_model');
  }

  public function index()
  {
    $data['kategori'] = 'Poster';
    $data['judul'] = 'Halaman Poster';
    $data['poster'] = $this->Poster_model->get();
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('layout/header', $data);
    $this->load->view('poster/index', $data);
    $this->load->view('layout/footer', $data);
  }
  public function detail($id)
  {
    $data['kategori'] = 'Poster';
    $data['judul'] = 'Halaman Detail Poster';
    $data['poster'] = $this->Poster_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view("layout/header", $data);
    $this->load->view("poster/detail", $data);
    $this->load->view("layout/footer", $data);
  }
  public function create()
  {
    $data['kategori'] = 'Poster';
    $data['judul'] = 'Halaman Form Poster';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('peserta', 'Peserta', 'required|trim', [
      'required' => 'Peserta must be filled in',
    ]);
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
      'required' => 'Tanggal must be filled in',
    ]);
    $this->form_validation->set_rules('biaya', 'Biaya', 'required|trim', [
      'required' => 'Biaya must be filled in',
    ]);
    $this->form_validation->set_rules('cp', 'CP', 'required|trim', [
      'required' => 'CP must be filled in',
    ]);
    $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim', [
      'required' => 'No Hp must be filled in',
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
      'required' => 'Alamat must be filled in',
    ]);
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim', [
      'required' => 'Keterangan must be filled in',
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("poster/create", $data);
      $this->load->view("layout/footer", $data);
    } else {
      $data = [
        'acara' => $this->input->post('acara'),
        'peserta' => $this->input->post('peserta'),
        'tanggal' => $this->input->post('tanggal'),
        'biaya' => $this->input->post('biaya'),
        'cp' => $this->input->post('cp'),
        'no_hp' => $this->input->post('no_hp'),
        'alamat' => $this->input->post('alamat'),
        'keterangan' => $this->input->post('keterangan')
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['upload_path'] = './assets/img/poster/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $old_image = $data['poster']['gambar'];
          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/poster/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->Poster_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Yay!</strong> Poster Berhasil Ditambahkan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
      redirect('Poster');
    }
  }
  public function delete($id)
  {
    $this->Poster_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Yay!</strong> Poster Berhasil Dihapus.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    redirect('Poster');
  }
  public function update($id)
  {
    $data['kategori'] = 'Poster';
    $data['judul'] = 'Halaman Edit Poster';
    $data['poster'] = $this->Poster_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('peserta', 'Peserta', 'required|trim', [
      'required' => 'Peserta must be filled in',
    ]);
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', [
      'required' => 'Tanggal must be filled in',
    ]);
    $this->form_validation->set_rules('biaya', 'Biaya', 'required|trim', [
      'required' => 'Biaya must be filled in',
    ]);
    $this->form_validation->set_rules('cp', 'CP', 'required|trim', [
      'required' => 'CP must be filled in',
    ]);
    $this->form_validation->set_rules('no_hp', 'No_hp', 'required|trim', [
      'required' => 'No Hp must be filled in',
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
      'required' => 'Alamat Berdiri must be filled in',
    ]);
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim', [
      'required' => 'Keterangan must be filled in',
    ]);
    if ($this->form_validation->run() == false) {
      $this->load->view("layout/header", $data);
      $this->load->view("poster/update", $data);
      $this->load->view("layout/footer", $data);
    } else {
      $data = [
        'acara' => $this->input->post('acara'),
        'peserta' => $this->input->post('peserta'),
        'tanggal' => $this->input->post('tanggal'),
        'biaya' => $this->input->post('biaya'),
        'cp' => $this->input->post('cp'),
        'no_hp' => $this->input->post('no_hp'),
        'alamat' => $this->input->post('alamat'),
        'keterangan' => $this->input->post('keterangan')
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image) {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '5000';
        $config['upload_path'] = './assets/img/poster/';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $old_image = $data['poster']['gambar'];
          if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/poster/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $id = $this->input->post('id');
      $this->Poster_model->update(['id' => $id], $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Yay!</strong> Poster Berhasil Diubah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
      redirect('Poster');
    }
  }

}


/* End of file Poster.php */
/* Location: ./application/controllers/Poster.php */