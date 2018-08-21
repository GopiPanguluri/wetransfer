<?php class Search extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('search_model');
        $this->load->model('common/common_model');
	}

	public function index(){
		$data['list']=$this->search_model->category_list();
		$this->load->view('search/search_header');
		$this->load->view('search/search_page',$data);
		$this->load->view('search/search_footer');
	}

	public function search_query(){
	    $q=$this->input->get('q');
		//echo '<pre>'; print_r($q);exit;
        if($q!==''){
          $data['category'] = $this->common_model->get_cat_list();
		  $data['list_category'] = $this->search_model->category_list();
          $data['list_products'] = $this->search_model->products_list();          
          $this->load->view('search/search_header',$data);
    	  $this->load->view('search/search_page',$data);
    	  $this->load->view('search/search_footer');
		}else{
		  redirect('home');
		}
	}
}