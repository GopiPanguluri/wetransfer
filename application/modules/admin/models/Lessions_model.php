<?php

class Lessions_model extends CI_Model {
        
    /**
     * get_reg_users()
     * get the registered users list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_lessions_list() {
        $tableName = 'lessions';
        $tableName1 = 'chapters';
        $tableName2 = 'programs';
        $columns   = array("$tableName.lession_id",
                           "$tableName.lession_name",
                           "$tableName1.chapter_name",
                           "$tableName2.program_name",
                           "$tableName.added_date",
                           "$tableName.status",
                           "$tableName.lession_id"
                          );
        $indexId     = '$tableName.lession_id';
        $columnOrder = "$tableName.lession_id";
        $orderby     = "";
        $joinMe      = "left join $tableName1 on $tableName.chapter_id = $tableName1.chapter_id left join $tableName2 on $tableName.program_id = $tableName2.program_id";
        $condition   = " WHERE $tableName.lession_id!= '' ";
        //$condition   = " WHERE $tableName.lession_id!= '' AND $tableName.sc_id= '".$_SESSION['admin_user_id']."' ";
        $res = $this->db->drawdatatable($tableName, $columns, $indexId, $joinMe, $condition, $orderby);
        //echo '<pre>'; print_r($res);exit;
        return $res;
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