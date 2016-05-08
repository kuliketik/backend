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
        $this->template->load('template','menu/menu_list', $data);
    }

    public function read($id)
    {
        $row = $this->Menu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_menu' => $row->id_menu,
		'nama_menu' => $row->nama_menu,
		'link_menu' => $row->link_menu,
		'icon_menu' => $row->icon_menu,
		'active' => $row->active,
		'parent' => $row->parent,
	    );
            $this->template->load('template','menu/menu_read', $data);
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
	    'id_menu' => set_value('id_menu'),
	    'nama_menu' => set_value('nama_menu'),
	    'link_menu' => set_value('link_menu'),
	    'icon_menu' => set_value('icon_menu'),
	    'active' => set_value('active'),
	    'parent' => set_value('parent'),
	);
        $this->template->load('template','menu/menu_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_menu' => $this->input->post('nama_menu',TRUE),
		'link_menu' => $this->input->post('link_menu',TRUE),
		'icon_menu' => $this->input->post('icon_menu',TRUE),
		'active' => $this->input->post('active',TRUE),
		'parent' => $this->input->post('parent',TRUE),
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
		'id_menu' => set_value('id_menu', $row->id_menu),
		'nama_menu' => set_value('nama_menu', $row->nama_menu),
		'link_menu' => set_value('link_menu', $row->link_menu),
		'icon_menu' => set_value('icon_menu', $row->icon_menu),
		'active' => set_value('active', $row->active),
		'parent' => set_value('parent', $row->parent),
	    );
            $this->template->load('template','menu/menu_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_menu', TRUE));
        } else {
            $data = array(
		'nama_menu' => $this->input->post('nama_menu',TRUE),
		'link_menu' => $this->input->post('link_menu',TRUE),
		'icon_menu' => $this->input->post('icon_menu',TRUE),
		'active' => $this->input->post('active',TRUE),
		'parent' => $this->input->post('parent',TRUE),
	    );

            $this->Menu_model->update($this->input->post('id_menu', TRUE), $data);
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
	$this->form_validation->set_rules('nama_menu', 'nama menu', 'trim|required');
	$this->form_validation->set_rules('link_menu', 'link menu', 'trim|required');
	$this->form_validation->set_rules('icon_menu', 'icon menu', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');
	$this->form_validation->set_rules('parent', 'parent', 'trim|required');

	$this->form_validation->set_rules('id_menu', 'id_menu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-05-09 06:36:10 */
/* http://harviacode.com */