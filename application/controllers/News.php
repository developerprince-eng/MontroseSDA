<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	public function index()
	{
		$data['news'] = $this->news_model->get_news();
		$this->load->view('templates/header');
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}
}
