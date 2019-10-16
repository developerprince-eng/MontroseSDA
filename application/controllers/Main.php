<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require '././vendor/autoload.php';
include_once '././loadenv.php';

class Main extends CI_Controller {
	public function index()
	{
		$this->visitors_model->update();
		$this->load->view('templates/header');
		$this->load->view('main/index');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('main/about');
		$this->load->view('templates/footer');
	}

	public function contact()
	{
		$this->load->view('templates/header');
		$this->load->view('main/contact');
		$this->load->view('templates/footer');
	}

	public function events()
	{
		$data['gallery'] = $this->gallery_model->get_gallery();
		$this->load->view('templates/header');
		$this->load->view('main/events', $data);
		$this->load->view('templates/footer');
	}

	public function ministry()
	{
		$this->load->view('templates/header');
		$this->load->view('main/ministry');
		$this->load->view('templates/footer');
	}

	public function sermons()
	{
		$data['sermons'] = $this->sermons_model->get_sermons();
		$this->load->view('templates/header');
		$this->load->view('main/sermons', $data);
		$this->load->view('templates/footer');
	}
}
