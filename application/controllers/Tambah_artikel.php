<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Tambah_artikel extends CI_Controller {
     function __construct(){
         parent::__construct();
         //$this->simple_login->cek_login();
     }
 
     //Load Halaman dashboard
     public function index() {
         $this->load->view('account/v_tambah_artikel');
     }

     public function add_artikel(){
			$id_user = $this->session->userdata('id_user'); //-----------------------------------GANTI
			$where = array('id_user' => $id_user);
			$data['users'] = $this->m_account->get_where('users', $where);
			$this->load->view('v_tambah_artikel', $data);
		}
	 public function aksi_simpan(){
			$id_user = $this->session->userdata('id_user');;
			$kategori = $this->input->post('kategori');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$data = array(
	 					'id_user' => $id_user,
	 					'judul' => $judul,
	 					'kategori' => $kategori,
	 					'isi' => $isi,
	 					);
			$this->m_account->add_data('daftar_artikel', $data); //simpan artikel ke database
	                $url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/tambah_artikel'
						</script>";
	        }       
	public function baca_artikel(){
		 	$id_artikel = array('id_artikel' =>  $this->uri->segment(3));
			$data['users'] = $this->m_account->get_data('users')->result();
		 	$data['daftar_artikel'] = $this->m_account->get_where('daftar_artikel', $id_artikel);
			$this->load->view('account/v_baca_artikel', $data);
		}

 }