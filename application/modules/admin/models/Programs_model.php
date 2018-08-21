<?php

class Programs_model extends CI_Model {
        
    /**
     * get_reg_users()
     * get the registered users list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_programs_list() {
        $tableName = 'programs';
        $columns   = array("$tableName.program_id",
                           "$tableName.program_name",
                           "$tableName.program_description",
                           "$tableName.added_date",
                           "$tableName.status",
                           "$tableName.program_id"
                          );
        $indexId     = '$tableName.program_id';
        $columnOrder = "$tableName.program_id";
        $orderby     = "";
        $joinMe      = "";
        if($_SESSION['admin_role_id']!==1&&$_SESSION['admin_role_id']==4){
            $condition   = " WHERE $tableName.program_id!= '' AND $tableName.sc_id= '".$_SESSION['sc_id']."' ";            
        }else{
            $condition   = " WHERE $tableName.program_id!= '' ";
        }
        //$condition   = " WHERE $tableName.program_id!= '' AND $tableName.sc_id= '".$_SESSION['admin_user_id']."' ";
        return $this->db->drawdatatable($tableName, $columns, $indexId, $joinMe, $condition, $orderby);
    }
    
    /**
     * get_classes_list()
     * get Classes List
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_classes_list($id='') {
        $this->db->select('*');
        $this->db->from('sections');
        if($id!=''){
            $this->db->where('sec_id',$id);
        }
        $this->db->order_by('cl_name','ASC');
        $this->db->join('classes', 'sections.cl_id = classes.cl_id');
        $res = $this->db->get()->result_array();
        //echo '<pre>'; print_r($res);exit;
        $school_list = array(''=>'Select One');
        foreach($res as $school):
            $school_list[$school['sec_id']] = $school['cl_name'].'-'.$school['sec_name'];
        endforeach;
        //echo '<pre>'; print_r($school_list);exit;
        return $school_list;
    }
    
    /**
     * insert_id_details
     * Insert Id Details
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    public function insert_id_details($table_name, $data) {
        $result = $this->db->insert($table_name, $data);
        return $this->db->insert_id();
    }
	
	/**
     * update_techer_details
     * @param type $data
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @return type
     */
    public function update_techer_details($data) {		
        $this->db->where($data['where']);
        $result = $this->db->update($data['tablename'], $data['data']);		
        return $this->db->insert_id();
    }
    
}

?>