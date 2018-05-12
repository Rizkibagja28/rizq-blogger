<?php
	Class Image extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			
			$this->load->library('upload');
			$this->load->model('m_account');
		}
		
		function index (){
			$data['users'] = $this->m_account->get_data('users')->result();
			$data['daftar_gambar'] = $this->m_account->get_data_image('daftar_gambar','id_gambar');
			$this->load->view('account/v_galeri_image', $data);
		}

		function aksi_simpan(){
			$config['upload_path'] = './assets/galeri/gambar/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload
	 
	        $this->upload->initialize($config);
	        if(!empty($_FILES['berkas']['name'])){
	            if ($this->upload->do_upload('berkas')){
	                $gbr = $this->upload->data();
	                //Compress Image
	                $config['image_library']='gd2';
	                $config['source_image']='./assets/galeri/gambar/'.$gbr['file_name'];
	                $config['create_thumb']= FALSE;
	                $config['maintain_ratio']= FALSE;
	                $config['quality']= '60%';
	                $config['width']= 350;
	                $config['height']= 350;
	                $config['new_image']= './assets/galeri/gambar/'.$gbr['file_name'];
	                $this->load->library('image_lib', $config);
	                $this->image_lib->resize();
	 
	                $gambar=$gbr['file_name']; //ambil nama file yang terupload enkripsi
	                $id_user = $this->session->userdata('id_user'); //----------------------------------------GANTIIIIIII
	                $judul_gambar=$this->input->post('judul');
	                date_default_timezone_set('Asia/Jakarta');
	 				$tanggal = date('Y-m-d');

	 				$data = array(
	 					'id_user' => $id_user,
	 					'gambar' => $gambar,
	 					'judul_gambar' => $judul_gambar
	 				); 

	 				$this->m_account->add_data('daftar_gambar', $data); //simpan artikel ke database
	                $url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Berhasil Disimpan!');
	            		document.location='$url/index.php/image'
						</script>";



	        	}else{
	            	$url=base_url();
		 			echo "<script languange='javascript'>
	            		alert('Gagal Disimpan!');
	            		document.location='$url/index.php/image'
						</script>";
	                //redirect ke blog jika gambar gagal upload
	                //redirect('index.php/dashboard/artikel/add_artikel');
	                // echo "gagal upload";
	            }
	                      
	        }else{
	        	$url=base_url();
	 			echo "<script languange='javascript'>
            		alert('Gagal Disimpan!');
            		document.location='$url/index.php/image'
					</script>";
	            //redirect ke blog jika gambar kosong
	        	//echo "gagal upload gambar kosong";
	            //redirect('index.php/dashboard/artikel/add_artikel');
	        }       
		}
	}
?>