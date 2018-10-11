<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sites extends CI_Controller {

	public function index()
	{
		$this->load->model('site_model','',true);
		
		$sites = $this->site_model->getSites();
		
		$widok = $this->load->view('sites', array(
			'sites' => $sites,
		), true);
		
		echo $widok;
	}
	
	
	public function show($siteId)
	{
		$this->load->model('site_model','',true);
		
		$site = $this->site_model->getSite($siteId);
		
		echo $site->html;
	}
}
