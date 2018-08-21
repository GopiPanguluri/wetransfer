<?php class Projects_model extends CI_Model{

	function category_sub_list($id=''){
		$this->db->select('pro_cat_name,pro_cat_id,parent_id');
		$this->db->from('product_categories');
		$this->db->where('status','0');
        if($id!=0){
          $this->db->where('pro_cat_id',$id);
        }else{
          $this->db->where_not_in('pro_cat_id',array('15','16','17'));
        }
		$this->db->where('parent_id',0);
		$dataset=$this->db->get();
        //echo $this->db->last_query();
//        echo '<pre>'; print_r($dataset->result_array());exit;
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
    
	function sub_category_list($id){
		$this->db->select('pro_cat_name');
		$this->db->from('product_categories');
		$this->db->where('status','0');
        $this->db->where('pro_cat_id',$id);
		$this->db->where('parent_id',0);
		$dataset = $this->db->get()->row_array();
        //echo $this->db->last_query();
        //echo '<pre>'; print_r($dataset);exit;
		return $dataset['pro_cat_name'];
	}
    
    function projects_list($data=''){
        //echo '<pre>'; print_r($data);exit;
		$this->db->select('cd.*,us.name,us.email,us.mobile,us.name,us.c_id');
		$this->db->from('requirements as cd');
		$this->db->where('cd.status','0');
        $this->db->where('cd.add_to_bidding','1');
        if(isset($data['id'])&&$data['id']!=0){
            $this->db->where('us.c_id',$data['id']);
        }else{
            $this->db->where_not_in('us.c_id',array('15','16','17'));
        }
        if(isset($data['search_title'])){
        	$this->db->where('cd.r_title',$data['search_title']);
        }
        if(isset($data)){
            $this->db->limit($data['limit'], $data['start']);
        }


        $this->db->join('users us', 'cd.user_id=us.user_id', 'left');
		$res = $this->db->get();
        //echo $this->db->last_query();
        //echo '<pre>'; print_r($res->result_array());exit;
		return $res->result_array();
	}
    
    function projects_count($data=''){
        //echo '<pre>'; print_r($data);exit;
		$this->db->select('cd.*,us.name,us.email,us.mobile,us.name');
		$this->db->from('requirements as cd');
		$this->db->where('cd.status','0');
        $this->db->where('cd.add_to_bidding','1');
        if(isset($data['id'])&&$data['id']!==''){
            $this->db->where('us.c_id',$data['id']);
        }else{
            $this->db->where_not_in('us.c_id',array('15','16','17'));
        }
        $this->db->join('users us', 'cd.user_id=us.user_id', 'left');
		$res=$this->db->get();
        //echo $this->db->last_query();
        //echo '<pre>'; print_r($res->num_rows());exit;
		return $res->num_rows();
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