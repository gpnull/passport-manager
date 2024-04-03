<?php

class Madmin extends CI_Model {

    /**
     * construct
     * @param   
     * @return   
     */
    public function __construct() {
        parent::__construct();
    	$this->load->database();
    }
	/**
	* Function: get_user_by_email
	* Get system user by email
	* 
	* @param string $email
	* @return array of user's information
	* @return false if user not found
	*/
	
	public function get_user_by_id( $id )
	{
		$this->db->where(DB_COL_USER_ID, $id);
		$data = $this->db->get(DB_TAB_USER);
		if($data->num_rows())
			{
				return $data->result_array()[0];
			}
		return false;
	}
		/**
	* Function: addUser
	* Add new user
	* 
	* @param model $user
	* @return FLAG_SUCCESSFUL if success
	* @return FLAG_FAIL if false
	* @return FLAG_EXISTED if existed
	*/
    public function addUser($obj)
    {
		if($this->get_user_by_id($obj[DB_COL_USER_ID])){
			return FLAG_EXISTED;
		}else{
			$this->db->insert(DB_TAB_USER, $obj); 
			return ($this->db->affected_rows() != 1) ? FLAG_FAIL : FLAG_SUCCESSFUL;
		}
    }
}