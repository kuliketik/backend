<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keterangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Keterangan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'keterangan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'keterangan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'keterangan/index.html';
            $config['first_url'] = base_url() . 'keterangan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Keterangan_model->total_rows($q);
        $keterangan = $this->Keterangan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'keterangan_data' => $keterangan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','keterangan/keterangan_list', $data);
    }

    public function read($id)
    {
        $row = $this->Keterangan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_keterangan' => $row->id_keterangan,
		'id_order' => $row->id_order,
		'id_pakaian' => $row->id_pakaian,
	    );
            $this->template->load('template','keterangan/keterangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keterangan'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('keterangan/create_action'),
	    'id_keterangan' => set_value('id_keterangan'),
	    'id_order' => set_value('id_order'),
	    'id_pakaian' => set_value('id_pakaian'),
	);
        $this->template->load('template','keterangan/keterangan_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_order' => $this->input->post('id_order',TRUE),
		'id_pakaian' => $this->input->post('id_pakaian',TRUE),
	    );

            $this->Keterangan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('keterangan'));
        }
    }

    public function update($id)
    {
        $row = $this->Keterangan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('keterangan/update_action'),
		'id_keterangan' => set_value('id_keterangan', $row->id_keterangan),
		'id_order' => set_value('id_order', $row->id_order),
		'id_pakaian' => set_value('id_pakaian', $row->id_pakaian),
	    );
            $this->template->load('template','keterangan/keterangan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keterangan'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_keterangan', TRUE));
        } else {
            $data = array(
		'id_order' => $this->input->post('id_order',TRUE),
		'id_pakaian' => $this->input->post('id_pakaian',TRUE),
	    );

            $this->Keterangan_model->update($this->input->post('id_keterangan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keterangan'));
        }
    }

    public function delete($id)
    {
        $row = $this->Keterangan_model->get_by_id($id);

        if ($row) {
            $this->Keterangan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keterangan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keterangan'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('id_order', 'id order', 'trim|required');
	$this->form_validation->set_rules('id_pakaian', 'id pakaian', 'trim|required');

	$this->form_validation->set_rules('id_keterangan', 'id_keterangan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Keterangan.php */
/* Location: ./application/controllers/Keterangan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-09 06:40:18 */
/* http://harviacode.com */