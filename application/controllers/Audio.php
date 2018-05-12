<?php
	Class Audio extends CI_Controller {
		
		function __construct(){
			parent::__construct();
			$this->load->helper(array('form', 'url'));
			
			$this->load->library('upload');
			$this->load->model('m_account');
		}
		
		function index (){
			$data['users'] = $this->m_account->get_data('users')->result();
			$data['daftar_audio'] = $this->m_account->get_data_image('daftar_audio','id_audio');
			$this->load->view('account/v_galeri_audio', $data);
		}

		function aksi_simpan(){
			if (isset($_FILES['berkas']['name']) && $_FILES['berkas']['name'] != '') {
		        unset($config);
		        $date = date("ymd");
		        $configaudio['upload_path'] = './assets/galeri/audio/';
		        $configaudio['max_size'] = '600000';
		        $configaudio['allowed_types'] = 'mp3';
		        $configaudio['overwrite'] = FALSE;
		        $configaudio['encrypt_name'] = TRUE;
		        $configaudio['remove_spaces'] = TRUE;
		        $audio_name = $date.$_FILES['berkas']['name'];
		        $configaudio['file_name'] = $audio_name;

		        $this->load->library('upload', $configaudio);
		        $this->upload->initialize($configaudio);
		        if(!$this->upload->do_upload('berkas')) {
		            echo $this->upload->display_errors();
		        }else{
		            $audioDetails = $this->upload->data();
		            $data['audio_name']= $configaudio['file_name'];
		            $data['audio_detail'] = $audioDetails;

		            $judul_audio = $this->input->post('judul');
		            $id_user = $this->session->userdata('id_user');
		            date_default_timezone_set('Asia/Jakarta');
	 				$tanggal = date('Y-m-d');

		            $data = array(
		            	'judul_audio' => $judul_audio,
		            	'audio' => $audioDetails['file_name'],
		            	'id_user' => $id_user
		            );

		            $this->m_account->add_data('daftar_audio', $data);

		            $url=base_url();
		 			echo "<script languange='javascript'>
		        		alert('Berhasil Disimpan!');
		        		document.location='$url/index.php/audio'
						</script>";
				        }

		    }else{
		        echo "Please select a file";
		    }
		}
	}
?>