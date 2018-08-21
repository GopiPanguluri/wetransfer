<?php
class Home_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    
    public function get_programs_list(){
        $this->db->select('*');
        $this->db->from('programs');
        //$this->db->order_by('name','ASC');
        $res = $this->db->get()->result_array();
        //foreach($res as $country):
//            $country_list[$country['id']] = $country['name'].' => '.$country['sortname'];
//        endforeach;
        //echo '<pre>'; print_r($country_list);exit;
        return $res;
    }
    
    public function get_lessions_list($chapter_id=''){
        $this->db->select('*');
        $this->db->from('lessions');
        if($chapter_id!==''){
          $this->db->where('chapter_id',$chapter_id);
        }
        $res = $this->db->get()->result_array();
        //echo '<pre>'; print_r($res);exit;
        return $res;
    }
    
    public function get_program($prgm_id=''){
        $this->db->select('*');
        $this->db->from('programs');
        $this->db->where('program_name',str_replace('-', ' ', $prgm_id));
        $res = $this->db->get()->row_array();
        return $res;
    }
    
    public function get_program_view($prgm_id){
        $this->db->select('*');
        $this->db->from('programs');
        $this->db->where('program_id',$prgm_id);
        $res = $this->db->get()->row_array();
        return $res;
    }
    
    public function get_videos_list($lession_id=''){
        if($lession_id==''){
          $res_ls = array();
          return $res_ls;
        }
        $this->db->select('vid.*');
        $this->db->from('videos as vid');
        if($lession_id!==''){
          $this->db->where('vid.lession_id',$lession_id);
        }
        //$this->db->where('cs.user_id',$_SESSION['home_user_id']);
        //$this->db->join('course_seen as cs', 'cs.video_id = vid.program_id', 'left');                
        $res = $this->db->get()->result_array();
        $res_ls = array();
        foreach($res as $rw_res){
            $this->db->select('seen_status');
            $this->db->from('course_seen');
            $this->db->where('video_id',$rw_res['video_id']);
            $this->db->where('user_id',$_SESSION['home_user_id']);
            $res_sts = $this->db->get()->row_array();
//            echo $this->db->last_query();
//            echo '<pre>'; print_r($res_sts);exit;
            $rw_res['seen_status'] = $res_sts['seen_status'];
            $res_ls[] = $rw_res;
        }
        //echo '<pre>'; print_r($res_ls);exit;                
        return $res_ls;
    }
    
    public function get_pre_video($lession_id='',$video_id=''){
        if($video_id==''||$lession_id==''){
           $res = array();
           return $res;
        }
        $this->db->select('*');
        $this->db->from('videos');
        if($lession_id!==''){
          $this->db->where('lession_id',$lession_id);
        }
        if($video_id!==''){
          $this->db->where('video_id',$video_id);
        }
        $res = $this->db->get()->row_array();
        return $res;
    } 
    
    public function get_chapters_list($prgm_id=''){
        $this->db->select('*');
        $this->db->from('chapters');
        if($prgm_id!==''){
          $this->db->where('programs.program_name',str_replace('-', ' ', $prgm_id));
        }
        $this->db->join('programs', 'programs.program_id = chapters.program_id', 'left');
        $res = $this->db->get()->result_array();
        //echo '<pre>'; print_r($res);exit;
        return $res;
    } 
    
    public function get_profile_data($user_id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $res = $this->db->get()->row_array();
        //echo '<pre>'; print_r($res);exit;
        return $res;
    }
    
    public function get_progress_status($prgm_id='',$_user_id){
        $this->db->select('*');
        $this->db->from('course_seen');
        $this->db->where('videos.program_id',$prgm_id);
        $this->db->where('course_seen.user_id',$_user_id);
        $this->db->where('course_seen.seen_status','1');
        $this->db->join('videos', 'videos.video_id = course_seen.video_id', 'left');
        $res = $this->db->get()->num_rows();
        //echo '<pre>'; print_r($res);exit;
        $this->db->select('*');
        $this->db->from('videos');
        $this->db->where('program_id',$prgm_id);
        //$this->db->where('user_id',$_user_id);
        $res_total_count = $this->db->get()->num_rows();
        $data['completed_marked'] = $res;
        $data['total_count'] = $res_total_count;
        if($res_total_count==0){
            return 0;
        }
        $pre_avg = ($res/$res_total_count)*100;
        //echo '<pre>'; print_r($pre_avg);exit;
        return $pre_avg;
    }
    
    public function get_program_status($prgm_id,$_user_id){
        $this->db->select('*');
        $this->db->from('users_programs');
        $this->db->where('program_id',$prgm_id);
        $this->db->where('user_id',$_user_id);
        $res = $this->db->get()->row_array();
        return $res;
    }
    
    public function get_user_programs($_user_id){
        $this->db->select('program_id');
        $this->db->from('users_programs');
        $this->db->where('user_id',$_user_id);
        $res = $this->db->get();
        return $res;
    }
    
    public function get_search_status($name,$rw_usr_prgs){
        $this->db->select('videos.*,programs.program_name');
        $this->db->from('videos');
        $this->db->like('videos.video_name',$name);
        $this->db->where_in('programs.program_id',$rw_usr_prgs);
        $this->db->join('programs', 'videos.program_id = programs.program_id');
        $res = $this->db->get()->result_array();
        //foreach($res as $country):
//            $country_list[$country['id']] = $country['name'].' => '.$country['sortname'];
//        endforeach;
        //echo '<pre>'; print_r($country_list);exit;
        return $res;
    }
    
    public function get_search_status_chapt($name,$rw_usr_prgs){
        $this->db->select('chapters.*,programs.program_name');
        $this->db->from('chapters');
        $this->db->like('chapters.chapter_name',$name);
        $this->db->where_in('programs.program_id',$rw_usr_prgs);
        $this->db->join('programs', 'chapters.program_id = programs.program_id');
        $res = $this->db->get();
        return $res;
    }
    
    public function get_search_status_less($name,$rw_usr_prgs){
        $this->db->select('lessions.*,programs.program_name,chapters.chapter_name');
        $this->db->from('lessions');
        $this->db->like('lessions.lession_name',$name);
        $this->db->where_in('programs.program_id',$rw_usr_prgs);
        $this->db->join('programs', 'lessions.program_id = programs.program_id');
        $this->db->join('chapters', 'chapters.chapter_id = lessions.chapter_id');
        $res = $this->db->get();
        return $res;
    }
    
    public function set_theme_color_status($data){		
        //$this->db->where(array('user_id'=>$data['user_id']));
        $result = $this->db->update('users', array('user_theme'=>$data['user_theme']));		
        return $result;
    }
    
    public function get_users_week_before(){		
        $week_day = date('Y-m-d',strtotime("+7 day"));
        //echo $week_day;exit;
        $result = $this->db->get_where('users', array('finance_date'=>$week_day))->result_array();
        //echo $this->db->last_query();
        //echo 'yeyyy<pre>'; print_r($result);exit;		
        return $result;
    }
    
    public function get_users_day_before(){		
        $week_day = date('Y-m-d',strtotime("+1 day"));
        //echo $week_day;exit;
        $result = $this->db->get_where('users', array('finance_date'=>$week_day))->result_array();
        //echo $this->db->last_query();
        //echo 'yeyyy<pre>'; print_r($result);exit;		
        return $result;
    }
    
    public function get_users_day_after(){		
        $week_day = date('Y-m-d',strtotime("-1 day"));
        //echo $week_day;exit;
        $result = $this->db->get_where('users', array('finance_date'=>$week_day))->result_array();
        //echo $this->db->last_query();
        //echo 'yeyyy<pre>'; print_r($result);exit;		
        return $result;
    }
}