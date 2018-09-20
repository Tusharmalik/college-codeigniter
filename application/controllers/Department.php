<?php
class Department extends CI_Controller {

        public function view($page = 'computer_science')
        {
            if ( ! file_exists(APPPATH.'views/department/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/department_notice');
        $this->load->view('department/'.$page);
        $this->load->view('templates/footer_normal');
        }
}