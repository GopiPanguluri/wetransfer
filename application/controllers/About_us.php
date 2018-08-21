<?php class About_us extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('common/header');
		$this->load->view('about_us');
		
		$this->load->view('common/footer');
	}
}