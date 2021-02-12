<?php
class Home extends Ci_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$detail['employees'] = $this->Common->members();
		$this->load->view('home', $detail);
	}

}