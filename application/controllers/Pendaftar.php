<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pendaftar = $this->Pendaftar_model->get_all();

        $data = array(
            'pendaftar_data' => $pendaftar
        );

        $this->load->view('data_pendaftar_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pendaftar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'tgl_daftar' => $row->tgl_daftar,
		'no_daftar' => $row->no_daftar,
		'nama' => $row->nama,
		'jenis_kel' => $row->jenis_kel,
		'tempat_lahir' => $row->tempat_lahir,
		'tgl_lahir' => $row->tgl_lahir,
		'agama' => $row->agama,
		'alamat' => $row->alamat,
		'no_telp' => $row->no_telp,
		'no_hp' => $row->no_hp,
		'anak_ke' => $row->anak_ke,
		'nama_ortu' => $row->nama_ortu,
		'alamat_ortu' => $row->alamat_ortu,
		'agama_ortu' => $row->agama_ortu,
		'kerja_ortu' => $row->kerja_ortu,
		'hasil_ortu' => $row->hasil_ortu,
		'nama_wali' => $row->nama_wali,
		'alamat_wali' => $row->alamat_wali,
		'kerja_wali' => $row->kerja_wali,
		'hub_wali' => $row->hub_wali,
		'no_hp_wali' => $row->no_hp_wali,
		'status' => $row->status,
		'id_thn_ajar' => $row->id_thn_ajar,
	    );
            $this->load->view('data_pendaftar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pendaftar/create_action'),
	    'id' => set_value('id'),
	    'tgl_daftar' => set_value('tgl_daftar'),
	    'no_daftar' => set_value('no_daftar'),
	    'nama' => set_value('nama'),
	    'jenis_kel' => set_value('jenis_kel'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'agama' => set_value('agama'),
	    'alamat' => set_value('alamat'),
	    'no_telp' => set_value('no_telp'),
	    'no_hp' => set_value('no_hp'),
	    'anak_ke' => set_value('anak_ke'),
	    'nama_ortu' => set_value('nama_ortu'),
	    'alamat_ortu' => set_value('alamat_ortu'),
	    'agama_ortu' => set_value('agama_ortu'),
	    'kerja_ortu' => set_value('kerja_ortu'),
	    'hasil_ortu' => set_value('hasil_ortu'),
	    'nama_wali' => set_value('nama_wali'),
	    'alamat_wali' => set_value('alamat_wali'),
	    'kerja_wali' => set_value('kerja_wali'),
	    'hub_wali' => set_value('hub_wali'),
	    'no_hp_wali' => set_value('no_hp_wali'),
	    'status' => set_value('status'),
	    'id_thn_ajar' => set_value('id_thn_ajar'),
	);
        $this->load->view('data_pendaftar_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
   $this->create();
  } else {
   $data = array(
    'tgl_daftar' => '',
    'no_daftar' => '',
    'nama' => $this->input->post('nama',TRUE),
    'jenis_kel' => $this->input->post('jenis_kel',TRUE),
    'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
    'tgl_lahir' => $this->input->post('tgl_lahir'),
    'agama' => $this->input->post('agama',TRUE),
    'alamat' => $this->input->post('alamat',TRUE),
    'no_telp' => $this->input->post('no_telp',TRUE),
    'no_hp' => $this->input->post('no_hp',TRUE),
    'anak_ke' => $this->input->post('anak_ke',TRUE),
    'nama_ortu' => $this->input->post('nama_ortu',TRUE),
    'alamat_ortu' => $this->input->post('alamat_ortu',TRUE),
    'agama_ortu' => $this->input->post('agama_ortu',TRUE),
    'kerja_ortu' => $this->input->post('kerja_ortu',TRUE),
    'hasil_ortu' => $this->input->post('hasil_ortu',TRUE),
    'nama_wali' => $this->input->post('nama_wali',TRUE),
    'alamat_wali' => $this->input->post('alamat_wali',TRUE),
    'kerja_wali' => $this->input->post('kerja_wali',TRUE),
    'hub_wali' => $this->input->post('hub_wali',TRUE),
    'no_hp_wali' => $this->input->post('no_hp_wali',TRUE),
    'status' => '1',
    'id_thn_ajar' => $this->input->post('id_thn_ajar',TRUE),
	    );
  $this->Pendaftar_model->insert($data);
  $this->session->set_flashdata('message', 'Create Record Success');
  redirect(site_url('publik'));
  }
    }
    
    public function update($id) 
    {
        $row = $this->Pendaftar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pendaftar/update_action'),
		'id' => set_value('id', $row->id),
		'tgl_daftar' => set_value('tgl_daftar', $row->tgl_daftar),
		'no_daftar' => set_value('no_daftar', $row->no_daftar),
		'nama' => set_value('nama', $row->nama),
		'jenis_kel' => set_value('jenis_kel', $row->jenis_kel),
		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'agama' => set_value('agama', $row->agama),
		'alamat' => set_value('alamat', $row->alamat),
		'no_telp' => set_value('no_telp', $row->no_telp),
		'no_hp' => set_value('no_hp', $row->no_hp),
		'anak_ke' => set_value('anak_ke', $row->anak_ke),
		'nama_ortu' => set_value('nama_ortu', $row->nama_ortu),
		'alamat_ortu' => set_value('alamat_ortu', $row->alamat_ortu),
		'agama_ortu' => set_value('agama_ortu', $row->agama_ortu),
		'kerja_ortu' => set_value('kerja_ortu', $row->kerja_ortu),
		'hasil_ortu' => set_value('hasil_ortu', $row->hasil_ortu),
		'nama_wali' => set_value('nama_wali', $row->nama_wali),
		'alamat_wali' => set_value('alamat_wali', $row->alamat_wali),
		'kerja_wali' => set_value('kerja_wali', $row->kerja_wali),
		'hub_wali' => set_value('hub_wali', $row->hub_wali),
		'no_hp_wali' => set_value('no_hp_wali', $row->no_hp_wali),
		'status' => set_value('status', $row->status),
		'id_thn_ajar' => set_value('id_thn_ajar', $row->id_thn_ajar),
	    );
            $this->load->view('data_pendaftar_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tgl_daftar' => $this->input->post('tgl_daftar',TRUE),
		'no_daftar' => $this->input->post('no_daftar',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'jenis_kel' => $this->input->post('jenis_kel',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
		'no_hp' => $this->input->post('no_hp',TRUE),
		'anak_ke' => $this->input->post('anak_ke',TRUE),
		'nama_ortu' => $this->input->post('nama_ortu',TRUE),
		'alamat_ortu' => $this->input->post('alamat_ortu',TRUE),
		'agama_ortu' => $this->input->post('agama_ortu',TRUE),
		'kerja_ortu' => $this->input->post('kerja_ortu',TRUE),
		'hasil_ortu' => $this->input->post('hasil_ortu',TRUE),
		'nama_wali' => $this->input->post('nama_wali',TRUE),
		'alamat_wali' => $this->input->post('alamat_wali',TRUE),
		'kerja_wali' => $this->input->post('kerja_wali',TRUE),
		'hub_wali' => $this->input->post('hub_wali',TRUE),
		'no_hp_wali' => $this->input->post('no_hp_wali',TRUE),
		'status' => $this->input->post('status',TRUE),
		'id_thn_ajar' => $this->input->post('id_thn_ajar',TRUE),
	    );

            $this->Pendaftar_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pendaftar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pendaftar_model->get_by_id($id);

        if ($row) {
            $this->Pendaftar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pendaftar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl_daftar', 'tgl daftar', 'trim|required');
	$this->form_validation->set_rules('no_daftar', 'no daftar', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('jenis_kel', 'jenis kel', 'trim|required');
	$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('agama', 'agama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('anak_ke', 'anak ke', 'trim|required');
	$this->form_validation->set_rules('nama_ortu', 'nama ortu', 'trim|required');
	$this->form_validation->set_rules('alamat_ortu', 'alamat ortu', 'trim|required');
	$this->form_validation->set_rules('agama_ortu', 'agama ortu', 'trim|required');
	$this->form_validation->set_rules('kerja_ortu', 'kerja ortu', 'trim|required');
	$this->form_validation->set_rules('hasil_ortu', 'hasil ortu', 'trim|required');
	$this->form_validation->set_rules('nama_wali', 'nama wali', 'trim|required');
	$this->form_validation->set_rules('alamat_wali', 'alamat wali', 'trim|required');
	$this->form_validation->set_rules('kerja_wali', 'kerja wali', 'trim|required');
	$this->form_validation->set_rules('hub_wali', 'hub wali', 'trim|required');
	$this->form_validation->set_rules('no_hp_wali', 'no hp wali', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('id_thn_ajar', 'id thn ajar', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pendaftar.php */
/* Location: ./application/controllers/Pendaftar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-02-04 21:24:34 */
/* http://harviacode.com */