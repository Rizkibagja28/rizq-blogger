<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class List_artikel extends CI_Controller {
    function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
         $this->load->model('m_account');
     }
 
     //Load Halaman dashboard
    public function index() {
     	$data['list_artikel'] = $this->m_account->get_data('daftar_artikel')->result();
        $this->load->view('account/v_list_artikel', $data);
     }
    
    function hapus($id){
		$where = array('id_artikel' => $id);
		$this->m_account->delete_data('daftar_artikel',$where);
		$data['list_artikel'] = $this->m_account->get_data('daftar_artikel')->result();
        $this->load->view('account/v_list_artikel', $data);
     }
 }