<?php
class Training_placement extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function overview()
    {
        $query = $this->db->query("SELECT * FROM training_overview ORDER BY id DESC LIMIT 1");
        return $query->row_array();
    }

    public function team()
    {
        $query = $this->db->get('training_team');
        return $query->result_array();
    }

    public function finishing()
    {

    }

    public function department()
    {

    }
}
