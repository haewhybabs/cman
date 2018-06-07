<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {


  public function get_products(){

           $this->db->select('*');
           $this->db->from('products');
           $query=$this->db->get();
           return $query->result();

  }

    /*
    *Get Single product
    */

   public function get_products_details($id){

           $this->db->select('*');
           $this->db->from('products');
           $this->db->where('id',$id); 
           $query=$this->db->get();
           return $query->row();

  }

  /*

   Get Categories  
  */

   public function get_categories(){
   	$this->db->select('*');
   	$this->db->from('categories');
   	$query=$this->db->get();
   	return $query->result();
   }
  



}