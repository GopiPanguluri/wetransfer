<?php class Projects extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->model('projects_model');
        $this->load->model('common/common_model');
        $this->load->model('common/common_functions_model');
	}

	public function index(){        

      $data['category'] = $this->common_model->get_cat_list();
      $this->load->view('common/header');
	  $this->load->view('projects/projects',$data);
	  $this->load->view('common/footer');
	}


    
    public function projects_list(){

      $search_title=$this->input->get('q');	
      if($this->input->get('category')!=''){
        $pre_id = $this->input->get('category');
      }else{
        $pre_id = '0';
      }
	  $data['category'] = $this->common_model->get_cat_list();
      //echo '<pre>'; print_r($data);exit;
      $data['start'] = 0;
      $data['limit'] = 10;
      $data['search_title']=$search_title;
	  $data['list_category'] = $this->projects_model->category_sub_list($pre_id);
      //echo '<pre>'; print_r($data);exit;
      $data['list_projects'] = $this->projects_model->projects_list($data);
      //echo $this->db->last_query();
      //echo '<pre>'; print_r($data['list_projects']);exit;        
      //echo '<pre>'; print_r($data['list_projects']);exit;
      $this->load->view('projects/projects_header',$data);
	  $this->load->view('projects/projects_page',$data);
	  $this->load->view('projects/projects_footer');
	}
    
	public function get_items_projects(){
	  //echo '<pre>'; print_r($_POST);exit;
      $pre_id = $this->input->get('category');
      if(isset($pre_id)){
        $pre_id = $this->input->get('category');
      }else{
        $pre_id = 0;
      }
      $_POST['limit'] = 10;
	  $data['category'] = $this->common_model->get_cat_list($pre_id);    
      if($pre_id==0){          
    	  $data['list_category'] = $this->projects_model->category_sub_list();
          $data['list_projects'] = $this->projects_model->projects_list($_POST);
      }else{
          $_POST['id'] = $pre_id;
    	  $data['list_category'] = $this->projects_model->category_sub_list($pre_id);
          $data['list_projects'] = $this->projects_model->projects_list($_POST);
          $data['product_cat_id'] = $this->projects_model->sub_category_list($pre_id);
      }
      $projects_count = $this->projects_model->projects_count($_POST);
      //echo '<pre>'; print_r($data);exit;
      $temp = $this->load->view('common/template-projects',$data,true);
      $array_data = array('total_count' => $projects_count,'count' => count($data['list_projects']), 'start' => $_POST['start'] + $_POST['limit'], 'items' => $temp);
      //echo '<pre>'; print_r($array_data);exit;
      echo json_encode($array_data);exit;
	}
    
	public function projects_query(){
	    $q=$this->input->get('q');
		//echo '<pre>'; print_r($q);exit;
        if($q!==''){
          $ids = "1,3";
          $category = $this->common_model->get_cat_list($ids);
          $data['category'] = array(''=>'Select one');
          foreach($category as $row):
             $data['category'][$row['c_id']] = $row['c_name'];
          endforeach;          
		  $data['list_category'] = $this->projects_model->category_sub_list();
          $data['list_projects'] = $this->projects_model->projects_list();          
          $this->load->view('projects/projects_header',$data);
    	  $this->load->view('projects/projects_page',$data);
    	  $this->load->view('projects/projects_footer');
		}else{
		  redirect('home');
		}
	}
    
    public function project_details($id){
       $data = ''; 
	   if($id!=''){
        $info_prods = array(
            'select_fields' => '',
            'where' => array(
                'r_id' => $id
            ),
            'tablename' => 'requirements'
        );
        $data['product_details'] = $this->common_model->get_individual_details($info_prods);
        $data['type_categories'] = array('0'=>'Select one') + $this->common_functions_model->get_type_categories();
        //echo $this->db->last_query();
        //echo '<pre>';print_r($data);exit;
		$this->load->view('projects/projects_header');
		$this->load->view('projects/project-detail',$data);		
		$this->load->view('projects/projects_footer');
      }else{
        redirect('home');
      }
	}
    
    public function interior_design(){
		$this->load->view('common/header');
		$this->load->view('interior-design');		
		$this->load->view('common/footer');
	}
}