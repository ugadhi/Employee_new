<?php
class Login extends Ci_Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('login');
	}
	public function userlogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$val = $this->Common->getusers($email, $password);
		if(count($val) > 0){
			$_SESSION['uid'] = $val['0']['id'];
			$_SESSION['name'] = $val['0']['name'];
			echo '<script> window.location.replace("'.base_url().'home");</script>';
		}
		else{
			echo '<script> alert("Invalid User id."); window.location.replace("'.base_url().'");</script>';
		}
	}
	public function logout(){
		session_unset();
		echo '<script> window.location.replace("'.base_url().'");</script>';
	}
}