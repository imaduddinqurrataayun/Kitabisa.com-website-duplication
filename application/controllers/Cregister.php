<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cregister extends CI_Controller {
	function __construct(){
		parent::__construct();		
			$this->load->model('modelUser');
	}

	public function index(){
			$this->load->helper('url');
			$this->load->view('register');
	}
	
	function register(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');

		$akunbaru = array(
			'username' => $this->input->post('username'),
			'nama'=>$this->input->post('nama')
		);

		if ($this->form_validation->run() == TRUE) {
			if($this->modelUser->isDuplicate($this->input->post('username'))) {
				$this->session->set_flashdata('cekduplikat', 'email/nomor Whatsapp ini sudah digunakan');
				redirect('Cregister/index');
			} else {
				$this->load->view('registerlanjut');
				$this->session->set_userdata($akunbaru);
			}
		} else {
			redirect('Cregister/index');
		}

	}

	function registerlanjutan(){
		$this->load->view('buatpassword');
	}
	function completeregister(){
		$username = $this->session->userdata('username');
		$nama=$this->session->userdata('nama');
		//$password=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
		$password= $this->input->post('password');
		$this->modelUser->create_user($username,$nama,$password);
		$this->load->view('login');
	}


}
