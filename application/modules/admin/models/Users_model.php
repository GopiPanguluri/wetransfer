<?php

class Users_model extends CI_Model {
        
    /**
     * get_users_list()
     * get the users list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_users_list() {
        $tableName = 'users';
        $tableName1 = 'user_roles';
        $columns   = array("$tableName.user_id",
                           "$tableName.username",
                           "$tableName.email",
                           "$tableName.image",
                           "$tableName1.ur_name",                         
                           "$tableName.created_on",
						   "$tableName.status",
                           "$tableName.user_id",
                           "$tableName.role_id"
                          );
        $indexId     = '$tableName.user_id';
        $columnOrder = "$tableName.user_id";
        $orderby     = "";
        $joinMe      = "join $tableName1 on $tableName.role_id=$tableName1.ur_id";
        $condition   = " WHERE $tableName.user_id  != '' ";
        return $this->db->drawdatatable($tableName, $columns, $indexId, $joinMe, $condition, $orderby);
    }   
    /**
     * get_user_roles_list()
     * get the User Roles list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_user_roles_list() {
        $tableName = 'user_roles';
        $columns   = array("$tableName.ur_id",
                           "$tableName.ur_name",                         
                           "$tableName.created_on",
						   "$tableName.status",
                           "$tableName.ur_id"
                          );
        $indexId     = '$tableName.ur_id';
        $columnOrder = "$tableName.ur_id";
        $orderby     = "";
        $joinMe      = "";
        $condition   = " WHERE $tableName.ur_id  != '' ";
        return $this->db->drawdatatable($tableName, $columns, $indexId, $joinMe, $condition, $orderby);
    }   
    /**
     * get_role_list()
     * get Roles list
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_role_list($role_id='') {
        $res = $this->db->get_where('user_roles', array('status' => '0'))->result_array();
        //echo '<pre>'; print_r($res);exit;
        foreach($res as $row){
            if(isset($role_id)&&$role_id=='1'){
                if($row['ur_id']!=1){
                    $roles[$row['ur_id']] = $row['ur_name'];
                }
            }else if(isset($role_id)&&$role_id=='2'){
                if($row['ur_id']!=1&&$row['ur_id']!=2){
                    $roles[$row['ur_id']] = $row['ur_name'];
                }
            }else{
                $roles[$row['ur_id']] = $row['ur_name'];
            }
        }
        //echo '<pre>'; print_r($roles);exit;
        return $roles;
    }
    
    public function insert_details($table_name, $data) {
        $result = $this->db->insert($table_name, $data);
        return $result;
    }
    public function delete_course_sel($table_name, $user_id, $data){
        $this->db->where('user_id',$user_id);
        $this->db->where_not_in('program_id',$data);        
        $result = $this->db->delete($table_name);
        return $result;
    }
    
}

?>