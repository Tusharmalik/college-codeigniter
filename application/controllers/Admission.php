<?php
class Admission extends CI_Controller {

        public function view($page = 'overview')
        {
            if ( ! file_exists(APPPATH.'views/admission/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('admission/'.$page);
        $this->load->view('templates/footer_normal');
        }
}