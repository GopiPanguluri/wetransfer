<?php class Realestate extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('projects_model');
        $this->load->model('common/common_model');
        $this->load->model('common/common_functions_model');
	}

	public function index(){        
      $this->load->view('common/header');
	  $this->load->view('real-estate-page');
	  $this->load->view('common/footer');
	}
}