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
        $loundry = $this->Loundry_model->get_all();

        $data = array(
            'loundry_data' => $loundry
        );

        $this->template->load('template','tbLoundry_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Loundry_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idLoundry' => $row->idLoundry,
		'idUser' => $row->idUser,
		'namaLoundry' => $row->namaLoundry,
		'sloganLoundry' => $row->sloganLoundry,
		'alamatLoundry' => $row->alamatLoundry,
	    );
            $this->template->load('template','tbLoundry_read', $data);
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
	    'idLoundry' => set_value('idLoundry'),
	    'idUser' => set_value('idUser'),
	    'namaLoundry' => set_value('namaLoundry'),
	    'sloganLoundry' => set_value('sloganLoundry'),
	    'alamatLoundry' => set_value('alamatLoundry'),
	);
        $this->template->load('template','tbLoundry_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idUser' => $this->input->post('idUser',TRUE),
		'namaLoundry' => $this->input->post('namaLoundry',TRUE),
		'sloganLoundry' => $this->input->post('sloganLoundry',TRUE),
		'alamatLoundry' => $this->input->post('alamatLoundry',TRUE),
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
		'idLoundry' => set_value('idLoundry', $row->idLoundry),
		'idUser' => set_value('idUser', $row->idUser),
		'namaLoundry' => set_value('namaLoundry', $row->namaLoundry),
		'sloganLoundry' => set_value('sloganLoundry', $row->sloganLoundry),
		'alamatLoundry' => set_value('alamatLoundry', $row->alamatLoundry),
	    );
            $this->template->load('template','tbLoundry_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('loundry'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idLoundry', TRUE));
        } else {
            $data = array(
		'idUser' => $this->input->post('idUser',TRUE),
		'namaLoundry' => $this->input->post('namaLoundry',TRUE),
		'sloganLoundry' => $this->input->post('sloganLoundry',TRUE),
		'alamatLoundry' => $this->input->post('alamatLoundry',TRUE),
	    );

            $this->Loundry_model->update($this->input->post('idLoundry', TRUE), $data);
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
	$this->form_validation->set_rules('idUser', 'iduser', 'trim|required');
	$this->form_validation->set_rules('namaLoundry', 'namaloundry', 'trim|required');
	$this->form_validation->set_rules('sloganLoundry', 'sloganloundry', 'trim|required');
	$this->form_validation->set_rules('alamatLoundry', 'alamatloundry', 'trim|required');

	$this->form_validation->set_rules('idLoundry', 'idLoundry', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbLoundry.xls";
        $judul = "tbLoundry";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "IdUser");
	xlsWriteLabel($tablehead, $kolomhead++, "NamaLoundry");
	xlsWriteLabel($tablehead, $kolomhead++, "SloganLoundry");
	xlsWriteLabel($tablehead, $kolomhead++, "AlamatLoundry");

	foreach ($this->Loundry_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idUser);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namaLoundry);
	    xlsWriteLabel($tablebody, $kolombody++, $data->sloganLoundry);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamatLoundry);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Loundry.php */
/* Location: ./application/controllers/Loundry.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-07 21:51:05 */
/* http://harviacode.com */