<?php class Products extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('products_model');
        $this->load->model('common/common_model');
        $this->load->model('common/common_functions_model');
	}

	public function index(){
      $ids = "1,3";
      $category = $this->common_model->get_cat_list($ids);
      $data['category'] = array(''=>'Select one');
      foreach($category as $row):
         $data['category'][$row['c_id']] = $row['c_name'];
      endforeach;          
	  $data['list_category'] = $this->products_model->category_sub_list();
      $data['list_companies'] = $this->products_model->products_list();
      //echo '<pre>'; print_r($data['list_companies']);exit;        
      $this->load->view('products/products_header',$data);
	  $this->load->view('products/products_page',$data);
	  $this->load->view('products/products_footer');
	}

	public function products_query(){
	    $q=$this->input->get('q');
		//echo '<pre>'; print_r($q);exit;
        if($q!==''){
          $ids = "1,3";
          $category = $this->common_model->get_cat_list($ids);
          $data['category'] = array(''=>'Select one');
          foreach($category as $row):
             $data['category'][$row['c_id']] = $row['c_name'];
          endforeach;          
		  $data['list_category'] = $this->products_model->category_sub_list();
          $data['list_products'] = $this->products_model->products_list();          
          $this->load->view('products/products_header',$data);
    	  $this->load->view('products/products_page',$data);
    	  $this->load->view('products/products_footer');
		}else{
		  redirect('home');
		}
	}
    
    public function product_details($id){
       $data = ''; 
	   if($id!=''){
        $info_prods = array(
            'select_fields' => '',
            'where' => array(
                'product_id' => $id
            ),
            'tablename' => 'products'
        );
        $data['product_details'] = $this->common_model->get_individual_details($info_prods);
        $data['type_categories'] = array('0'=>'Select one') + $this->common_functions_model->get_type_categories();
        //echo $this->db->last_query();
        //echo '<pre>';print_r($data);exit;
		$this->load->view('products/products_header');
		$this->load->view('products/product-detail',$data);		
		$this->load->view('products/products_footer');
      }else{
        redirect('home');
      }
	}
}