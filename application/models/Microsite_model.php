<?php class Microsite_model extends CI_Model{

	function category_list(){
		$this->db->select('pro_cat_name,pro_cat_id,parent_id');
		$this->db->from('product_categories');
		$this->db->where('status','1');
		$this->db->where('parent_id',0);
		$dataset=$this->db->get();
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
		return $ret_arr;
	}


}