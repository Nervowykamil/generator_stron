<?php


class Site_model extends CI_Model {
	
	public $title;
	public $content;
	public $html;
	
	public function __construct()
	{
			// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function getName()
	{
		return "name";
	}
	
	
	public function getSites()
	{		
		$this->db->from('sites');
		
		$query = $this->db->get();
		
        return $query->result();
	}
	
	public function getSite($id)
	{		
		$this->db->from('sites');
		
		$query = $this->db->where('id', $id)->get();
		
        return $query->row();
	}
	
	public function updateSite($id, $data)
	{
		$this->db->update('sites', $data, array('id' => $id));
	}
	
}