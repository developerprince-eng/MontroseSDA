<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$data['gallery'] =	$this->gallery_model->get_gallery();
		$this->load->view('templates/header');
		$this->load->view('main/index', $data);
		$this->load->view('templates/footer');
	}

	public function buildingproject()
	{
		$this->load->view('templates/header');
		$this->load->view('main/building-project');
		$this->load->view('templates/footer');
	}

	public function contact()
	{
		$this->load->view('templates/header');
		$this->load->view('main/contact');
		$this->load->view('templates/footer');
	}

	public function gallery()
	{
		$data['gallery'] = $this->gallery_model->get_gallery();
		$this->load->view('templates/header');
		$this->load->view('main/gallery', $data);
		$this->load->view('templates/footer');
	}
}
