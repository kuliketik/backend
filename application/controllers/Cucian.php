<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cucian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cucian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $cucian = $this->Cucian_model->get_all();

        $data = array(
            'cucian_data' => $cucian
        );

        $this->load->view('tbcucian_list', $data);
    }
    
    public function json(){
        $cucian = $this->Cucian_model->get_all();

        $data = array(
            'cucian_data' => $cucian
        );

        $this->load->view('tbcucian_json', $data);        
    }

    public function read($id) 
    {
        $row = $this->Cucian_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idCucian' => $row->idCucian,
		'idPelanggan' => $row->idPelanggan,
		'idKurir' => $row->idKurir,
		'biayaCucian' => $row->biayaCucian,
		'beratCucian' => $row->beratCucian,
		'ketCucian' => $row->ketCucian,
	    );
            $this->load->view('tbcucian_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('cucian'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('cucian/create_action'),
	    'idCucian' => set_value('idCucian'),
	    'idPelanggan' => set_value('idPelanggan'),
	    'idKurir' => set_value('idKurir'),
	    'biayaCucian' => set_value('biayaCucian'),
	    'beratCucian' => set_value('beratCucian'),
	    'ketCucian' => set_value('ketCucian'),
	);
        $this->load->view('tbcucian_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idPelanggan' => $this->input->post('idPelanggan',TRUE),
		'idKurir' => $this->input->post('idKurir',TRUE),
		'biayaCucian' => $this->input->post('biayaCucian',TRUE),
		'beratCucian' => $this->input->post('beratCucian',TRUE),
		'ketCucian' => $this->input->post('ketCucian',TRUE),
	    );

            $this->Cucian_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('cucian'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Cucian_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('cucian/update_action'),
		'idCucian' => set_value('idCucian', $row->idCucian),
		'idPelanggan' => set_value('idPelanggan', $row->idPelanggan),
		'idKurir' => set_value('idKurir', $row->idKurir),
		'biayaCucian' => set_value('biayaCucian', $row->biayaCucian),
		'beratCucian' => set_value('beratCucian', $row->beratCucian),
		'ketCucian' => set_value('ketCucian', $row->ketCucian),
	    );
            $this->load->view('tbcucian_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('cucian'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idCucian', TRUE));
        } else {
            $data = array(
		'idPelanggan' => $this->input->post('idPelanggan',TRUE),
		'idKurir' => $this->input->post('idKurir',TRUE),
		'biayaCucian' => $this->input->post('biayaCucian',TRUE),
		'beratCucian' => $this->input->post('beratCucian',TRUE),
		'ketCucian' => $this->input->post('ketCucian',TRUE),
	    );

            $this->Cucian_model->update($this->input->post('idCucian', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('cucian'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Cucian_model->get_by_id($id);

        if ($row) {
            $this->Cucian_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('cucian'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('cucian'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idPelanggan', 'idpelanggan', 'trim|required');
	$this->form_validation->set_rules('idKurir', 'idkurir', 'trim|required');
	$this->form_validation->set_rules('biayaCucian', 'biayacucian', 'trim|required');
	$this->form_validation->set_rules('beratCucian', 'beratcucian', 'trim|required');
	$this->form_validation->set_rules('ketCucian', 'ketcucian', 'trim|required');

	$this->form_validation->set_rules('idCucian', 'idCucian', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbcucian.xls";
        $judul = "tbcucian";
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
	xlsWriteLabel($tablehead, $kolomhead++, "IdPelanggan");
	xlsWriteLabel($tablehead, $kolomhead++, "IdKurir");
	xlsWriteLabel($tablehead, $kolomhead++, "BiayaCucian");
	xlsWriteLabel($tablehead, $kolomhead++, "BeratCucian");
	xlsWriteLabel($tablehead, $kolomhead++, "KetCucian");

	foreach ($this->Cucian_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idPelanggan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idKurir);
	    xlsWriteNumber($tablebody, $kolombody++, $data->biayaCucian);
	    xlsWriteNumber($tablebody, $kolombody++, $data->beratCucian);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ketCucian);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbcucian.doc");

        $data = array(
            'tbcucian_data' => $this->Cucian_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tbcucian_doc',$data);
    }

}

/* End of file Cucian.php */
/* Location: ./application/controllers/Cucian.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-03 22:52:46 */
/* http://harviacode.com */