<?php
class Training extends CI_Controller {

        public function __construct()
        {
        parent::__construct();
        $this->load->model('training_placement');
        $this->load->helper('url_helper');
        }

        public function view($page = 'overview')
        {
            if ( ! file_exists(APPPATH.'views/training_placement/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $data[$page] = $this->training_placement->$page();
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('training_placement/'.$page, $data);
        $this->load->view('templates/footer_normal');
        }
}