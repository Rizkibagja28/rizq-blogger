<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('jenis_kelamin', 'JENIS_KELAMIN','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         $this->form_validation->set_rules('alamat', 'ALAMAT','required');
         $this->form_validation->set_rules('umur', 'UMUR','required');
         $this->form_validation->set_rules('hobby', 'HOBBY','required');
         $this->form_validation->set_rules('cita_cita', 'CITA-CITA','required');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/v_register');
         }else{
 
             $data['nama']   =    $this->input->post('name');
             $data['jenis_kelamin'] =    $this->input->post('jenis_kelamin'); 
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    md5($this->input->post('password'));
             $data['alamat'] =    $this->input->post('alamat');
             $data['umur'] =    $this->input->post('umur');
             $data['hobby'] =    $this->input->post('hobby');
             $data['cita_cita'] =    $this->input->post('cita_cita');
             $this->m_account->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('account/v_login',$pesan);
         }
     }
 }