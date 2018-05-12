<?php
	Class Video extends CI_Controller {
		
		function __construct(){
			parent::__construct();

			$this->load->model('m_account');
		}
		
		function index (){
			$data['users'] = $this->m_account->get_data('users')->result();
			$data['daftar_video'] = $this->m_account->get_data_image('daftar_video','id_video');
			$this->load->view('account/v_galeri_video', $data);
		}

		function aksi_simpan(){
			if (isset($_FILES['berkas']['name']) && $_FILES['berkas']['name'] != '') {
		        unset($config);
		        $date = date("ymd");
		        $configVideo['upload_path'] = './assets/galeri/video/';
		        $configVideo['max_size'] = '600000';
		        $configVideo['allowed_types'] = 'avi|flv|wmv|mp4';
		        $configVideo['overwrite'] = FALSE;
		        $configVideo['encrypt_name'] = TRUE;
		        $configVideo['remove_spaces'] = TRUE;
		        $video_name = $date.$_FILES['berkas']['name'];
		        $configVideo['file_name'] = $video_name;

		        $this->load->library('upload', $configVideo);
		        $this->upload->initialize($configVideo);
		        if(!$this->upload->do_upload('berkas')) {
		            echo $this->upload->display_errors();
		        }else{
		            $videoDetails = $this->upload->data();
		            $data['video_name']= $configVideo['file_name'];
		            $data['video_detail'] = $videoDetails;

		            $judul_video = $this->input->post('judul');
		            $id_user = $this->session->userdata('id_user');
		            date_default_timezone_set('Asia/Jakarta');
	 				$tanggal = date('Y-m-d');

		            $data = array(
		            	'judul_video' => $judul_video,
		            	'video' => $videoDetails['file_name'],
		            	'id_user' => $id_user
		            );

		            $this->m_account->add_data('daftar_video', $data);

		            $url=base_url();
		 			echo "<script languange='javascript'>
		        		alert('Berhasil Disimpan!');
		        		document.location='$url/index.php/video'
						</script>";
				        }

		    }else{
		        echo "Please select a file";
		    }
		}

	}
?>