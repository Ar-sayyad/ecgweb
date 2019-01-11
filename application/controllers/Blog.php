<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
        $this->load->library('form_validation');
        //$this->load->model('jsw_model');
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

	public function index()
	{
                 $data['title'] = "Blog List";
                  $data['desc'] = "Meet the amazing team behind this project and find out more about how we work.";
                 $this->load->view('ecgit/bloglist',$data);
	}
        
            public function bloglist()
	{
                 $data['title'] = "Blog List";
                  $data['desc'] = "Meet the amazing team behind this project and find out more about how we work.";
                 $this->load->view('ecgit/bloglist',$data);
	}
        
             public function blogsingle()
	{
                 $data['title'] = "Blog Single";
                  $data['desc'] = "Meet the amazing team behind this project and find out more about how we work.";
                 $this->load->view('ecgit/blogsingle',$data);
	}
        
             public function bloggrid()
	{
                 $data['title'] = "Blog Grid";
                  $data['desc'] = "Meet the amazing team behind this project and find out more about how we work.";
                 $this->load->view('ecgit/bloggrid',$data);
	}
        
             public function blogstandard()
	{
                 $data['title'] = "Blog Standard";
                  $data['desc'] = "Meet the amazing team behind this project and find out more about how we work.";
                 $this->load->view('ecgit/blogstandard',$data);
	}
}
