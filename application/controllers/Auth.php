<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('auth/index');
	}
	public function login(){
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('auth/index');
		}else {

			
			$email = $this->input->post('email');
			$enc_password = md5($this->input->post('password'));

			$user_id = $this->user_model->login($email, $enc_password);

			if(!empty($user_id)){
				//Create Session

				$this->session->set_userdata('username', $user_id['username']);
				$this->session->set_userdata('name', $user_id['name']);
				$this->session->set_userdata('surname', $user_id['surname']);
				$this->session->set_userdata('profile_img', $user_id['profile_img']);
				$this->session->set_userdata('role', $user_id['role']);
				$this->session->set_userdata('logged_in', true);
				$this->session->set_flashdata('login_successful','Login in Successful');
				$data['user'] = $user_id;
				
				redirect('dashboard', $data);
			}else{
				$this->session->set_flashdata('login_failed','Login in invalid check email & password');
				redirect('auth');
			}

			redirect('dashboard');
			
		}
	}

	public function logout(){
		$this->load->library('session');
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('email');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('surname');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('username');
		
		$this->session->set_flashdata('user_logout','You are now logged out');
		redirect('auth');
	}
	
	public function register(){
		$this->load->library('form_validation');
		$this->load->library('session');
    	$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password', 'required');
		$this->form_validation->set_rules('password2','Confirm Password','matches[password]');

		if($this->form_validation->run() === FALSE){;
			$this->load->view('auth/register');
		}else{
			//Encrpyt password with MD5 standards
			$enc_password = md5($this->input->post('password'));

			$this->user_model->register($enc_password);

			$this->session->set_flashdata('user_registered','You are now Registered and Login');

			redirect('auth');
		}
	}
}
