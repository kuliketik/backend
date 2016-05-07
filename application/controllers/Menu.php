<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends CI_Controller
{
    
        
    function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'menu/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'menu/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'menu/index.html';
            $config['first_url'] = base_url() . 'menu/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Menu_model->total_rows($q);
        $menu = $this->Menu_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'menu_data' => $menu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','tbMenu_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Menu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idMenu' => $row->idMenu,
		'namaMenu' => $row->namaMenu,
		'linkMenu' => $row->linkMenu,
		'iconMenu' => $row->iconMenu,
		'isActive' => $row->isActive,
		'isParent' => $row->isParent,
	    );
            $this->template->load('template','tbMenu_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('menu/create_action'),
	    'idMenu' => set_value('idMenu'),
	    'namaMenu' => set_value('namaMenu'),
	    'linkMenu' => set_value('linkMenu'),
	    'iconMenu' => set_value('iconMenu'),
	    'isActive' => set_value('isActive'),
	    'isParent' => set_value('isParent'),
	);
        $this->template->load('template','tbMenu_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'namaMenu' => $this->input->post('namaMenu',TRUE),
		'linkMenu' => $this->input->post('linkMenu',TRUE),
		'iconMenu' => $this->input->post('iconMenu',TRUE),
		'isActive' => $this->input->post('isActive',TRUE),
		'isParent' => $this->input->post('isParent',TRUE),
	    );

            $this->Menu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('menu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Menu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('menu/update_action'),
		'idMenu' => set_value('idMenu', $row->idMenu),
		'namaMenu' => set_value('namaMenu', $row->namaMenu),
		'linkMenu' => set_value('linkMenu', $row->linkMenu),
		'iconMenu' => set_value('iconMenu', $row->iconMenu),
		'isActive' => set_value('isActive', $row->isActive),
		'isParent' => set_value('isParent', $row->isParent),
	    );
            $this->template->load('template','tbMenu_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idMenu', TRUE));
        } else {
            $data = array(
		'namaMenu' => $this->input->post('namaMenu',TRUE),
		'linkMenu' => $this->input->post('linkMenu',TRUE),
		'iconMenu' => $this->input->post('iconMenu',TRUE),
		'isActive' => $this->input->post('isActive',TRUE),
		'isParent' => $this->input->post('isParent',TRUE),
	    );

            $this->Menu_model->update($this->input->post('idMenu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Menu_model->get_by_id($id);

        if ($row) {
            $this->Menu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('menu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('namaMenu', 'namamenu', 'trim|required');
	$this->form_validation->set_rules('linkMenu', 'linkmenu', 'trim|required');
	$this->form_validation->set_rules('iconMenu', 'iconmenu', 'trim|required');
	$this->form_validation->set_rules('isActive', 'isactive', 'trim|required');
	$this->form_validation->set_rules('isParent', 'isparent', 'trim|required');

	$this->form_validation->set_rules('idMenu', 'idMenu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-07 19:50:25 */
/* http://harviacode.com */