<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['sermons'] = $this->sermons_model->get_sermons();
		$data['visits'] = $this->visitors_model->get_visits();
		$data['news'] = $this->news_model->get_news();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/dashboard-footer');
	}

	public function events_list()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['event'] = $this->event_model->get_events();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/event_list', $data);
		$this->load->view('templates/dashboard-footer');
	}

	public function event_add_item()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$this->load->helper(array('form','url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('brief', 'Brief Description', 'required');

		$config_image = array(
			'upload_path' => './static/img/events',
			'allowed_types' => 'jpg|jpeg|png|bmp',
			'create_thumb' => TRUE,
			'maintain_ratio' => TRUE,
			'overwrite' => TRUE,
			'max_size' => 2048,
			'max_width' => 1024,
			'max_height' => 786,
			'filename' => url_title($this->input->post('userfile'))
		);

		$this->load->library('upload', $config_image);

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/dashboard-header');
			$this->load->view('dashboard/event_add');
			$this->load->view('templates/dashboard-footer');
		}else 
		{
			$data = array('upload_data' => $this->upload->data());

			$event = array(
				'name' => $this->input->post('name'),
				'brief' => $this->input->post('brief'),
				'description' => $this->input->post('description'),
				'date' => $this->input->post('date'),
				'time' => $this->input->post('time'),
				'img_url' => $data['upload_data']['file_name'],
			);
			$this->load->model('event_model');
			$this->event_model->insert($event);
	
			$data['event'] = $this->event_model->get_events();
			redirect('events-list');
		}
	}

	public function event_add()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['event'] = $this->event_model->get_events();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/event_add', $data);
		$this->load->view('templates/dashboard-footer');
	}

	public function gallery_list()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['gallery'] = $this->gallery_model->get_gallery();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/gallery_list', $data);
		$this->load->view('templates/dashboard-footer');
	}

	public function gallery_item_add()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/gallery_item_add');
		$this->load->view('templates/dashboard-footer');
	}

	public function news_list()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['news'] = $this->news_model->get_news();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/news_list', $data);
		$this->load->view('templates/dashboard-footer');
	}

	public function news_add()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/news_add');
		$this->load->view('templates/dashboard-footer');
	}

	public function sermons_list()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$data['sermons'] = $this->sermons_model->get_sermons();
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/sermons_list', $data);
		$this->load->view('templates/dashboard-footer');
	}

	public function sermon_add()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		
		$this->load->view('templates/dashboard-header');
		$this->load->view('dashboard/sermon_add');
		$this->load->view('templates/dashboard-footer');
	}

}
