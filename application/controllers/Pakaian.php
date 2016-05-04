<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pakaian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pakaian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pakaian/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pakaian/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pakaian/index.html';
            $config['first_url'] = base_url() . 'pakaian/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pakaian_model->total_rows($q);
        $pakaian = $this->Pakaian_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pakaian_data' => $pakaian,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbpakaian_list', $data);
    }
    public function json()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pakaian/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pakaian/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pakaian/index.html';
            $config['first_url'] = base_url() . 'pakaian/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pakaian_model->total_rows($q);
        $pakaian = $this->Pakaian_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pakaian_data' => $pakaian,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbpakaian_json', $data);
    }

    public function read($id) 
    {
        $row = $this->Pakaian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idPakaian' => $row->idPakaian,
		'namaPakaian' => $row->namaPakaian,
		'hargaPakaian' => $row->hargaPakaian,
	    );
            $this->load->view('tbpakaian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pakaian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pakaian/create_action'),
	    'idPakaian' => set_value('idPakaian'),
	    'namaPakaian' => set_value('namaPakaian'),
	    'hargaPakaian' => set_value('hargaPakaian'),
	);
        $this->load->view('tbpakaian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namaPakaian' => $this->input->post('namaPakaian',TRUE),
		'hargaPakaian' => $this->input->post('hargaPakaian',TRUE),
	    );

            $this->Pakaian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pakaian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pakaian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pakaian/update_action'),
		'idPakaian' => set_value('idPakaian', $row->idPakaian),
		'namaPakaian' => set_value('namaPakaian', $row->namaPakaian),
		'hargaPakaian' => set_value('hargaPakaian', $row->hargaPakaian),
	    );
            $this->load->view('tbpakaian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pakaian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idPakaian', TRUE));
        } else {
            $data = array(
		'namaPakaian' => $this->input->post('namaPakaian',TRUE),
		'hargaPakaian' => $this->input->post('hargaPakaian',TRUE),
	    );

            $this->Pakaian_model->update($this->input->post('idPakaian', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pakaian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pakaian_model->get_by_id($id);

        if ($row) {
            $this->Pakaian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pakaian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pakaian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namaPakaian', 'namapakaian', 'trim|required');

	$this->form_validation->set_rules('idPakaian', 'idPakaian', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pakaian.php */
/* Location: ./application/controllers/Pakaian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-03 22:28:09 */
/* http://harviacode.com */