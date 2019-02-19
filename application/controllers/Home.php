<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Home extends CI_Controller{

    public function index(){
        $data['judul'] = "Home";

        $this->load->model('Masakan_Model');
        $data['getMasakan'] = $this->Masakan_Model->getData()->result();
        
        $this->load->view('templates/header', $data); 
        $this->load->view('templates/navbar');
        $this->load->view('templates/sidebar');
        $this->load->view('home/home', $data);
        $this->load->view('home/menu-admin');
        $this->load->view('home/daftar-masakan');
        $this->load->view('templates/footer');
    }
}
