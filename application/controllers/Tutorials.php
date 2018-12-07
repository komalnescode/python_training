<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorials extends CI_Controller {
	public function tutorial(){
			$data['middel_body1'] = 'tutorial';
			$this->load->view('template1',$data);
	}
}

?>