 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login extends CI_Controller {
 
    public function __construct(){
            parent::__construct();
            $this->load->model('m_account');
        }

    public function aksi_login(){
            
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $where = array(
                     'username' => $username,
                    'password' => md5($password)
                    );
                $data = $this->m_account->get_where("users", $where);
                $cek = $this->m_account->login("users",$where);
                if($cek > 0){
         
                    $data_session = array(
                        'username' => $username,
                        'id_user' => $data[0]->id_user,
                        'status' => "logged"
                        );
         
                    $this->session->set_userdata($data_session);
         
                    redirect('dashboard');
         
                }else{
                    $url=base_url();
                    echo "<script languange='javascript'>
                        alert('Username Atau Password Salah!');
                        javascript:history.go(-1);
                        </script>";
                }
        }

    public function index(){
            $this->load->view('account/v_login');
        }

    public function logout(){
        $this->session->sess_destroy();
        redirect('beranda');   
    }
 }