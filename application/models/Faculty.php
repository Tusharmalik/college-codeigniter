<?php
class Faculty extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function teacher($data = 'computer_science')
    {
        $query = $this->db->get_where('faculty', array('department' => $data));
        return $query->result_array();
    }

}
