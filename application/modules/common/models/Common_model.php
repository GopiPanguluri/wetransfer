<?php

class Common_model extends CI_Model {
    
    /**
     * get_list
     * get the required list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @return type
     */
    public function get_list($data) {
        if(isset($data['limit'])){
            $this->db->limit($data['limit']);
        }        
        $this->db->select($data['select_fields'])->where($data['where'])->from($data['tablename']); 
        $result = $this->db->get()->result_array();
        return $result;
    }
    
    /**
     * get_individual_details
     * get the record individual details
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     * @return type
     */
    public function get_individual_details($data) {        
        $this->db->select($data['select_fields'])->where($data['where'])->from($data['tablename']); 
        $result = $this->db->get()->row_array();
        return $result;
    }
    
    /**
     * insert_details
     * insert details
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    public function insert_details($table_name, $data) {
        $result = $this->db->insert($table_name, $data);
        return $result;
    }
	
	/**
     * update_details
     * @param type $data
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @return type
     */
    public function update_details($data) {		
        $this->db->where($data['where']);
        $result = $this->db->update($data['tablename'], $data['data']);		
        return $result;
    }
    
    /**
     * delete_record()
     * delete the record
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    public function delete_record($data) {
        $this->db->where($data['where']);
        $result = $this->db->delete($data['tablename']);
        return $result;
    }
	
	/**
     *
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param string $table
     * @param string $where
     * @param integer $ids
     * @return boolean
     */
    public function delete_all_record($table, $where, $ids) {
		//echo '<pre>'; print_r($table.$where.$ids);exit;
        //return $this->db->deleteAll(DB_PREFIX.'courses', "`course_id`", $data);
        if($table=='users'||$table=='catelogues'||$table=='requirement_files'||$table=='requirements'
        ||$table=='parents'||$table=='products'||$table=='news'||$table=='programs'){
            //$this->db->from($table);
            //$this->db->where_in($where,$ids);
            if($table=='requirements'){
                $result = $this->db->query("SELECT * FROM requirement_files WHERE $where IN($ids)");
            }else if($table=='products'){
                $result = $this->db->query("SELECT * FROM catelogues WHERE $where IN($ids)");
            }else{
                $result = $this->db->query("SELECT * FROM $table WHERE $where IN($ids)");
            }
            
            if($result->num_rows()!=0){
                foreach($result->result_array() as $row){
                    if($table=='users'){
                        unlink(FCPATH . 'assets/images/users/' . $row['image']);
                    }else if($table=='catelogues'){
                        unlink(FCPATH . 'assets/images/catelogues/' . $row['catlogues_name']);
                    }else if($table=='requirement_files'){
                        unlink(FCPATH . 'assets/images/requirement_files/' . $row['rf_name']);
                    }else if($table=='requirements'){
                        unlink(FCPATH . 'assets/images/requirement_files/' . $row['rf_name']);
                    }else if($table=='products'){
                        unlink(FCPATH . 'assets/images/catelogues/' . $row['catlogues_name']);
                    }else if($table=='parents'){
                        unlink(FCPATH . 'assets/images/users/' . $row['image']);
                    }else if($table=='programs'){
                        unlink(FCPATH . 'assets/images/programs/' . $row['prg_img_vid_name']);
                    }
                }
            }
            //echo '<pre>'; print_r($result->result_array());exit;
        }
        //unlink(FCPATH . 'assets/images/banners/' . $_POST['old_image']);
        $res = $this->db->query("DELETE FROM $table WHERE $where IN($ids)");
        if($res){
            return $res;
        }
    }
    
	/**
	 * total_count()
	 * total table count
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    public function total_count($info) {
		$this->db->where($info['where']);
		$this->db->from($info['table_name']);
		return $this->db->count_all_results();
	}
    
    /**
     * insert_details_id
     * insert details and return inserted id
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    public function insert_details_id($table_name, $data) {
        $result = $this->db->insert($table_name, $data);
        //return $this->db->last_query();
        return $this->db->insert_id();
    }
    
    /**
     * get_list_category
     * insert details and return inserted id
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    public function get_list_where_in($data) {
        if(isset($data['limit'])){
            $this->db->limit($data['limit']);
        }        
        $this->db->select($data['select_fields'])->where($data['where'])->where_in($data['where_in'])->from($data['tablename']); 
        $result = $this->db->get()->result_array();
        return $result;
    }
    
    /**
     * get_list_category
     * insert details and return inserted id
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    public function get_cat_list() {
        $this->db->select();
        $this->db->where_in('parent_id','0');
        $this->db->from('product_categories');      
        $result = $this->db->get()->result_array();
        $category = array(''=>'Select one');
        foreach($result as $row):
            $category[$row['pro_cat_id']] = $row['pro_cat_name'];
        endforeach;
        //echo $this->db->last_query();
        //echo '<pre>'; print_r($result);exit;
        return $category;
    }
    
      
}

?>