<?php

class Masakan_Model extends CI_Model{

    public function getData(){
        $data = $this->db->get('masakan');
        return $data;
    }
}