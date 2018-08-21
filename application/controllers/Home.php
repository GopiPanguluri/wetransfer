<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 class Home extends MX_Controller{

		function __construct(){
			parent::__construct();
            $this->load->model('common/common_model');
            //modules::run('admin/login/is_admin_logged_in');
		}
        
		public function index(){
            $data['category'] = $this->common_model->get_cat_list();
            //echo '<pre>'; print_r($category);exit;
			$this->load->view('common/header',$data);
			$this->load->view('common/slider');
			$this->load->view('common/index_body');
			$this->load->view('common/index_footer');
		}
        
		public function partner_with_us(){
			$this->load->view('common/header');
			$this->load->view('partner-with-us');
			$this->load->view('common/footer');
		}
}