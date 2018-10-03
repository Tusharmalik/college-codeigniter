<?php
class About_institute extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function overview()
    {
        $query = $this->db->query("SELECT * FROM about_overview ORDER BY id DESC LIMIT 1");
        return $query->row_array();
    }

    public function director_desk()
    {
        $query = $this->db->query("SELECT * FROM about_director ORDER BY id DESC LIMIT 1");
        return $query->row_array();
    }

    public function about_management()
    {
        $query = $this->db->query("SELECT * FROM about_management ORDER BY id DESC LIMIT 1");
        return $query->row_array();
    }

    public function imp_functionaries()
    {

    }

    public function aicte()
    {
        $query = $this->db->query("SELECT * FROM about_aicte ORDER BY id DESC");
        return $query->result_array();
    }

    public function mandatory_disclosure()
    {
        
    }

    public function organisational_chart()
    {
        
    }

    public function vision_mission()
    {
        
    }
}
