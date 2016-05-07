<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Order extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $order = $this->Order_model->get_all();

        $data = array(
            'order_data' => $order
        );

        $this->template->load('template','tbOrder_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Order_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idOrder' => $row->idOrder,
		'idUser' => $row->idUser,
		'beratOrder' => $row->beratOrder,
		'hargaOrder' => $row->hargaOrder,
		'notifOrder' => $row->notifOrder,
		'keteranganOrder' => $row->keteranganOrder,
	    );
            $this->template->load('template','tbOrder_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('order'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('order/create_action'),
	    'idOrder' => set_value('idOrder'),
	    'idUser' => set_value('idUser'),
	    'beratOrder' => set_value('beratOrder'),
	    'hargaOrder' => set_value('hargaOrder'),
	    'notifOrder' => set_value('notifOrder'),
	    'keteranganOrder' => set_value('keteranganOrder'),
	);
        $this->template->load('template','tbOrder_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idUser' => $this->input->post('idUser',TRUE),
		'beratOrder' => $this->input->post('beratOrder',TRUE),
		'hargaOrder' => $this->input->post('hargaOrder',TRUE),
		'notifOrder' => $this->input->post('notifOrder',TRUE),
		'keteranganOrder' => $this->input->post('keteranganOrder',TRUE),
	    );

            $this->Order_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('order'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Order_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('order/update_action'),
		'idOrder' => set_value('idOrder', $row->idOrder),
		'idUser' => set_value('idUser', $row->idUser),
		'beratOrder' => set_value('beratOrder', $row->beratOrder),
		'hargaOrder' => set_value('hargaOrder', $row->hargaOrder),
		'notifOrder' => set_value('notifOrder', $row->notifOrder),
		'keteranganOrder' => set_value('keteranganOrder', $row->keteranganOrder),
	    );
            $this->template->load('template','tbOrder_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('order'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idOrder', TRUE));
        } else {
            $data = array(
		'idUser' => $this->input->post('idUser',TRUE),
		'beratOrder' => $this->input->post('beratOrder',TRUE),
		'hargaOrder' => $this->input->post('hargaOrder',TRUE),
		'notifOrder' => $this->input->post('notifOrder',TRUE),
		'keteranganOrder' => $this->input->post('keteranganOrder',TRUE),
	    );

            $this->Order_model->update($this->input->post('idOrder', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('order'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Order_model->get_by_id($id);

        if ($row) {
            $this->Order_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('order'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('order'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idUser', 'iduser', 'trim|required');
	$this->form_validation->set_rules('beratOrder', 'beratorder', 'trim|required');
	$this->form_validation->set_rules('hargaOrder', 'hargaorder', 'trim|required');
	$this->form_validation->set_rules('notifOrder', 'notiforder', 'trim|required');
	$this->form_validation->set_rules('keteranganOrder', 'keteranganorder', 'trim|required');

	$this->form_validation->set_rules('idOrder', 'idOrder', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbOrder.xls";
        $judul = "tbOrder";
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
	xlsWriteLabel($tablehead, $kolomhead++, "BeratOrder");
	xlsWriteLabel($tablehead, $kolomhead++, "HargaOrder");
	xlsWriteLabel($tablehead, $kolomhead++, "NotifOrder");
	xlsWriteLabel($tablehead, $kolomhead++, "KeteranganOrder");

	foreach ($this->Order_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteNumber($tablebody, $kolombody++, $data->idUser);
	    xlsWriteNumber($tablebody, $kolombody++, $data->beratOrder);
	    xlsWriteNumber($tablebody, $kolombody++, $data->hargaOrder);
	    xlsWriteNumber($tablebody, $kolombody++, $data->notifOrder);
	    xlsWriteLabel($tablebody, $kolombody++, $data->keteranganOrder);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-07 21:47:27 */
/* http://harviacode.com */