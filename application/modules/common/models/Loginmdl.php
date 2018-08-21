<?php
class Loginmdl extends CI_Model
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
	 * get_user_info()
	 * Get User Info
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    function get_user_info($admin_user_id, $user_data)
    {
        if ($admin_user_id != '' && count($user_data) > 0) {
            $this->db->select($user_data);
            $res = $this->db->get('users', array('user_id'=>$admin_user_id));
            return $res->row_array();
        } else {
            return false;
        }
    }
    
    /**
	 * get_pass_reset_code()
	 * Get Pass Reset Code
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    //Get password reset code for the email
    function get_pass_reset_code($email)
    {
        $this->db->select('');
        $this->db->from('users');
        $this->db->where('email', $email);
        //$this->db->where('blocked', 1);
        $res = $this->db->get()->row_array();
        return $res;
    }
    
    /**
	 * reset_password()
	 * Reset Password
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    function reset_password($wher_con)
    {
        $this->db->select('');
        $this->db->from('user_account');
        $this->db->where($wher_con);
        $res = $this->db->get()->row();
        return $res;
    }
    
    /**
	 * update_user()
	 * Update User
	 * @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	 */
    function update_user($admin_user_id, $user_data)
    {
        if ($admin_user_id != '' && count($user_data) > 0) {
            $res = $this->db->update('users', $user_data, array('user_id' => $admin_user_id));
            return $res;
        } else {
            return false;
        }
    }
	
    /**
	* logout()
	* Logout
	* @author GOPI PANGULURI<gopi.panguluri@mindtechlabs.com>
	*/
	function logout()
	{
		//UPDATE LOGIN TIME in USER_ACCOUNT TABLE
        $user_id = $this->session->userdata('user_id');
		$logintime = array('last_login' => date('Y-m-d H:i:s'));
        if($user_id != '')
        {
    		$this->db->where('user_id', $user_id);
    		$this->db->update('admins', $logintime);
            log_message('INFO', $user_id.' Loggedout');
        }
	}
	function get_emp_by_email($emailid) {        
        return  $this->db->get_where('users',array('email' => $emailid))->row_array();
    }
	 function get_emp_by_id($user_id) {        
        return  $this->db->get_where('users',array('login_id' => $user_id))->row_array();
    }
	 function update_user_password($login_id, $data) {
        if (count($data) > 0 && $login_id != '') {
            $this->db->where('login_id', $login_id);
            $res = $this->db->update('users', $data);
            return $res;
        }
        return false;
    }
}