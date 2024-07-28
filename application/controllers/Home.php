<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Fiqs Internship ';
		$this->load->view('front-end/content-head',$data);
		$this->load->view('front-end/content-nav');
		$this->load->view('content_all');
		$this->load->view('front-end/content-footer');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */