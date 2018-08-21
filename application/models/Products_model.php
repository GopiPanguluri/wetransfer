<?php class Products_model extends CI_Model{

	function category_sub_list(){
		$this->db->select('pro_cat_name,pro_cat_id,parent_id');
		$this->db->from('product_categories');
		$this->db->where('status','0');
		$this->db->where('parent_id',0);
		$dataset=$this->db->get();
        //echo $this->db->last_query();
        //echo '<pre>'; print_r($dataset);exit;
		$ret_arr=array();
		$i=0;
		foreach($dataset->result() as $row){
			$ret_arr[$i]['cat_name']=$row->pro_cat_name;
			$ret_arr[$i]['cat_id']=$row->pro_cat_id;

			$this->db->select('pro_cat_name,pro_cat_id');
			$this->db->from('product_categories');
			$this->db->where('parent_id',$row->pro_cat_id);

			$subcat_result=$this->db->get();

			$subcatstr='';

			foreach($subcat_result->result() as $r){
				// print_r($r);
				$subcatstr.=$r->pro_cat_id.'~'.$r->pro_cat_name.'|';
			}

			$ret_arr[$i]['subcat']=$subcatstr;

			$i++;
		}
        //echo '<pre>'; print_r($ret_arr);exit;
		return $ret_arr;
	}
    
    function products_list(){
		$this->db->select('cd.*,us.name,us.email,us.mobile,us.name');
		$this->db->from('company_details as cd');
		$this->db->where('cd.status','0');
        $this->db->join('users us', 'cd.user_id=us.user_id', 'left');
		$dataset=$this->db->get();
		$ret_arr=array();
		//foreach($dataset->result_array() as $row){
//			$this->db->select('catlogues_id,catlogues_name,product_id');
//			$this->db->from('catelogues');
//			$this->db->where('product_id',$row['product_id']);
//
//			$subcat_result=$this->db->get()->result_array();
//			$row['prod_images'] = $subcat_result;
//            $ret_arr[$row['product_id']]=$row;
//		}
        //echo '<pre>'; print_r($dataset->result_array());exit;
		return $dataset->result_array();
	}

	function search_results($cat=''){
		$this->db->select('a.user_id,a.username');
		$this->db->from('user_category a');
		$this->db->join('users b','a.user_id=b.user_id');
		$this->db->where('a.cat_id',$cat_id);
		$dataset=$this->db->get();

		return $dataset->result();
	}


}