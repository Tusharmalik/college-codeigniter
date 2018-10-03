<?php

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        }
        public function admin(){
        $this->load->view('admin/admin', array('error' => ' ' ));
        }
        public function do_upload(){
        $config = array(
        'upload_path' => "./uploads/",
        'allowed_types' => "gif|jpg|png|jpeg|pdf",
        'overwrite' => TRUE,
        'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'max_height' => "768",
        'max_width' => "1024"
        );
        $this->load->library('upload', $config);
        if($this->upload->do_upload())
        {
        $data = array('upload_data' => $this->upload->data());
        $this->load->view('admin/upload_success',$data);
        }
        else
        {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('admin/admin', $error);
        }
        }

        public function scroller()
        {
            $this->load->helper('form');
    	$this->load->library('form_validation');

    	$data['title'] = 'scroller';

    	$this->form_validation->set_rules('title', 'Title', 'required');
    	$this->form_validation->set_rules('text', 'Text', 'required');

    	if ($this->form_validation->run() === FALSE)
    	{
        	$this->load->view('templates/header', $data);
        	$this->load->view('news/create');
        	$this->load->view('templates/footer');

    	}
    	else
    	{
        	$this->news_model->set_news();
        	$this->load->view('news/success');
    	}
        }
}