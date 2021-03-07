<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class main extends CI_Controller {
		function __construct(){
		parent::__construct();		
			
	}
		public function index(){
			$this->load->helper('url');
			$this->load->view('login');
		}

		public function home(){
			$this->load->helper('url');
			$this->load->view('homepage');
		}

		public function zakat(){
			$this->load->helper('url');
			$this->load->view('zakat');
		}

		public function donasi(){
			$this->load->helper('url');
			$this->load->view('donasi');
		}
	}