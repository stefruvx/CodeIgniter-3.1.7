<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
  var $TPL;
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->template->show('home', $this->TPL);
  }
}