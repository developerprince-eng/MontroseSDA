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
			if($this->upload->do_upload('userfile'))
			{
				$file_name = $this->upload->data();
				$day = $this->input->post('day');
				$month = $this->input->post('month');
				$year = $this->input->post('year');
				$event = array(
					'name' => $this->input->post('name'),
					'brief' => $this->input->post('brief'),
					'description' => $this->input->post('description'),
					'date' => $day.' '.$month.' '.$year,
					'time' => $this->input->post('time'),
					'img_url' => $file_name['file_name'],
				);
				$this->load->model('event_model');
				$this->event_model->insert($event);
				redirect('events-list');
			}
		}
	}

	public function event_delete_item($id)
	{
		$this->load->model('event_model');
		$this->event_model->delete($id);
		redirect('events-list');
	}

	public function event_suspend_item($id)
	{	
		$this->load->model('event_model');
		$this->event_model->suspend($id);
		redirect('events-list');
	}

	public function event_approve_item($id)
	{
		$this->load->model('event_model');
		$this->event_model->approve($id);
		redirect('events-list');
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

	public function gallery_add_item()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$this->load->helper(array('form','url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('category', 'Category', 'required');

		$config_image = array(
			'upload_path' => './static/img/gallery',
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
			if($this->upload->do_upload('userfile'))
			{
				$file_name = $this->upload->data();
				$gallery = array(
					'title' => $file_name['file_name'],
					'category' => $this->input->post('category')
				);
				$this->load->model('gallery_model');
				$this->gallery_model->insert($gallery);
				redirect('gallery-list');
			}
		}
	}

	public function gallery_delete_item($id)
	{
		$this->load->model('gallery_model');
		$this->gallery_model->delete($id);
		redirect('gallery-list');
	}

	public function gallery_suspend_item($id)
	{	
		$this->load->model('gallery_model');
		$this->gallery_model->suspend($id);
		redirect('gallery-list');
	}

	public function gallery_approve_item($id)
	{
		$this->load->model('gallery_model');
		$this->gallery_model->approve($id);
		redirect('gallery-list');
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

	public function news_add_item()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$this->load->helper(array('form','url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Name', 'required');
		$this->form_validation->set_rules('brief', 'Brief Description', 'required');

		$config_image = array(
			'upload_path' => './static/img/news',
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
			if($this->upload->do_upload('userfile'))
			{
				$file_name = $this->upload->data();
				$day = $this->input->post('day');
				$month = $this->input->post('month');
				$year = $this->input->post('year');
				$news = array(
					'title' => $this->input->post('title'),
					'brief' => $this->input->post('brief'),
					'content' => $this->input->post('content'),
					'date' => $day.' '.$month.' '.$year,
					'time' => $this->input->post('time'),
					'img_url' => $file_name['file_name'],
				);
				$this->load->model('news_model');
				$this->news_model->insert($news);
				redirect('news-list');
			}
		}
	}

	public function news_delete_item($id)
	{
		$this->load->model('news_model');
		$this->news_model->delete($id);
		redirect('news-list');
	}

	public function news_suspend_item($id)
	{	
		$this->load->model('news_model');
		$this->news_model->suspend($id);
		redirect('news-list');
	}

	public function news_approve_item($id)
	{
		$this->load->model('news_model');
		$this->news_model->approve($id);
		redirect('news-list');
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

	public function sermons_add_item()
	{
		$this->load->library('session');
		if(!$this->session->userdata('logged_in')){
			redirect('auth');
		}
		$this->load->helper(array('form','url'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Name', 'required');

		$config_image = array(
			'upload_path' => './static/pdf/sermons',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE,
			'max_size' => 2048,
			'filename' => url_title($this->input->post('userfile'))
		);

		$this->load->library('upload', $config_image);

		if($this->form_validation->run() === FALSE)
		{
			redirect('sermon_add');
		}else 
		{
			if($this->upload->do_upload('userfile'))
			{
				$file_name = $this->upload->data();
				$day = $this->input->post('day');
				$month = $this->input->post('month');
				$year = $this->input->post('year');
				$sermon = array(
					'title' => $this->input->post('title'),
					'preacher' => $this->input->post('preacehr'),
					'content' => $this->input->post('content'),
					'date' => $day.' '.$month.' '.$year,
					'pdf_url' => $file_name['file_name'],
				);
				$this->load->model('sermons_model');
				$this->sermons_model->insert($sermon);
				redirect('sermons-list');
			}
		}
	}

	public function sermons_delete_item($id)
	{
		$this->load->model('sermons_model');
		$this->sermons_model->delete($id);
		redirect('sermons-list');
	}

	public function sermons_suspend_item($id)
	{	
		$this->load->model('event_model');
		$this->event_model->suspend($id);
		redirect('sermons-list');
	}

	public function sermons_approve_item($id)
	{
		$this->load->model('sermons_model');
		$this->sermons_model->approve($id);
		redirect('sermons-list');
	}

}
