<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('dao_model', 'dao');
    }

	public function index()
	{
        $data['materiels'] = $this->dao->select_all('materiels');
		$this->load->view('ajout_besoin', $data);
	}

    public function ajout_besoin(){
        $id_materiel = $this->input->post('materiel');
        $quantite_materiel = $this->input->post('quantite');
        $user_info = $this->session->userdata('user_info');

        $to_insert = [
            'id_materiel' => $id_materiel,
            'quantite_materiel' => $quantite_materiel,
            'id_user' => $user_info['id']
        ];
        
        $inserted = $this->dao->insert_into('besoins', $to_insert);

        if($inserted){
            redirect('home_controller');
        }
    }

    public function liste_besoins(){
        $condition = [
            'resolu' => false
        ];

        $data['besoins'] = $this->dao->select_where('v_besoins', $condition);
        $data['full_besoins'] = $this->dao->select_all('v_besoins_grouped');

        $this->load->view('liste_besoins', $data);
    }

}
