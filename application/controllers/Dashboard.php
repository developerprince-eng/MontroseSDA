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
