<?php 
class Members extends Ci_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('members');
	}
	public function addinfos(){
		$details = $this->input->post();
		//print_r($details);die;
		$val = $this->Common->savecust($details);
		if($val){
			echo '<script> alert("Added successfully."); window.location.replace("'.base_url().'members");</script>';
		} else {
			echo '<script> alert("Please try again later."); window.location.replace("'.base_url().'members");</script>';
		}
	}
}