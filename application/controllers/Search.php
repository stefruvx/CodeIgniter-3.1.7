<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {
  var $TPL;
  public function __construct()
  {
    parent::__construct();
  }
  
  public function index()
  {
	$this->db->select("*");$this->db->from("phonebook");
	$query = $this->db->get();	
	$this->TPL = array("active" => "search", "records" => $query->result());
    $this->template->show('search', $this->TPL);
  }  
  
  public function getRecords() {
	$searchID = addslashes($this->input->get_post('searchID'));
	if($searchID) { 
		$query = $this->db->query("SELECT * from phonebook WHERE fname LIKE '%$searchID%' OR lname LIKE '%$searchID%' OR phone LIKE '%$searchID%' OR email LIKE '%$searchID%'");
		$this->output->set_content_type('application/json');
		echo json_encode((array)$query->result());
	} else {
		$query = $this->db->query("SELECT * from phonebook");
		echo json_encode((array)$query->result());
	}
  }
}
?>