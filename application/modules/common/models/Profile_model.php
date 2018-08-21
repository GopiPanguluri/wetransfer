<?php
class Profile_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    
    /**
	 * validate_user()
	 * Validate User
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    function validate_user($credentials)
    {
        $result_ary = array();
        $conditions = array('email' => $credentials["email"], 'password' => $credentials["password"]);    
       
		$this->db->select('*');
        $this->db->where($conditions);
        $login = $this->db->get('users');
        $row = $login->row_array();

		if($login->num_rows()>0)
		{
            /* Status = 0 Blocked 
            // Status = 1 Active
            */
            if($row['status'] == 0){
                $result_ary['status'] = 'success';
                $result_ary['msg'] = 'Logged in successfully';
                
                $loggedin_user = array('is_admin_logged_in' => TRUE, 'admin_user_id' => $row['user_id'],
                'admin_name' => $row['name'],
                'admin_email' => $row['email'],'admin_last_login' => $row['last_login'],
                'admin_role_id' => $row['role_id'],'admin_image' => $row['image']);

                $this->session->set_userdata($loggedin_user);
                log_message('INFO', 'User session created for '.$row['user_id']);
            }elseif($row['status'] == 1){
    			$result_ary['status'] = 'blocked';
                $result_ary['msg'] = 'Profile is Blocked';
            }
            elseif($row['status'] == 2){
    			$result_ary['status'] = 'blocked';
                $result_ary['msg'] = 'Profile is Deleted';
            }
     		else{
                $result_ary['status'] = 'failure';
                $result_ary['msg'] = 'Login failed. Please try again later';
            }

		}
		else
        {
			//echo "invalid";
            $result_ary['status'] = 'failure';
            $result_ary['msg'] = 'Invalid email or password';
        }
        return $result_ary;
    }
    
    /**
     * get_countries_list()
     * get Countries List
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_countries_list() {
        $this->db->select('*');
        $this->db->from('countries');
        $this->db->order_by('name','ASC');
        $res = $this->db->get()->result_array();
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
    public function get_states_list($id='') {
        $this->db->select('*');
        $this->db->from('states');
        if($id!=''){
            $this->db->where('country_id',$id);
        }
        $this->db->order_by('name','ASC');
        $res = $this->db->get()->result_array();
        //foreach($res as $country):
//            $country_list[$country['id']] = $country['name'];
//        endforeach;
        //echo '<pre>'; print_r($country_list);exit;
        return $res;
    }
    
    /**
     * get_countries_list()
     * get Countries List
     * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
     */
    public function get_cities_list($id='') {
        $this->db->select('*');
        $this->db->from('cities');
        if($id!=''){
            $this->db->where('state_id',$id);
        }
        $this->db->order_by('name','ASC');
        $res = $this->db->get()->result_array();
        //foreach($res as $country):
//            $country_list[$country['id']] = $country['name'].' => '.$country['sortname'];
//        endforeach;
        //echo '<pre>'; print_r($country_list);exit;
        return $res;
    }
}