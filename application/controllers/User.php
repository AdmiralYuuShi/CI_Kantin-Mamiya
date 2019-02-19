<?php

class User extends CI_Controller{

    public function index(){
        $data['judul'] = "Login";

        $this->load->view('templates/header', $data);
        $this->load->view('user/login', $data);
        $this->load->view('templates/footer');
    }
}