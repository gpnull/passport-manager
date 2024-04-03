<?php

class Mresident extends CI_Model {

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
	* Function: getResidentById
	* Get resident by id
	* 
	* @param string $id
	* @return array of resident's information
	* @return false if resident not found
	*/
	
	public function getResidentById( $id )
	{
		$this->db->where(DB_COL_RESIDENT_ID, $id);
		$data = $this->db->get(DB_TAB_RESIDENT);
		if($data->num_rows())
			{
				return $data->result_array()[0];
			}
		return false;
	}
}