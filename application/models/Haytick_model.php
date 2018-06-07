<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Haytick_model extends CI_Model {

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

    public function get_products_detail($id){

           $this->db->select('*');
           $this->db->from('products');
           $this->db->where('id',$id); 
           $query=$this->db->get();
           return $query->row();

   }


    public function get_category(){

           $this->db->select('*');
           $this->db->from('category');
           $query=$this->db->get();
           return $query->result();

    }
     public function get_random_products(){

           $this->db->select('*');
           $this->db->from('products');
           $this->db->limit(7);
           $this->db->order_by("id","RANDOM");
           $query=$this->db->get();
           return $query->result();

    }


    public function insertpost($data){

        return $this->db->insert('products',$data);
    }


    public function register($data){

      return $this->db->insert('users',$data);
    }
    public function login($password,$email){
      $query=$this->db->where(['email'=>$email,'password'=>$password])
                  ->get('users');

        if ($query->num_rows()>0){
 
         return $query->row();

         }
    }
    public function count_userpost($userid){
     $this->db->select('*');
     $this->db->from('products');
     $this->db->where("author_id",$userid);
     $query=$this->db->get();
     $rowcount=$query->num_rows();
     return $rowcount;

    }
    public function getuserpost($userid,$per_page,$page){
        $this->db->limit($per_page, $per_page*$page-$per_page);
           $this->db->select('*');
           $this->db->from('products');
           $this->db->where('author_id',$userid);
           $this->db->order_by("id","DESC ");
           $query=$this->db->get();
          if ($query->num_rows()>0){
              foreach ($query->result() as $row){
                $data[]=$row;

              }
              return $data;

           }

           return false;

    }
    public function record_countandroid(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','1');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }

    public function record_count_otherphones(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','2');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_Hplaptops(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','3');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_lenovolaptops(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','4');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }
     public function record_count_otherlaptops(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','5');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }

    public function record_count_others(){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id','6');
        $query=$this->db->get();
        $rowcount=$query->num_rows();
        return $rowcount;
    }


    public function get_androidphones($per_page,$page){
       
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

    
    public function get_otherphones($per_page,$page){
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
     public function get_Hplaptops($per_page,$page){
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
      public function get_lenovolaptops($per_page,$page){
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
     public function get_otherlaptops($per_page,$page){
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
    
     public function get_others($per_page,$page){
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
    
    public function deletepost($id){
      $this->db->where('id',$id);
      return $this->db->delete('products');


    }
    public function send_messages($data){
      return $this->db->insert('message',$data);
    }
    public function get_messages($userid,$author_id){
      $this->db->select('*');
      $this->db->from('message');
      $this->db->where('sender_id',$author_id);
       $this->db->where('receiver_id',$userid);
       $this->db->or_where('receiver_id', $author_id ); 
       $this->db->where('sender_id',$userid); 
      $query=$this->db->get()->result();
      return $query;
    }

   

     public function get_users($id){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('id',$id);   
      $this->db->distinct();
      $query=$this->db->get()->result();
      return $query;
    }
     public function get_chatdetails($author_id){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('id',$author_id);
      $query=$this->db->get()->result();
      return $query;
    }
    public function new_get_chats($id){
      // $this->db->select('sender_id', 'receiver_id');
      $this->db->from('message');
      $this->db->where('sender_id', $id);
      // $this->db->where('sender_id!=', $id);
      $this->db->or_where('receiver_id',$id);
      $this->db->select('sender_id, receiver_id');
      $this->db->distinct();
       $ouput = $this->db->get()->result();                     
      $chats = array();
      foreach ($ouput as $i){
        if($id == $i->receiver_id){
          if (!in_array( $i->sender_id, $chats)){
            $chats[] = $i->sender_id;
          }
        }elseif($id == $i->sender_id){
          if (!in_array($i->receiver_id, $chats)){
            $chats[] = $i->receiver_id;
          }
        }
      }
      return $chats;

          }
          public function notifications($id){
            $this->db->select('receiver_id');
            $this->db->from('message');
            $this->db->where('sender_id',$id);
            $this->db->where('notification!=','0');

          
            $this->db->order_by('id','DESC');
            $this->db->distinct();
           ;
            $query=$this->db->get()->result();
            $ret=$this->db->count_all_results();
             return $query;
          }
     public function get_messagescl($id){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('id',$id);   
      $this->db->distinct();
     
     
    }
    public function update_notification($author_id){
         $data = array(
        'notification' => '0'
        );
        $this->db->where('receiver_id',$author_id);
        $query=$this->db->update('message',$data);
        



      }
    public function message_notify_header($id){
    $this->db->select('notification');
    $this->db->from('message');
    $this->db->where('sender_id',$id);
    $this->db->where('notification', '1');
    $this->db->distinct();
    $query=$this->db->get()->result();
    return $query;
    
    }
    
  }



?>
