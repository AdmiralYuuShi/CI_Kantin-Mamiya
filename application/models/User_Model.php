<?php 

class User_Model extends CI_Model{

    public function getData(){
        $data = $this->db->get('user');
        return $data;
    }
}