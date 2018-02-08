<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_model extends CI_Model {

public function get_all($limit = NULL, $offset = NULL)
	{

		if($limit){
			$this->db->limit($limit, $offset);
		}
		
		$query = $this->db->get($tableName);


		return $query->result();;
	}

}