<?php
class About extends CI_Controller {

        public function view($page = 'overview')
        {
            if ( ! file_exists(APPPATH.'views/about_institute/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('about_institute/'.$page);
        $this->load->view('templates/footer_normal');
        }
}