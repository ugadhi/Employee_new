<?php
class Adddetails extends Ci_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['emps'] = $this->Common->getemployees();
		$this->load->view('adddetails', $data);
	}
	public function store(){
		$employee = $this->input->post('employee');
		$body_temparature = $this->input->post('body_temparature');
		$blood_preasure = $this->input->post('blood_preasure');
		$respiration = $this->input->post('respiration');
		$glucose = $this->input->post('glucose');
		$heart = $this->input->post('heart');
		$oxigen = $this->input->post('oxigen');
		$electro = $this->input->post('electro');

		$data = array(
			'employee' => $employee,
			'body_temparature' => $body_temparature,
			'blood_preasure' => $blood_preasure,
			'respiration' => $respiration,
			'glucose' => $glucose,
			'heart' => $heart,
			'oxigen' => $oxigen,
			'electro' => $electro,
		);

		$val = $this->Common->storedetails($data);
		if($val){
			
			echo '<script> alert("Added successfully."); window.location.replace("'.base_url().'adddetails");</script>';
		}
		else{
			echo '<script> alert("Please try again later."); window.location.replace("'.base_url().'adddetails");</script>';
		}
	}
}