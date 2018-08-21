<?php

class Upload_model extends CI_Model {

    function __construct() {
        //parent::Model();
        //$this->lang->load('dbtables', strtolower($this->session->userdata('flanguage')));
    }
    /**
     * buildAmazonUploadConfig
     * build Amazon Upload Config
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    function buildAmazonUploadConfig($f_type) {
        $config_upload = array();
        $files_base = 'assets/images/';
        switch ($f_type) {
            
        case "events":
                $config_upload['upload_to'] = $files_base.'events/';
                $config_upload['upload_path'] = $files_base.'events/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                $config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                $config_upload['max_width'] = '500';
                $config_upload['max_height'] = '374';
                $config_upload['min_width'] = '500';
                $config_upload['min_height'] = '374';
                break;
        
         case "users":
                $config_upload['upload_to'] = $files_base.'users/';
                $config_upload['upload_path'] = $files_base.'users/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "program":
                $config_upload['upload_to'] = $files_base.'programs/';
                $config_upload['upload_path'] = $files_base.'programs/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|mp4|avi|mov';
                $config_upload['overwrite'] = TRUE;
                $config_upload['max_size'] = '20480'; // 10240 Kb = 20 MB
                break;
        
         case "back_image_pros":
                $config_upload['upload_to'] = $files_base;
                $config_upload['upload_path'] = $files_base;
                $config_upload['allowed_types'] = 'gif|jpg|JPG|png|PNG|jpeg|JPEG|mp4|avi|mov';
                $config_upload['overwrite'] = TRUE;
                $config_upload['max_size'] = '20480'; // 10240 Kb = 20 MB
                break;
        
         case "video_act_vid":
                $config_upload['upload_to'] = $files_base.'videos/';
                $config_upload['upload_path'] = $files_base.'videos/';
                $config_upload['allowed_types'] = 'mp4|avi|mov';
                //$config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "negotiations":
                $config_upload['upload_to'] = $files_base.'negotiations/';
                $config_upload['upload_path'] = $files_base.'negotiations/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|ppt|txt|text|rtx|rtf|csv|docx|xlsx|xl|mp4';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "requirement_files":
                $config_upload['upload_to'] = $files_base.'requirement_files/';
                $config_upload['upload_path'] = $files_base.'requirement_files/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|ppt|txt|text|rtx|rtf|csv|docx|xlsx|xl|mp4';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "project_bidding_files":
                $config_upload['upload_to'] = $files_base.'project_bidding_files/';
                $config_upload['upload_path'] = $files_base.'project_bidding_files/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|ppt|txt|text|rtx|rtf|csv|docx|xlsx|xl|mp4';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "seller_product_image":
                $config_upload['upload_to'] = $files_base.'catelogues/';
                $config_upload['upload_path'] = $files_base.'catelogues/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "seller_microsite":
                $config_upload['upload_to'] = $files_base.'microsite/';
                $config_upload['upload_path'] = $files_base.'microsite/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "seller_microsite_banner":
                $config_upload['upload_to'] = $files_base.'microsite/banners/';
                $config_upload['upload_path'] = $files_base.'microsite/banners/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "parents":
                $config_upload['upload_to'] = $files_base.'users/';
                $config_upload['upload_path'] = $files_base.'users/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "vendors":
                $config_upload['upload_to'] = $files_base.'users/';
                $config_upload['upload_path'] = $files_base.'users/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "image":
                $config_upload['upload_to'] = $files_base.'users/';
                $config_upload['upload_path'] = $files_base.'users/';
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
        
         case "news_image":
                $config_upload['upload_to'] = $files_base.'news_image/';
                $config_upload['upload_path'] = $files_base.'news_image/';
                $config_upload['allowed_types'] = 'jpg|png|jpeg|PNG';
                $config_upload['overwrite'] = TRUE;
                //$config_upload['max_size'] = '10240'; // 10240 Kb = 10 MB
                break;
            default:
                $config_upload['upload_to'] = $files_base;
                $config_upload['upload_path'] = $files_base;
                $config_upload['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|ppt|txt|text|rtx|rtf|csv|docx|xlsx|xl';
                //$config_upload['max_size'] = '10240'; // // 10240 Kb = 10 MB
                $config_upload['max_size'] = '1024'; // 1024 Kb = 1 MB
                $config_upload['max_width'] = '1400';
                $config_upload['max_height'] = '1024';
                break;
        }
        return $config_upload;
    }

    /* start for uploading functionality */
    /**
     * uploadDocuments
     * upload Documents
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    function uploadDocuments($file_field_name, $file_type) {
        $conf_arr = $this->buildAmazonUploadConfig($file_type);
        //echo "<pre>";print_r($conf_arr);exit;
        // $config['max_size'] = '100';
        $present_file_name = $_FILES[$file_field_name]['name'];
        //echo "<pre>";print_r($present_file_name);exit;
        $extntion_pos = strrpos($present_file_name, '.');
        if ($extntion_pos) {  // Rename the file to eliminate unwnated characters and spaces
            // $new_file_name = $file_type . '_' . date('YmdHis'); //substr($oldfile_name, 0, $extntion_pos);
            $new_file_name = $present_file_name;
            //  $new_file_name .= substr($present_file_name, $extntion_pos);
        } else {
            $new_file_name = $present_file_name;
        }
        $conf_arr['max_size'] = '10240';
        $conf_arr['file_name'] = $new_file_name;
        $this->load->library('upload', $conf_arr);
        $this->upload->initialize($conf_arr);
        //echo "<pre>";print_r($file_field_name);exit;
        if (!$this->upload->do_upload($file_field_name)) {
            //$error = array('error' => $this->upload->display_errors());
            $upl_file_data['msg'] = $this->upload->display_errors(); //$error;			
            $upl_file_data['file_path'] = '';
            $upl_file_data['file_name'] = '';
            $upl_file_data['success'] = 0;
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upl_file_data['msg'] = 'File upload successfully';
            $upl_file_data['file_path'] = $conf_arr['upload_path'] . '/' . $data['upload_data']['file_name'];
            $upl_file_data['file_name'] = $data['upload_data']['file_name'];
            $upl_file_data['success'] = 1;
        }
        //echo "<pre>";print_r($upl_file_data);exit;
        return $upl_file_data;
    }
    
    /**
     * uploadDocuments
     * upload Documents
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     * @param type $data
     */
    function upload_create_thumbs($file_field_name, $file_type) {
        $conf_arr = $this->buildAmazonUploadConfig($file_type);
        $this->load->library('upload');

        $present_file_name = $_FILES[$file_field_name]['name'];
        $extntion_pos = strrpos($present_file_name, '.');
        if ($extntion_pos) {  // Rename the file to eliminate unwnated characters and spaces
            // $new_file_name = $file_type . '_' . date('YmdHis'); //substr($oldfile_name, 0, $extntion_pos);
            $new_file_name = $present_file_name;
            //  $new_file_name .= substr($present_file_name, $extntion_pos);
        } else {
            $new_file_name = $present_file_name;
        }
        $conf_arr['file_name'] = $new_file_name;
        $this->upload->initialize($conf_arr);
        if (!$this->upload->do_upload($file_field_name)) {
            //$error = array('error' => $this->upload->display_errors());
            $upl_file_data['msg'] = $this->upload->display_errors(); //$error;

            $upl_file_data['file_path'] = '';
            $upl_file_data['file_name'] = '';
            $upl_file_data['success'] = 0;
        } else {

            $data = array('upload_data' => $this->upload->data());
            $upl_file_data['msg'] = 'File upload successfully';
            $upl_file_data['file_path'] = $conf_arr['upload_path'] . '/' . $data['upload_data']['file_name'];
            $upl_file_data['file_name'] = $data['upload_data']['file_name'];
            $upl_file_data['success'] = 1;

            $config['image_library'] = 'gd2';
            $config['source_image'] = 'assets/files/resource_images/' . $data['upload_data']['file_name'];
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 264;
            $config['height'] = 253;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
        }
        return $upl_file_data;
    }

    function uploadadminDocuments($file_field_name, $file_type) {
        $conf_arr = $this->buildAmazonUploadConfig($file_type);
        $this->load->library('upload');

        $present_file_name = $_FILES[$file_field_name]['name'];
        $extntion_pos = strrpos($present_file_name, '.');
        if ($extntion_pos) {  // Rename the file to eliminate unwnated characters and spaces
            // $new_file_name = $file_type . '_' . date('YmdHis'); //substr($oldfile_name, 0, $extntion_pos);
            $new_file_name = $file_type . '_' . date('YmdHis');
            $new_file_name .= substr($present_file_name, $extntion_pos);
        } else {
            $new_file_name = $present_file_name;
        }
        $conf_arr['file_name'] = $new_file_name;
        $this->upload->initialize($conf_arr);
        if (!$this->upload->do_upload($file_field_name)) {
            //$error = array('error' => $this->upload->display_errors());
            $upl_file_data['msg'] = $this->upload->display_errors(); //$error;

            $upl_file_data['file_path'] = '';
            $upl_file_data['file_name'] = '';
            $upl_file_data['success'] = 0;
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upl_file_data['msg'] = 'File upload successfully';
            $upl_file_data['file_path'] = $conf_arr['upload_path'] . '/' . $data['upload_data']['file_name'];
            $upl_file_data['file_name'] = $data['upload_data']['file_name'];
            $upl_file_data['success'] = 1;
        }
        return $upl_file_data;
    }

    function uploadspecialDocuments($file_field_name, $file_type) {
        $conf_arr = $this->buildAmazonUploadConfig($file_type);
        $this->load->library('upload');

        $present_file_name = $_FILES[$file_field_name]['name'];
        $extntion_pos = strrpos($present_file_name, '.');
        if ($extntion_pos) {  // Rename the file to eliminate unwnated characters and spaces
            $new_file_name = $file_type . '_' . date('YmdHis'); //substr($oldfile_name, 0, $extntion_pos);
            $new_file_name .= substr($present_file_name, $extntion_pos);
        } else {
            $new_file_name = $present_file_name;
        }
        $conf_arr['file_name'] = $new_file_name;
        $this->upload->initialize($conf_arr);
        if (!$this->upload->do_upload($file_field_name)) {
            //$error = array('error' => $this->upload->display_errors());
            $upl_file_data['msg'] = $this->upload->display_errors(); //$error;

            $upl_file_data['file_path'] = '';
            $upl_file_data['file_name'] = '';
            $upl_file_data['success'] = 0;
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upl_file_data['msg'] = 'File upload successfully';
            $upl_file_data['file_path'] = $conf_arr['upload_path'] . '/' . $data['upload_data']['file_name'];
            $upl_file_data['file_name'] = $data['upload_data']['file_name'];
            $upl_file_data['success'] = 1;
        }
        return $upl_file_data;
    }

    function uploadfiles($file_field_name, $file_type) {
        $conf_arr = $this->buildAmazonUploadConfig($file_type);
        //echo $file_type;echo '<pre>'; print_r($conf_arr); exit();
        $this->load->library('upload');

        $present_file_name = $_FILES[$file_field_name]['name'];
        $extntion_pos = strrpos($present_file_name, '.');
        $name = explode('.',$present_file_name);
        $file_name=$name[0];
        if ($extntion_pos) {
            $new_file_name = $file_name.'__-'. date('YmdHis');
            $new_file_name .= substr($present_file_name, $extntion_pos);
        } else {
            $new_file_name = $present_file_name;
        }
        $conf_arr['file_name'] = $new_file_name;
        $this->upload->initialize($conf_arr);
        if (!$this->upload->do_upload($file_field_name)) {
            $upl_file_data['msg'] = $this->upload->display_errors(); //$error;
            $upl_file_data['file_path'] = '';
            $upl_file_data['file_name'] = '';
            $upl_file_data['success'] = 0;
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upl_file_data['msg'] = 'File upload successfully';
            $upl_file_data['file_path'] = $conf_arr['upload_path'] . '/' . $data['upload_data']['file_name'];
            $upl_file_data['file_name'] = $data['upload_data']['file_name'];
            $upl_file_data['success'] = 1;
        }
        return $upl_file_data;
    }

}

?>