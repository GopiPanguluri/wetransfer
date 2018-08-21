<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
This hook function is responsible for reading all of the settings from
the database into the config array so they can be accessed in controllers
and views with $this->config->item('whatever'); or config_item('whatever');
*/
function pre_controller()
{
 $CI =& get_instance();
 $results = $CI->db->get('settings')->result();
 //echo '<pre>';print_r($results);exit;
 foreach($results as $setting){
    $CI->config->set_item($setting->setting_name, $setting->setting_value);
 }
 $usr_prgms =  array();
 $usr_prgms_ls =  array();
 if(ISSET($_SESSION['home_user_id'])&&$_SESSION['home_user_id']!==''){
    $CI->db->select('program_id');
    $CI->db->from('users_programs');
    $CI->db->where('user_id',$_SESSION['home_user_id']);
    $usr_prgms = $CI->db->get('settings')->result_array();  
 }
 foreach($usr_prgms as $rw_usr_prgms){
    $usr_prgms_ls[$rw_usr_prgms['program_id']] = $rw_usr_prgms['program_id'];
 }
 //echo '<pre>';print_r($usr_prgms_ls);exit;
 $CI->config->set_item('usr_prgms', $usr_prgms_ls);
 
    $CI->db->select('*');
    $CI->db->from('programs');
    $programs = $CI->db->get()->result_array();
    $CI->config->set_item('pre_programs', $programs);
  //echo '<pre>';print_r($sociallinks);exit;
  //    foreach ($res_msg as $msg)
  //    {
  //        $CI->config->set_item($msg->setting_variable, $msg->setting_value);
  //    } //End of foreach
}