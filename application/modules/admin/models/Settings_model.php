<?php

class Settings_model extends CI_Model {
        
    /**
     * get_reg_users()
     * get the registered users list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_cantact_us_list() {
        $tableName = 'contact_us';
        $columns   = array("$tableName.contact_us_id",
                           "$tableName.refno",
                           "$tableName.name",
                           "$tableName.mobile_no",                         
                           "$tableName.email",
						   "$tableName.messege",
                           "$tableName.contact_us_id"
                          );
        $indexId     = '$tableName.contact_us_id';
        $columnOrder = "$tableName.contact_us_id";
        $orderby     = "";
        $joinMe      = "";
        $condition   = " WHERE $tableName.contact_us_id != '' ";
        return $this->db->drawdatatable($tableName, $columns, $indexId, $joinMe, $condition, $orderby);
    }
      
    /**
     * get_careers_list()
     * Get careers list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_careers_list(){
        $tableName = 'apply_for_job';
        $columns   = array("$tableName.job_id",
                           "$tableName.name",
                           "$tableName.email",
                           "$tableName.mobile",                         
                           "$tableName.jobfor",
						   "$tableName.resume",
                           "$tableName.msg",
                           "$tableName.job_id"
                          );
        $indexId     = '$tableName.job_id';
        $columnOrder = "$tableName.job_id";
        $orderby     = "";
        $joinMe      = "";
        $condition   = " WHERE $tableName.job_id != '' ";
        return $this->db->drawdatatable($tableName, $columns, $indexId, $joinMe, $condition, $orderby);
    }
      
    /**
     * get_send_enquiry_list()
     * Get send enquiry list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_send_enquiry_list() {
        $tableName = 'enquiry';
        $columns   = array("$tableName.en_id",
                           "$tableName.name",
                           "$tableName.email",
                           "$tableName.mobile",                         
                           "$tableName.course",
                           "$tableName.msg",
                           "$tableName.en_id"
                          );
        $indexId     = '$tableName.en_id';
        $columnOrder = "$tableName.en_id";
        $orderby     = "";
        $joinMe      = "";
        $condition   = " WHERE $tableName.en_id != '' ";
        return $this->db->drawdatatable($tableName, $columns, $indexId, $joinMe, $condition, $orderby);
    }
    /**
     * get_settings()
     * get the Settings
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_settings() {
        $res = $this->db->get('settings');
        return $res;
    }
    
}

?>