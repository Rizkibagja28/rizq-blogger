<?php
class Edit_artikel extends CI_Controller {
     function __construct(){
         parent::__construct();
         //$this->simple_login->cek_login();
     }
 
     //Load Halaman dashboard
     public function index() {
     		$id_user = $this->session->userdata('id_user'); //-----------------------------------GANTI
			$where = array('id_user' => $id_user);
			$data['users'] = $this->m_account->get_where('users', $where);
            $this->load->view('account/v_edit_artikel',$data);
     }
	
	public function aksi_edit(){
			if(isset($_POST['aksi'])){
				$id_user = $this->session->userdata('id_user'); //------------------------------------------GANTIIIIIII
                $judul=$this->input->post('judul');
                $isi=$this->input->post('isi');

	            $where = array('id_artikel' => $this->input->post('id_artikel'));

		 				
		 				$data = array(
		 					'judul' => $judul,
		 					'isi' => $isi,
		 				);


		                $this->M_account->update_data('databaseblog', $where, $data); //simpan artikel ke database
		                $url=base_url();
		 				echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/Beranda/beranda'
						</script>";
		                //redirect('index.php/dashboard/artikel');
		           
		                //redirect('index.php/dashboard/artikel/edit_artikel');
		                // echo "gagal upload";
		            
			                     
		        }else{
	                $judul=$this->input->post('judul');
	                $isi=$this->input->post('isi');
	                

		        	$string=preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*()"-_+$@;<>]/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
		            $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
		            $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
		            $slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug
		            $data = array(
		 					'judul' => $judul,
		 					'isi' => $isi,
		 				);
		 			$this->M_account->update_data('databaseblog', $where, $data); //simpan artikel ke database
		 			$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/Beranda'
						</script>";
	        }
		}
	}