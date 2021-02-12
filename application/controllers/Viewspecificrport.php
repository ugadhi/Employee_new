<?php
class Viewspecificrport extends Ci_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$uid = $_GET['id'];
		$data['dataPoints'] = $this->Common->getuserdetails($uid);
		$data['userdetail'] = $this->Common->getuser($_SESSION['uid']);
		$data['empdatails'] = $this->Common->getspecificusers($uid);
		// print_r($data);die;
		$this->load->view('viewspecificrport', $data);
	}
	public function sendmail()
	{
		$semail = $this->input->post('semail');
		$spass = $this->input->post('spass');
		$tomail = $this->input->post('tomail');
		$replay = $this->input->post('replay');
		$message = $this->input->post('message');


$mailconfig = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://mail.andersondiagnostics.info',
			'smtp_port' => 456,
			'smtp_user' => $semail, // change it to yours
			'smtp_pass' => $spass, // change it to yours
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1',
			'wordwrap'  => 'true'
		);
		$msg = $message;
		$this->load->library('email', $mailconfig);
		$this->email->set_newline("\r\n");
		$this->email->from($semail, $replay);
		$this->email->to($tomail);
		
		$this->email->subject("**IMPORTANT NOTIFICATION**");
		$this->email->message($msg);
		$this->email->send();


	}
}