<?php
class About extends CI_Controller {

        public function __construct()
        {
        parent::__construct();
        $this->load->model('about_institute');
        $this->load->helper('url_helper');
        }

        public function view($page = 'overview')
        {
            if ( ! file_exists(APPPATH.'views/about_institute/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $data[$page] = $this->about_institute->$page();
        // if (empty($data[$page]))
        // {
        //         show_404();
        // }
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('about_institute/'.$page, $data);
        $this->load->view('templates/footer_normal');
        }
}