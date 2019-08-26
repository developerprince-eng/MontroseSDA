<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ministries extends CI_Controller {
	public function index()
	{
		$data['sermons'] = $this->sermons_model->get_sermons();
		$this->load->view('templates/header');
		$this->load->view('ministries/index', $data);
		$this->load->view('templates/footer');
	}
}
