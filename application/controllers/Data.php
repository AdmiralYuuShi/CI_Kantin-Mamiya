<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Data extends CI_Controller{

    public function index(){
        
        $this->load->model('User_Model');

        $data['user'] = $this->User_Model->getData()->result();
        $data['judul'] = 'Data User';
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('home/menu-admin');
        $this->load->view('data/data-user', $data);
        $this->load->view('templates/footer');
    }

    public function inputUser(){
        $data = array(
            'nama_user' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        $query = $this->db->insert('user', $data);
        if($query){
            $this->session->set_flashdata('info','Berhasil Ditambahkan!');
            redirect('data');
        }
    }
}