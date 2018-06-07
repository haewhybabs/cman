<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chatmodel extends CI_Model {


    public function shoutup($data){
    return $this->db->insert('chat',$data);
    
    }

    public function getpost(){
    	 $this->db->select('*');
           $this->db->from('chat');
           $this->db->order_by("id","DESC");
           $query=$this->db->get();
           return $query->result();

    }
}