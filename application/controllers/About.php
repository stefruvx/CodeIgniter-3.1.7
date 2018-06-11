<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {
  var $TPL;
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->TPL = array("active" => "about");
    $this->template->show('about', $this->TPL);
  }
}
?>