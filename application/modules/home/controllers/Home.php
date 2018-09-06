<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller  {

	function __construct(){
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('common/common_model');
    }
    
	public function index(){
        modules::run('admin/login/is_home_logged_in');
        $programs = $this->home_model->get_programs_list();
        foreach($programs as $rw_programs){
            $rw_programs['get_pro'] = $this->home_model->get_progress_status($rw_programs['program_id'],$_SESSION['home_user_id']);
            $rw_programs['get_pro'] = round($rw_programs['get_pro']);
            $get_program_sts = $this->home_model->get_program_status($rw_programs['program_id'],$_SESSION['home_user_id']);
            //echo '<pre>'; print_r($get_program_sts);exit;
            if(isset($get_program_sts)&&count($get_program_sts)!==0){
                $rw_programs['get_program_sts'] = '0';
            }else{
                $rw_programs['get_program_sts'] = '1';
            }
            $pr_ls[] = $rw_programs;
        }
        $data['programs'] = $pr_ls;
        //echo '<pre>'; print_r($data);exit;
        $this->load->view('home',$data);
	}
    
	public function products($prgm_id='',$chaptr_id='',$lession_id='',$video_id=''){
        modules::run('admin/login/is_home_logged_in');
        $data['chapters'] = $this->home_model->get_chapters_list($prgm_id);
        if(count($data['chapters'])==0){
            redirect('home');
        }
        //echo '<pre>'; print_r($data['chapters']);exit;
        if($chaptr_id==''){
          if(isset($data['chapters'][0]['chapter_id'])){
            $chaptr_id = $data['chapters'][0]['chapter_id'];
          }else{
            $chaptr_id = '';
          }
        }
        
        //$chapters_ls = array(''=>'Select');
        foreach($data['chapters'] as $rw_chapters){
            $chapters_ls[base_url('home/products/'.$prgm_id.'/'.$rw_chapters['chapter_id'])] = $rw_chapters['chapter_name'];
        }
        $programs = $this->home_model->get_programs_list();
        foreach($programs as $rw_programs){
            $programs_ls[base_url('home/products/'.str_replace(' ', '-', $rw_programs['program_name']))] = $rw_programs['program_name'];
        }
        $lessions = $this->home_model->get_lessions_list($chaptr_id);
        $lessions_ls = array();
        foreach($lessions as $rw_lessions){
            $lessions_ls[base_url('home/products/'.$prgm_id.'/'.$rw_lessions['chapter_id'].'/'.$rw_lessions['lession_id'])] = $rw_lessions['lession_name'];
        }
        
        //echo '<pre>'; print_r($lessions);exit;
        if($lession_id==''){
          if(isset($lessions[0]['lession_id'])){
            $lession_id = $lessions[0]['lession_id'];
          }else{
            $lession_id = '';
          }
        }
        //echo '<pre>'; print_r($lessions_ls);exit;
        $data['videos'] = $this->home_model->get_videos_list($lession_id);
        if($video_id==''){
          if(isset($data['videos'][0]['video_id'])){
            $video_id = $data['videos'][0]['video_id'];
          }else{
            $video_id = '';
          }
        }
        //echo '<pre>'; print_r($lession_id);exit;        
        $data['pre_video'] = $this->home_model->get_pre_video($lession_id,$video_id);
        //echo $this->db->last_query();
        //echo '<pre>'; print_r($data['pre_video']);exit;
        if(isset($data['pre_video'])&&count($data['pre_video'])!==0){
            $data_check_sts = array(
                    'select_fields' => '',
                    'where' => array(
                        'video_id' => $data['pre_video']['video_id'],
                    ),
                    'tablename' => 'course_seen'
            );
            $data['vid_sts'] = $this->common_model->get_individual_details($data_check_sts);   
        }else{
            $data['vid_sts'] = '';
        }
        //echo '<pre>'; print_r($check_vid_sts);exit;
        $data['chapters_ls'] = $chapters_ls;
        $data['programs'] = $programs_ls;
        $data['lessions_ls'] = $lessions_ls;
        $data['prgm_id'] = $prgm_id;
        $data['chaptr_id'] = $chaptr_id;
        $data['prgm_sel_id'] = base_url('home/products/'.$prgm_id);
        $data['chaptr_sel_id'] = base_url('home/products/'.$prgm_id.'/'.$chaptr_id);
        $data['lession_id'] = $lession_id;
        $data['less_sel_id'] = base_url('home/products/'.$prgm_id.'/'.$chaptr_id.'/'.$lession_id);
        $data['video_id'] = $video_id;
        $data['program'] = $this->home_model->get_program($prgm_id);
        $data['get_pro'] = $this->home_model->get_progress_status($data['program']['program_id'],$_SESSION['home_user_id']);
        $data['get_pro'] = round($data['get_pro']);
        //echo '<pre>'; print_r($data['videos']);exit;
        $this->load->view('course',$data);
	}
    
	public function progress(){
      modules::run('admin/login/is_home_logged_in');
      $programs = $this->home_model->get_programs_list();
        foreach($programs as $rw_programs){
            $rw_programs['get_pro'] = $this->home_model->get_progress_status($rw_programs['program_id'],$_SESSION['home_user_id']);
            $rw_programs['get_pro'] = round($rw_programs['get_pro']); 
            $pr_ls[] = $rw_programs;
        }
        $data['programs'] = $pr_ls;
      //echo '<pre>'; print_r($data);exit;
      $this->load->view('progress',$data);
	}
    
	public function progress_product(){
      modules::run('admin/login/is_home_logged_in');
      $programs = $this->home_model->get_programs_list();
        foreach($programs as $rw_programs){
            $rw_programs['get_pro'] = $this->home_model->get_progress_status($rw_programs['program_id'],$_SESSION['home_user_id']);
            $rw_programs['get_pro'] = round($rw_programs['get_pro']); 
            $pr_ls[] = $rw_programs;
        }
        $data['programs'] = $pr_ls;
      $data['chapters'] = $this->home_model->get_chapters_list($data['programs']['0']['program_name']);
      //$programs['0']['program_name']
      //echo '<pre>'; print_r($data['chapters']);exit;
      $this->load->view('progress_product',$data);
	}
    
	//public function profile(){
//      modules::run('admin/login/is_home_logged_in');
//      $this->load->view('progress_product');
//	}

	public function how_to_get_help(){
        modules::run('admin/login/is_home_logged_in');
        $this->load->view('how_to_get_help');
	}
    
	public function qa_calls(){
        modules::run('admin/login/is_home_logged_in');
        $this->load->view('qa_calls');
	}
    
	public function qa_callsas(){
        modules::run('admin/login/is_home_logged_in');
        $this->load->view('qa_calls');
	}
    
	public function refer_a_friend(){
        modules::run('admin/login/is_home_logged_in');
        $this->load->view('refer_a_friend');
	}
    
	public function send_referal_mail(){
        //echo '<pre>';print_r($_POST);exit;
        modules::run('admin/login/is_home_logged_in');
        $from_name = $_SESSION['home_name'].' '.$_SESSION['home_last_name'];
        $user_id = $_SESSION['home_user_id'];
        //echo '<pre>';print_r($name);exit;
        $get_user = $this->home_model->get_profile_data($user_id);
        //echo '<pre>';print_r($get_user);exit;
        $info['subject'] = 'You Are Refferred By '.$name;
        //echo '<pre>';print_r($info['subject']);exit;
            //echo '<pre>';print_r($get_user_rw);exit;
            $message = $this->load->view('common/referal_template', $info, true);
            $this->load->model('common/mail_model');
            $send_ml = $this->mail_model->send_mail($to_user, $info['subject'], $message);
            $to_user = $get_users_week_rw['email'].',';
	}
    
	public function register(){
        $this->load->view('register');
	}
    
    public function change_status_course(){
        //echo '<pre>';print_r($_POST);exit;
        $this->load->model('common/common_model');
        $data = array(
                'select_fields' => '',
                'where' => array(
                    'video_id' => $_POST['video_id'],
                    'user_id' => $_SESSION['home_user_id'],
                ),
                'tablename' => 'course_seen'
        );
        $check_unique = $this->common_model->get_list($data);
        //echo '<pre>';print_r($check_unique);exit;
        if(count($check_unique)==0){
            $info = array(
                'video_id' => $_POST['video_id'],
                'seen_status' => $_POST['seen_status'],
                'user_id' => $_SESSION['home_user_id']
            );
            $result = $this->common_model->insert_details('course_seen', $info);
        }else{
            $info = array(
                'where' => array(
                    'video_id' => $_POST['video_id'],
                ),
                'data' => array(
                    'seen_status' => $_POST['seen_status'],
                    'user_id' => $_SESSION['home_user_id']
                ),
                'tablename' => 'course_seen'
            );
            //echo '<pre>';print_r($info);exit;
            $result = $this->common_model->update_details($info);
        }
        //echo $this->db->last_query();exit;
        if($result){
            echo "1";
        }else{
            echo "0";
        }
    }
    
    function get_progress_status(){
        //echo '<pre>';print_r($_POST);exit;
        $get_pro = $this->home_model->get_progress_status($_POST['program_id'],$_SESSION['home_user_id']);
        //echo $this->db->last_query();
        //echo '<pre>';print_r($get_pro);exit;
        $status = array(
            'status' => '1',
            'percentage' => round($get_pro)
        );
        echo json_encode($status);exit;
    }
    
	public function search(){
	    modules::run('admin/login/is_home_logged_in');
        $item = $this->input->get('search_term');
        $get_program_usrs = $this->home_model->get_user_programs($_SESSION['home_user_id']);
        //echo '<pre>';print_r($get_program_usrs->result_array());exit;
        foreach($get_program_usrs->result_array() as $rw_program_usrs){
            $rw_usr_prgs[] = $rw_program_usrs['program_id'];
        }
        //echo '<pre>';print_r($rw_usr_prgs);exit;
        $get_pro = $this->home_model->get_search_status($item,$rw_usr_prgs);
        $get_pro_chapt = $this->home_model->get_search_status_chapt($item,$rw_usr_prgs);
        $get_pro_less = $this->home_model->get_search_status_less($item,$rw_usr_prgs);
        //echo $this->db->last_query();
        //echo '<pre>';print_r($get_pro_less->result_array());exit;
        $data['items'] = $get_pro;
        $data['items_chapt'] = $get_pro_chapt->result_array();
        $data['items_less'] = $get_pro_less->result_array();
        $data['items_count'] = count($get_pro)+$get_pro_chapt->num_rows()+$get_pro_less->num_rows();
        //echo '<pre>';print_r($data);exit;
        $this->load->view('search_page',$data);
	}
    
	public function set_theme_color_status(){
	    //echo '<pre>';print_r($_POST);exit;
        //$all_colors = array('1'=>'red','2'=>'blue','3'=>'green','4'=>'black','5'=>'orange','6'=>'aqua','7'=>'indigo','8'=>'violet');
	    //modules::run('admin/login/is_home_logged_in');
        $item = $this->input->post('user_theme');
        $_SESSION['home_user_theme'] = $item;
        $set_theme = $this->home_model->set_theme_color_status($_POST);
        //echo $this->db->last_query();
        //echo '<pre>';print_r($set_theme);exit;
        if($set_theme){
            $status = array(
                'status' => '1'
            );
            echo json_encode($status);exit;   
        }else{
            $status = array(
                'status' => '0'
            );
            echo json_encode($status);exit;
        }
	}
    
	public function send_notifications_brfore_after(){
	    $get_users_week = $this->home_model->get_users_week_before();
        $get_users_day = $this->home_model->get_users_day_before();
        $get_users_after_d = $this->home_model->get_users_day_after();
        $to_users_week = '';
        $info['week_subject'] = 'Remainder For Payment';
        $info['day_subject'] = 'Remainder For Payment for Last time';
        $info['day_af_subject'] = 'Payment due date expired.';
        foreach($get_users_week as $get_users_week_rw){
            //echo '<pre>';print_r($get_users_week_rw);exit;
            $day_message = $week_message;
            $day_af_message = $week_message;
            $week_message = $message = $this->load->view('common/week_template', $info, true);
            $this->load->model('common/mail_model');
            $send_ml_week = $this->mail_model->send_mail($to_users_week, $info['week_subject'], $week_message);
            $to_users_week = $get_users_week_rw['email'].',';
        }
	}
    
	public function add_new_card(){
        if(!isset($_POST['card_number'])||!isset($_POST['card_exp_date'])||!isset($_POST['card_cvv_number'])){
            $this->load->view('add_new_card_details');
        }else{
           //echo 'nopost<pre>'; print_r($_POST);exit;
           $home_user_id = $_SESSION['home_user_id'];
           //echo '<pre>'; print_r($home_user_id);exit;
           $card_exp_date = explode('/',$this->input->post('card_exp_date'));
           $card_exp_date = $card_exp_date['0'].'-'.$card_exp_date['1'];
           //$card_exp_date = date('m/y',strtotime($card_exp_date));
           //echo '<pre>'; print_r($card_exp_date);exit;
           if($_POST['card_number']!==''||$_POST['card_exp_date']!==''||$_POST['card_cvv_number']!==''){
                $card_info = array(
                    'credit_card_no' => $this->input->post('card_number'),
                    'expire_date' => $card_exp_date,
                    'cvv_no' => $this->input->post('card_cvv_number'),
                    'user_id' => $home_user_id
                );
                //echo '<pre>'; print_r($card_info);exit;
                $res = $this->common_model->insert_details('card_details', $card_info);
                //echo $this->db->last_query();
                //echo '<pre>'; print_r($res);exit;
                if($res){
                    $status = array(
                        'status' => '0',
                        'message' => 'Credit Card added successfully'
                    );
                    echo json_encode($status);exit;
                }else{
                    $status = array(
                        'status' => '1',
                        'message' => 'Failed add to Credit Card.'
                    );
                    echo json_encode($status);exit;
                }
            }else{
                    $status = array(
                        'status' => '1',
                        'message' => 'Current Password is wrong'
                    );
                    echo json_encode($status);exit;
            }
        }
    }
}
?>