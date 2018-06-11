<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contacts extends CI_Controller {
  var $TPL;
  public function __construct()
  {
    parent::__construct();
  }
  
	public function index()
  {
	$this->db->select("*");$this->db->from("phonebook");
	$query = $this->db->get();	
	$this->TPL = array("active" => "contacts", "records" => $query->result());
    $this->template->show('contacts', $this->TPL);
  }
  
	public function updateRecord() {
	  $name = $this->input->get_post('name');
	  $val = $this->input->get_post('value');
	  $key = $this->input->get_post('pk');
	  $response = array('success' => true);
	  if(empty($name) || empty($val) || empty($key) || !is_numeric($key)) {
		$response['success'] = false;
		$response['msg'] = 'Server error';
		echo json_encode($response);
	  } else {
		$this->db->where('id', $key);
		$this->db->update('phonebook', array($name => $val));
		echo json_encode($response);
	  }
  }
}
?>