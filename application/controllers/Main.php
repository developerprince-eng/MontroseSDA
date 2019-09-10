<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require '././vendor/autoload.php';
include_once '././loadenv.php';

class Main extends CI_Controller {
	public function index()
	{
		$this->visitors_model->update();
		$data['gallery'] =	$this->gallery_model->get_gallery_8();
		$data['sermon'] = $this->sermons_model->get_last_sermon();
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

	public function donate(){
		$env = new LoadEnv;

		$env_variable = $env->Getdotenv();
		$paynow_integration_id = $env_variable['paynow_integration_id'];
		$paynow_key = $env_variable['paynow_key'];

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		$paynow = new Paynow\Payments\Paynow(
			$paynow_integration_id,
			$paynow_key,
			NULL,
			NULL
		);
		$invoice = 'Invoice'.rand(2, 8);
		$payment = $paynow->createPayment($invoice, $this->input->post('email'));
		$payment->add('Donate', $this->input->post('amount'));
		$response = $paynow->send($payment);
		if($response->sucess()){
			redirect('/church-building');
		}
		redirect('/');
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
