<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cman_model extends CI_Model {

    public function record_count(){
    return $this->db->count_all("products");
  }

    public function get_products($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->order_by("id","DESC ");
           $query=$this->db->get('products');
           
           if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }
           return false;
          


    }

     public function admin_login($password,$email){
      $query=$this->db->where(['email'=>$email,'password'=>$password])
                  ->get('admin');

        if ($query->num_rows()>0){
 
         return $query->row();

         }
    }

    public function get_category(){

           $this->db->select('*');
           $this->db->from('category');
           $query=$this->db->get();
           return $query->result();

    }
     public function insertpost($data){

        return $this->db->insert('products',$data);
    }

     public function deletepost($id){
      $this->db->where('id',$id);
      return $this->db->delete('products');


    }
     public function register($data){

      return $this->db->insert('users',$data);
    }

     public function user_login($password,$email){
      $query=$this->db->where(['email'=>$email,'password'=>$password])
                  ->get('users');

        if ($query->num_rows()>0){
 
         return $query->row();

         }
      }


      public function record_countsamsung(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','1');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }

    public function record_count_infinix(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','5');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_tecno(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','2');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_lenovophones(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','3');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_itelphones(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','4');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_htcphones(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','6');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }

    public function record_count_samsunglaptop(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','7');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_Hp(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','8');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_lenovolaptops(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','12');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
    
     public function record_count_Asus(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','9');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
    
     public function record_count_Apple(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','10');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_Toshiba(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','11');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }

    

    



    public function get_samsungphones($per_page,$page){
       
         $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '1');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    }

    
    public function get_infinixphones($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '5');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    }
     public function get_tecnophones($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '2');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }
      public function get_lenovophones($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '3');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }
     public function get_itelphones($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '4');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }
    
     public function get_htcphones($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '6');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }

    public function get_samsunglaptop($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '7');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }

    public function get_Hp($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '8');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }

    public function get_lenovolaptops($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '12');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }

    public function get_Asus($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '9');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }


    public function get_Apple($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '10');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }

    public function get_Toshiba($per_page,$page){
          $this->db->limit($per_page, $per_page*$page-$per_page);
          $this->db->select('*');
          $this->db->from('products');
          $this->db->where('category_id', '11');
          $this->db->order_by("id","DESC");
          $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;
    
    }
}