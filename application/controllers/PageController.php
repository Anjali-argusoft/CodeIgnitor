<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
    public function demo()
	{
		$this->load->model('StudentModel', 'stud');
        $data['title'] = $this->stud->demo();
        $data['body'] = "This is body for demo page";
        $this->load->view('demopage', $data);
    }
    public function blog($url = '')
	{ 
        echo $url;
        $this->load->view('blog');
    }
}