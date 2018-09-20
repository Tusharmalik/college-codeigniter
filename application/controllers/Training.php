<?php
class Training extends CI_Controller {

        public function view($page = 'overview')
        {
            if ( ! file_exists(APPPATH.'views/training_placement/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('training_placement/'.$page);
        $this->load->view('templates/footer_normal');
        }
}