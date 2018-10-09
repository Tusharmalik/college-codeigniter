<?php
class WhatNew extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function what_new($data = 'computer_science')
    {
        $query = $this->db->get_where('department_new', array('department' => $data));
        return $query->result_array();
    }
}