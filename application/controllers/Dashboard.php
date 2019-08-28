<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['event'] = $this->event_model->get_events();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/dashboard-footer');
	}

	public function events_list()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['event'] = $this->event_model->get_events();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/event_list', $data);
		$this->load->view('templates/dashboard-footer');
	}

	public function event_add()
	{
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['event'] = $this->event_model->get_events();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/event_add', $data);
		$this->load->view('templates/dashboard-footer');
	}

}
