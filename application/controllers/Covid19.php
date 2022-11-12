<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Covid19 extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('covid19_model');
    
  }

  public function index()
  {
    $data['title'] = 'Kasus Covid-19';
    $data['covid'] = $this->covid19_model->get_data('kasus_covid')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('kasus_covid');
    $this->load->view('templates/footer');
  }

  public function tambah(){
    $data['title'] = 'Kasus Covid-19';

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('tambah_kasus_covid', $data);
    $this->load->view('templates/footer');
  }

  public function tambah_aksi()
  {
    $this->_rules();
    
    if ($this->form_validation->run() == FALSE) {
      $this->tambah();
    } else {
      $data = array(
        'tanggal' => $this->input->post('tanggal'),
        'kasus_baru' => $this->input->post('kasus_baru'),
        'meninggal' => $this->input->post('meninggal'),
      );

      $this->covid19_model->insert_data($data, 'kasus_covid');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil ditambahkan!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('covid19');
    }
    
  }

  public function edit($id)
  {
    $this->_rules();

    
    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
      $data = array(
        'id' => $id,
        'tanggal' => $this->input->post('tanggal'),
        'kasus_baru' => $this->input->post('kasus_baru'),
        'meninggal' => $this->input->post('meninggal'),
      );
      $this->covid19_model->update_data($data, 'kasus_covid');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data berhasil diubah!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('covid19');
    }
    
  }

  public function _rules(){
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required', array(
      'required' => '%s harus diisi !'
    ));
    $this->form_validation->set_rules('kasus_baru', 'Kasus Baru', 'required', array(
      'required' => '%s harus diisi !'
    ));
  }

  public function pdf()
  {
    $this->load->library('dompdf_gen');

    $data['covid19'] = $this->covid19_model->get_data('kasus_covid')->result();
    
    $this->load->view('laporan_covid', $data);
    
    $paper_size = 'A4';
    $orientation = 'potrait';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream('laporan_covid.pdf', array('Attachment' => 0));
  }

  public function delete($id)
  {
    $where = array('id' => $id);

    $this->covid19_model->delete($where, 'kasus_covid');
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Data berhasil dihapus!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>');
    redirect('covid19');
  }

}


/* End of file Dashboard.php.php */
/* Location: ./application/controllers/Dashboard.php.php */