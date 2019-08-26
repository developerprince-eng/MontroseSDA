<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index()
	{
		$data['event'] = $this->event_model->get_events();
		$this->load->view('templates/header');
		$this->load->view('events/index', $data);
		$this->load->view('templates/footer');
	}
}
