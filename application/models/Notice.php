<?php
class Notice extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function notice($data = 'computer_science')
    {
        $query = $this->db->get_where('department_notice', array('department' => $data));
        return $query->result_array();
    }
}