<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    
class Form extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Since this controller is set as the default controller in
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
     
	public function index()
	{        
        $this->load->helper(array('form', 'url'));
        $this->load->database();

		$this->load->library('form_validation');
        $this->form_validation->set_rules('news', 'Aktualności', 'required');
        $this->form_validation->set_rules('sections', 'Sekcje', 'required');
        $this->form_validation->set_rules('staff', 'Kadra', 'required');
        $this->form_validation->set_rules('about', 'O nas', 'required');
        $this->form_validation->set_rules('contact', 'Kontakt', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
}
