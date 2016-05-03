<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pelanggan = $this->Pelanggan_model->get_all();

        $data = array(
            'pelanggan_data' => $pelanggan
        );

        $this->load->view('tbpelanggan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pelanggan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idPelanggan' => $row->idPelanggan,
		'namaPelanggan' => $row->namaPelanggan,
		'lat' => $row->lat,
		'lng' => $row->lng,
		'username' => $row->username,
		'password' => $row->password,
		'alamatPelanggan' => $row->alamatPelanggan,
	    );
            $this->load->view('tbpelanggan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelanggan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pelanggan/create_action'),
	    'idPelanggan' => set_value('idPelanggan'),
	    'namaPelanggan' => set_value('namaPelanggan'),
	    'lat' => set_value('lat'),
	    'lng' => set_value('lng'),
	    'username' => set_value('username'),
	    'password' => set_value('password'),
	    'alamatPelanggan' => set_value('alamatPelanggan'),
	);
        $this->load->view('tbpelanggan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namaPelanggan' => $this->input->post('namaPelanggan',TRUE),
		'lat' => $this->input->post('lat',TRUE),
		'lng' => $this->input->post('lng',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => md5($this->input->post('password',TRUE)),
		'alamatPelanggan' => $this->input->post('alamatPelanggan',TRUE),
	    );

            $this->Pelanggan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pelanggan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pelanggan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pelanggan/update_action'),
		'idPelanggan' => set_value('idPelanggan', $row->idPelanggan),
		'namaPelanggan' => set_value('namaPelanggan', $row->namaPelanggan),
		'lat' => set_value('lat', $row->lat),
		'lng' => set_value('lng', $row->lng),
		'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
		'alamatPelanggan' => set_value('alamatPelanggan', $row->alamatPelanggan),
	    );
            $this->load->view('tbpelanggan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelanggan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idPelanggan', TRUE));
        } else {
            $data = array(
		'namaPelanggan' => $this->input->post('namaPelanggan',TRUE),
		'lat' => $this->input->post('lat',TRUE),
		'lng' => $this->input->post('lng',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => md5($this->input->post('password',TRUE)),
		'alamatPelanggan' => $this->input->post('alamatPelanggan',TRUE),
	    );

            $this->Pelanggan_model->update($this->input->post('idPelanggan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pelanggan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pelanggan_model->get_by_id($id);

        if ($row) {
            $this->Pelanggan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pelanggan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelanggan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namaPelanggan', 'namapelanggan', 'trim|required');
	$this->form_validation->set_rules('lat', 'lat', 'trim|required');
	$this->form_validation->set_rules('lng', 'lng', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('alamatPelanggan', 'alamatpelanggan', 'trim|required');

	$this->form_validation->set_rules('idPelanggan', 'idPelanggan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-03 22:29:38 */
/* http://harviacode.com */