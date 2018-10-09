<?php
class Department extends CI_Controller {

        public function __construct()
        {
        parent::__construct();
        $this->load->model('notice');
        $this->load->model('WhatNew');
        $this->load->model('DepartmentHod');
        $this->load->helper('url_helper');
        }

        public function view($page = 'computer_science')
        {
            if ( ! file_exists(APPPATH.'views/department/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
        $data['notice'] = $this->notice->notice($page);
        $data['what_new'] = $this->WhatNew->what_new($page);
        $data['hod'] = $this->DepartmentHod->hod($page);
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/department_notice', $data);
        $this->load->view('department/'.$page, $data);
        $this->load->view('templates/footer_normal');
        }
}