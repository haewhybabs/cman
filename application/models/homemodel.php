<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homemodel extends CI_Model {
	public function getdata(){
     $query= this->db->get->('test');
     return $query->result();

	}

	

}

/* End of file homemodel.php */
/* Location: ./application/models/homemodel.php */