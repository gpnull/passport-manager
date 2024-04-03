<?php

class Mpassport extends CI_Model {

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
	
	public function getPassportById( $id )
	{
		$this->db->where(DB_COL_PASSPORT_ID, $id);
		$data = $this->db->get(DB_TAB_PASSPORT);
		if($data->num_rows())
			{
				return $data->result_array()[0];
			}
		return false;
	}
		/**
	* Function: addPassport
	* Add new Passport
	* 
	* @param model $Passport
	* @return FLAG_SUCCESSFUL if success
	* @return FLAG_FAIL if false
	* @return FLAG_EXISTED if existed
	*/
    public function addPassport($obj)
    {
			$this->db->insert(DB_TAB_PASSPORT, $obj); 
			return ($this->db->affected_rows() != 1) ? FLAG_FAIL : FLAG_SUCCESSFUL;
    }

	/**
	* Function: updatePassport
	* Update Passport
	* 
	* @param model $Passport
	* @return FLAG_SUCCESSFUL if success
	* @return FLAG_FAIL if false
	* @return FLAG_EXISTED if existed
	*/
    public function updatePassport($obj)
    {
		if($this->getPassportById($obj[DB_COL_PASSPORT_ID])){
			$this->db->update(DB_TAB_PASSPORT, $obj, array(DB_COL_PASSPORT_ID => $obj[DB_COL_PASSPORT_ID])); 
			return ($this->db->affected_rows() != 1) ? FLAG_FAIL : FLAG_SUCCESSFUL;
		}else{
			return FLAG_FAIL;
		}
    }

	/* Function: deletePassport
	* Delete Passport
	* 
	* @param passporttid
	* @return FLAG_SUCCESSFUL if success
	* @return FLAG_FAIL if false
	*/
    public function deletePassport($id)
    {
		if($this->getPassportById($id)){
			$this->db->delete(DB_TAB_PASSPORT,array(DB_COL_PASSPORT_ID => $id)); 
			return ($this->db->affected_rows() != 1) ? FLAG_FAIL : FLAG_SUCCESSFUL;
		}else{
			return FLAG_FAIL;
		}
    }

    public function countAllPassport($filter)
    {
        foreach($filter as $key => $value) {
			$this->db->where($key, $value);
		}
        $data = $this->db->get(DB_TAB_PASSPORT);
        return $data->num_rows();
    }


    /**
     * Function: get_all_passport
     * Get all passport limit by per_page and offset
     * 
     * @return array of passport
     */
        public function getAllPassport($per_page, $offset,$filter)
    {
        /*switch ($order) {
            case ORDER_NAME_ASC:
                $this->db->order_by(DB_COL_PASSPORT_ID, 'ASC');
                break;
            case ORDER_NAME_DESC:
                $this->db->order_by(DB_COL_PASSPORT_ID, 'DESC');
                break;
            default:
                $this->db->order_by(DB_COL_PASSPORT_ID, 'ASC');
        }*/
        foreach($filter as $key => $value) {
			$this->db->where($key, $value);
		}

        $data = $this->db->get(DB_TAB_PASSPORT, $per_page,$offset);
        if ($data->num_rows()) {
            return $data->result_array();
        }
        return null;
    }

    	    /**
     * Function: search_all_passport
     * search passport by identity code
     * 
     * @return array of passport
     */
    
        public function searchAllPassport($per_page, $offset,$id_code)
    {
		$this->db->like(DB_COL_PASSPORT_IDENTITY_NUMBER, $id_code);
        $data = $this->db->get(DB_TAB_PASSPORT, $offset, $per_page);
        if ($data->num_rows()) {
            return $data->result_array();
        }
        return null;
    }
}