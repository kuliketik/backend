<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Loundry extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Loundry_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'loundry/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'loundry/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'loundry/index.html';
            $config['first_url'] = base_url() . 'loundry/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Loundry_model->total_rows($q);
        $loundry = $this->Loundry_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'loundry_data' => $loundry,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','loundry/loundry_list', $data);
    }

    public function read($id)
    {
        $row = $this->Loundry_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_loundry' => $row->id_loundry,
		'id_user' => $row->id_user,
		'nama_loundry' => $row->nama_loundry,
		'slogan_loundry' => $row->slogan_loundry,
		'alamat_loundry' => $row->alamat_loundry,
	    );
            $this->template->load('template','loundry/loundry_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('loundry'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('loundry/create_action'),
	    'id_loundry' => set_value('id_loundry'),
	    'id_user' => set_value('id_user'),
	    'nama_loundry' => set_value('nama_loundry'),
	    'slogan_loundry' => set_value('slogan_loundry'),
	    'alamat_loundry' => set_value('alamat_loundry'),
	);
        $this->template->load('template','loundry/loundry_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_user' => $this->input->post('id_user',TRUE),
		'nama_loundry' => $this->input->post('nama_loundry',TRUE),
		'slogan_loundry' => $this->input->post('slogan_loundry',TRUE),
		'alamat_loundry' => $this->input->post('alamat_loundry',TRUE),
	    );

            $this->Loundry_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('loundry'));
        }
    }

    public function update($id)
    {
        $row = $this->Loundry_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('loundry/update_action'),
		'id_loundry' => set_value('id_loundry', $row->id_loundry),
		'id_user' => set_value('id_user', $row->id_user),
		'nama_loundry' => set_value('nama_loundry', $row->nama_loundry),
		'slogan_loundry' => set_value('slogan_loundry', $row->slogan_loundry),
		'alamat_loundry' => set_value('alamat_loundry', $row->alamat_loundry),
	    );
            $this->template->load('template','loundry/loundry_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('loundry'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_loundry', TRUE));
        } else {
            $data = array(
		'id_user' => $this->input->post('id_user',TRUE),
		'nama_loundry' => $this->input->post('nama_loundry',TRUE),
		'slogan_loundry' => $this->input->post('slogan_loundry',TRUE),
		'alamat_loundry' => $this->input->post('alamat_loundry',TRUE),
	    );

            $this->Loundry_model->update($this->input->post('id_loundry', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('loundry'));
        }
    }

    public function delete($id)
    {
        $row = $this->Loundry_model->get_by_id($id);

        if ($row) {
            $this->Loundry_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('loundry'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('loundry'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
	$this->form_validation->set_rules('nama_loundry', 'nama loundry', 'trim|required');
	$this->form_validation->set_rules('slogan_loundry', 'slogan loundry', 'trim|required');
	$this->form_validation->set_rules('alamat_loundry', 'alamat loundry', 'trim|required');

	$this->form_validation->set_rules('id_loundry', 'id_loundry', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    function pdf()
    {
        $data = array(
            'loundry_data' => $this->Loundry_model->get_all(),
            'start' => 0
        );

        ini_set('memory_limit', '32M');
        $html = $this->load->view('loundry/loundry_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('loundry.pdf', 'D');
    }

}

/* End of file Loundry.php */
/* Location: ./application/controllers/Loundry.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-09 06:40:30 */
/* http://harviacode.com */