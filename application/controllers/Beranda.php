<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Beranda extends CI_Controller {
 
      function __construct(){
			parent::__construct();

			$this->load->model('m_account');
		}

      public function index()
      {
      		$data['users'] = $this->m_account->get_data('users')->result();
			    $data['daftar_artikel'] = $this->m_account->get_data('daftar_artikel')->result();
        	$this->load->view('account/beranda',$data);
      }
 }
 