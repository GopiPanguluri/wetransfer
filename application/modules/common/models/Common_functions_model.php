<?php

class Common_functions_model extends CI_Model {
    
    /**
     * get_list
     * get the required list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @return type
     */
    public function get_list($data){
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
     * get_product_or_service_list
     * @param type $data
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @return type
     */
    public function get_product_or_service_list($id=''){
        //$id = "'".$id."'";
        $this->db->select('*');
        $this->db->from('product_categories');
        if($id!=''){
            $this->db->where('pro_type',$id);
        }
        $this->db->where('parent_id','0');
        $this->db->order_by('pro_cat_name','DESC');
        $res = $this->db->get()->result_array();
        $country_list = array(''=>'Select One');
        foreach($res as $country):
            $country_list[$country['pro_cat_id']] = $country['pro_cat_name'];
        endforeach;
        //echo $this->db->last_query();
        //echo '<pre>'; print_r($country_list);exit;
        return $country_list;
    }
	
	/**
     * get_product_or_service_list
     * @param type $data
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @return type
     */
    public function get_type_categories($id=''){
        $this->db->select('*');
        $this->db->from('product_categories');
        if($id!=''){
            $this->db->where('pro_cat_id',$id);
        }
        $this->db->where('status','0');
        $this->db->order_by('pro_cat_name','DESC');
        $res = $this->db->get()->result_array();
        $country_list = array(''=>'Select One');
        foreach($res as $country):
            $country_list[$country['pro_cat_id']] = $country['pro_cat_name'];
        endforeach;
        //echo '<pre>'; print_r($country_list);exit;
        return $country_list;
    }
    
    /**
     * get_countries_list()
     * get Countries List
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_countries_list(){
        $this->db->select('*');
        $this->db->from('countries');
        $this->db->order_by('name','ASC');
        $res = $this->db->get()->result_array();
        $country_list = array(''=>'Select One');
        foreach($res as $country):
            $country_list[$country['id']] = $country['name'].' => '.$country['sortname'];
        endforeach;
        //echo '<pre>'; print_r($country_list);exit;
        return $country_list;
    }
    
    /**
     * get_countries_list()
     * get Countries List
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_states_list($id=''){
        $this->db->select('*');
        $this->db->from('states');
        if($id!==''){
            $this->db->where('country_id',$id);
        }
        $this->db->order_by('state_name','ASC');
        $res = $this->db->get()->result_array();
        $country_list = array(''=>'Select One');
        foreach($res as $country):
            $country_list[$country['state_id']] = $country['state_name'];
        endforeach;
        //echo '<pre>'; print_r($country_list);exit;
        return $country_list;
    }
    
    /**
     * get_countries_list()
     * get Countries List
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_cities_list($id=''){
        $this->db->select('*');
        $this->db->from('cities');
        if($id!==''){
            $this->db->where('state_id',$id);
        }
        $this->db->order_by('city_name','ASC');
        $res = $this->db->get()->result_array();
        $country_list = array(''=>'Select One');
        foreach($res as $country):
            $country_list[$country['city_id']] = $country['city_name'];
        endforeach;
        //echo '<pre>'; print_r($country_list);exit;
        return $country_list;
    }    
}

?>