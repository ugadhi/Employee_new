<?php 

class Common extends Ci_Model{
	public function __construct(){
		parent::__construct();
	}
	public function getusers($email, $password){
		$sql = "select * from users where email='".$email."' and password = '".$password."'";
		$val = $this->db->query($sql);
		return $val->result_array();
	}
	public function getemployees(){
		$sql = "select * from employee";
		$val = $this->db->query($sql);
		return $val->result_array();
	}
	public function getspecificuser($employee){
		$sql = "select * from health where employee='".$employee."'";
		$val = $this->db->query($sql);
		return $val->result_array();
	}
	public function storedetails($data)
	{
		return $this->db->insert('health', $data);
	}
	public function updatehealth($employee, $body_temparature, $blood_preasure, $respiration, $glucose, $heart, $oxigen, $electro){
		$sql = "update health set body_temparature='".$body_temparature."',blood_preasure='".$blood_preasure."',respiration='".$respiration."', glucose='".$glucose."', heart = '".$heart."', oxigen = '".$oxigen."', electro='".$electro."' where employee='".$employee."'";
		return $this->db->query($sql);
	}
	public function health()
	{
		$sql = "SELECT h.*, e.* FROM health h, employee e WHERE e.id=h.employee ORDER BY e.id desc";
		$val = $this->db->query($sql);
		return $val->result_array();
	}
	public function savecust($details){
		return $this->db->insert('employee', $details);
	}
	public function members()
	{
		$sql = "select * from employee order by id desc";
		$val = $this->db->query($sql);
		return $val->result_array();
	}
	public function getuserdetails($uid){
		$sql = "SELECT heart AS y, timestamp AS label FROM health WHERE employee='".$uid."' order by id desc limit 7 ";
		$val = $this->db->query($sql);
		return $val->result_array();
	}
	public function getuser($uid){
		$sql = "SELECT * FROM users WHERE id='".$uid."'";
		$val = $this->db->query($sql);
		return $val->result_array();
	}
	public function getspecificusers($uid){
$sql = "SELECT * FROM employee WHERE id='".$uid."'";
		$val = $this->db->query($sql);
		return $val->result_array();
	}
}