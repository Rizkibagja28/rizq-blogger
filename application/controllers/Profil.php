<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Profil extends CI_Controller {

 	function __construct(){
			parent::__construct();

			$this->load->model('M_account');
		}
     
     //Load Halaman dashboard
     public function index() {
        	
        	
        	$id_user = $this->session->userdata('id_user'); //-----------------------------------------------------------------GANTI
			$where = array('id_user' => $id_user);
			$data['users'] = $this->M_account->get_where('users', $where);
	        $this->load->view('account/v_profil');
     }
 }