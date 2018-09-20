<?php
class Campus extends CI_Controller {

        public function view($page = 'academic_complex')
        {
            if ( ! file_exists(APPPATH.'views/campus/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('campus/'.$page);
        $this->load->view('templates/footer_normal');
        }
}