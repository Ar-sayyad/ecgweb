<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {
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
                 $data['title'] = "Project Grid";
                 $data['desc'] = "Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.";
                $this->load->view('ecgit/projectgrid',$data);
	}
        
            public function projectgrid()
            {
                $data['title'] = "Project Grid";
                 $data['desc'] = "Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.";
                    $this->load->view('ecgit/projectgrid',$data);
            }
            
            public function projectmasonary()
            {
                $data['title'] = "Project Masonary";
                 $data['desc'] = "Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.";
                 $this->load->view('ecgit/projectmasonary',$data);
            }
            public function elements()
            {
                 $data['title'] = "Elements";
                 $data['desc'] = "Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.";
                 $this->load->view('ecgit/elements',$data);
            }
            
            public function typography()
            {
                 $data['title'] = "Typography";
                 $data['desc'] = "Meet the amazing team behind this project and find out more about how we work.";
                 $this->load->view('ecgit/typography',$data);
            }
            
             public function quote()
            {
                 $data['title'] = "Request A Quote";
                 $data['desc'] = "Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.";
                 $this->load->view('ecgit/quote',$data);
            }
            
             public function pricingplan()
            {
                 $data['title'] = "Pricing Plan";
                 $data['desc'] = "Molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto.";
                 $this->load->view('ecgit/pricingplan',$data);
            }
}
