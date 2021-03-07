<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Clogin extends CI_Controller {
		function __construct(){
		parent::__construct();		
			$this->load->model('modelUser');
				
		}
		public function index(){
			$this->load->helper('url');
			$this->load->view('login');
		}

		public function lupaPassword(){
			$this->load->helper('url');
			$this->load->view('ubahpassword');
		}

    public function ubahpassword(){
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username', 'username', 'required|trim');
       if ($this->form_validation->run() == TRUE) {
        redirect('Main/home');
      } else {
        redirect('Clogin/lupaPassword');
      }
    }
    public function login(){
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('usernamelogin', 'username', 'required|trim');
      $this->form_validation->set_rules('passwordlogin', 'password', 'required|trim');
      $username = $this->input->post('usernamelogin');
    	$password = $this->input->post('passwordlogin');
    	$query = $this->modelUser->cekakun($username);
      if ($this->form_validation->run() == TRUE) {
    	 if ($query) {
        //$heol = password_hash($password,PASSWORD_DEFAULT);
        //$hash = $query->password;
       //$hehe = "pass".$hash."passyooo ".$password;
        //$this->session->set_flashdata('check', $hehe);
        //redirect('Clogin/index');
        //if(password_verify($password,$hash->hash)){
        $passworddb = $query->password;
        if($password == $passworddb) {
            $userData = array(
           'username' => $query->username,
        	 'nama' => $query->nama,
        	 'password' => $query->password,
        	 'tempatTinggal' => $query->tempatTinggal,
        	 'statusPribadi' => $query->statusPribadi,
        	 'donasi' => $query->donasi,
        	 'salurdonasi' => $query->salurdonasi,
        	 'campaign' => $query->campaign,
        	 'fotoprofil' => $query->fotoprofil,
        	 'logged_in' => TRUE
      	 );
			   // set session untuk user
			   $this->session->set_userdata($userlogin);
         redirect('Main/home');
        } else {
          $this->session->set_flashdata('cekLoginPass', 'Password salah!');
          redirect('Clogin/index');
        }
   	 	  } else {
      		 $this->session->set_flashdata('cekLoginUser', 'Nomor WhatsApp atau Email tidak valid.');
      			redirect('Clogin/index');
      		}
      } else {
      		redirect('Clogin/index');
      	}
    	}
	}
