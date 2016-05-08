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
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'order/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'order/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'order/index.html';
            $config['first_url'] = base_url() . 'order/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Order_model->total_rows($q);
        $order = $this->Order_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'order_data' => $order,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','order/order_list', $data);
    }

    public function read($id)
    {
        $row = $this->Order_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_order' => $row->id_order,
		'id_user' => $row->id_user,
		'berat_order' => $row->berat_order,
		'harga_order' => $row->harga_order,
		'notif_order' => $row->notif_order,
		'keterangan_order' => $row->keterangan_order,
	    );
            $this->template->load('template','order/order_read', $data);
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
	    'id_order' => set_value('id_order'),
	    'id_user' => set_value('id_user'),
	    'berat_order' => set_value('berat_order'),
	    'harga_order' => set_value('harga_order'),
	    'notif_order' => set_value('notif_order'),
	    'keterangan_order' => set_value('keterangan_order'),
	);
        $this->template->load('template','order/order_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_user' => $this->input->post('id_user',TRUE),
		'berat_order' => $this->input->post('berat_order',TRUE),
		'harga_order' => $this->input->post('harga_order',TRUE),
		'notif_order' => $this->input->post('notif_order',TRUE),
		'keterangan_order' => $this->input->post('keterangan_order',TRUE),
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
		'id_order' => set_value('id_order', $row->id_order),
		'id_user' => set_value('id_user', $row->id_user),
		'berat_order' => set_value('berat_order', $row->berat_order),
		'harga_order' => set_value('harga_order', $row->harga_order),
		'notif_order' => set_value('notif_order', $row->notif_order),
		'keterangan_order' => set_value('keterangan_order', $row->keterangan_order),
	    );
            $this->template->load('template','order/order_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('order'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_order', TRUE));
        } else {
            $data = array(
		'id_user' => $this->input->post('id_user',TRUE),
		'berat_order' => $this->input->post('berat_order',TRUE),
		'harga_order' => $this->input->post('harga_order',TRUE),
		'notif_order' => $this->input->post('notif_order',TRUE),
		'keterangan_order' => $this->input->post('keterangan_order',TRUE),
	    );

            $this->Order_model->update($this->input->post('id_order', TRUE), $data);
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
	$this->form_validation->set_rules('id_user', 'id user', 'trim|required');
	$this->form_validation->set_rules('berat_order', 'berat order', 'trim|required');
	$this->form_validation->set_rules('harga_order', 'harga order', 'trim|required');
	$this->form_validation->set_rules('notif_order', 'notif order', 'trim|required');
	$this->form_validation->set_rules('keterangan_order', 'keterangan order', 'trim|required');

	$this->form_validation->set_rules('id_order', 'id_order', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    function pdf()
    {
        $data = array(
            'order_data' => $this->Order_model->get_all(),
            'start' => 0
        );

        ini_set('memory_limit', '32M');
        $html = $this->load->view('order/order_pdf', $data, true);
        $this->load->library('pdf');
        $pdf = $this->pdf->load();
        $pdf->WriteHTML($html);
        $pdf->Output('order.pdf', 'D');
    }

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-09 06:39:36 */
/* http://harviacode.com */