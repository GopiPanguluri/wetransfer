<?php class Art_work extends CI_Controller{

	public function __construct(){
		parent::__construct();
        $this->load->model('common/common_model');
        $this->load->model('common/common_functions_model');
	}

	public function index(){        
      $this->load->view('common/header');
	  $this->load->view('art-work');
	  $this->load->view('common/footer');
	}
}