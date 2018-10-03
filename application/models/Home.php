<?php
class Home extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function scroller()
    {
        $query = $this->db->get('scroller');
        return $query->result_array();
    }
    public function id($data = 'scroller')
    {
        $query = $this->db->query("SELECT id FROM $data ORDER BY id ASC LIMIT 1");
        return $query->row();
    }
}
