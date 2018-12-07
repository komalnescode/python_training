<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Python_training extends CI_Controller {
	public function index(){
			$data['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : null;
			$data['middel_body'] = 'index';
			$this->load->view('template',$data);
	}
	public function training(){
			$data['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : null;
			$data['middel_body'] = 'training';
			$this->load->view('template',$data);
	}
	public function tutorial(){
			$data['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : null;
			$data['middel_body'] = 'tutorial';
			$this->load->view('template',$data);
	}
	public function contact(){
			$data['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : null;
			$form_data = $this->input->post();
			
			if (!empty($form_data)){
	      	// or just the username:
		      	$name = $this->input->post("name");
		      	$email = $this->input->post("email");
		      	$mobile = $this->input->post("mobile");
		      	$message = $this->input->post("message");
		      	$contactform=array();
		      		$contactform['name']= $this->input->post("name");
		      		$contactform['email']= $this->input->post("email");
		      		$contactform['mobile']= $this->input->post("mobile");
		      		$contactform['message']= $this->input->post("message");
		      	

			    $inserted_result = $this->Master_model->insertRecord('contact', $contactform);
				if ($inserted_result) {
				 
				 //any code that has to be run after contact us in inserted 
					$config = Array(
					    'protocol' => 'mail',
					    'smtp_host' => 'smtp.googlemail.com',
					    'smtp_port' => 465,
					    'smtp_user' => 'patilkomal07web@gmail.com',
					    'smtp_pass' => 'softwaresolution',
					    'mailtype'  => 'html', 
					    'charset'   => 'utf-8'
					);

					// $this->load->library('email', $config);
					$this->load->library('email');
 					$this->email->initialize($config);
					$this->email->set_newline("\r\n");
					$this->email->from($email, $name);
					$this->email->to('praveen.patil@Webcreintors.com');
					$this->email->cc('');
					$this->email->subject($name);
					$this->email->message($message);

				// Set to, from, message, etc.

					$result = $this->email->send();
		      	}

			}

		      	



			$data['middel_body'] = 'contact';
			$this->load->view('template',$data);
	}
}

?>
