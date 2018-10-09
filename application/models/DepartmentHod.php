<?php
class DepartmentHod extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function hod($data = 'computer_science')
    {
        $query = $this->db->get_where('department_hod', array('department' => $data));
        return $query->last_row();
    }

}
