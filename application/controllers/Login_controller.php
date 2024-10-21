<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('dao_model', 'dao');
    }

	public function index()
	{
		$this->load->view('login');
	}

    public function login(){
        $email = $this->input->post('email');
        $pwd = $this->input->post('password');

        $login = [
            'email_user' => $email, 
            'password_user' => $pwd
        ];

        $result = $this->dao->select_where('users', $login);
        if($result != null){
            $this->session->set_userdata('user_info', $result[0]);
            redirect('home_controller');
        }else{
            redirect('login_controller');
        }
    }

    public function disconnect(){
        $this->session->sess_destroy();
        redirect('login_controller');
    }

}
