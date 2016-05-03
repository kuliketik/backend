<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kurir extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kurir_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kurir/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kurir/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kurir/index.html';
            $config['first_url'] = base_url() . 'kurir/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kurir_model->total_rows($q);
        $kurir = $this->Kurir_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kurir_data' => $kurir,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbkurir_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kurir_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idKurir' => $row->idKurir,
		'namaKurir' => $row->namaKurir,
		'alamatKurir' => $row->alamatKurir,
		'jenisKelaminKurir' => $row->jenisKelaminKurir,
		'usernameKurir' => $row->usernameKurir,
		'passwordKurir' => $row->passwordKurir,
	    );
            $this->load->view('tbkurir_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kurir'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kurir/create_action'),
	    'idKurir' => set_value('idKurir'),
	    'namaKurir' => set_value('namaKurir'),
	    'alamatKurir' => set_value('alamatKurir'),
	    'jenisKelaminKurir' => set_value('jenisKelaminKurir'),
	    'usernameKurir' => set_value('usernameKurir'),
	    'passwordKurir' => set_value('passwordKurir'),
	);
        $this->load->view('tbkurir_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namaKurir' => $this->input->post('namaKurir',TRUE),
		'alamatKurir' => $this->input->post('alamatKurir',TRUE),
		'jenisKelaminKurir' => $this->input->post('jenisKelaminKurir',TRUE),
		'usernameKurir' => $this->input->post('usernameKurir',TRUE),
		'passwordKurir' => md5($this->input->post('passwordKurir',TRUE))
	    );

            $this->Kurir_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kurir'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kurir_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kurir/update_action'),
		'idKurir' => set_value('idKurir', $row->idKurir),
		'namaKurir' => set_value('namaKurir', $row->namaKurir),
		'alamatKurir' => set_value('alamatKurir', $row->alamatKurir),
		'jenisKelaminKurir' => set_value('jenisKelaminKurir', $row->jenisKelaminKurir),
		'usernameKurir' => set_value('usernameKurir', $row->usernameKurir),
		'passwordKurir' => set_value('passwordKurir', $row->passwordKurir),
	    );
            $this->load->view('tbkurir_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kurir'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idKurir', TRUE));
        } else {
            $data = array(
		'namaKurir' => $this->input->post('namaKurir',TRUE),
		'alamatKurir' => $this->input->post('alamatKurir',TRUE),
		'jenisKelaminKurir' => $this->input->post('jenisKelaminKurir',TRUE),
		'usernameKurir' => $this->input->post('usernameKurir',TRUE),
		'passwordKurir' => md5($this->input->post('passwordKurir',TRUE))
	    );

            $this->Kurir_model->update($this->input->post('idKurir', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kurir'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kurir_model->get_by_id($id);

        if ($row) {
            $this->Kurir_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kurir'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kurir'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namaKurir', 'namakurir', 'trim|required');
	$this->form_validation->set_rules('alamatKurir', 'alamatkurir', 'trim|required');
	$this->form_validation->set_rules('jenisKelaminKurir', 'jeniskelaminkurir', 'trim|required');
	$this->form_validation->set_rules('usernameKurir', 'usernamekurir', 'trim|required');
	$this->form_validation->set_rules('passwordKurir', 'passwordkurir', 'trim|required');

	$this->form_validation->set_rules('idKurir', 'idKurir', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kurir.php */
/* Location: ./application/controllers/Kurir.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-03 22:33:20 */
/* http://harviacode.com */