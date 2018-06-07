<?php
class Products extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
  $this->load->model('cman_model');
  $this->load->library('pagination');
}
	public function index()
	{
     
      $config=array();
      $config["base_url"]='http://localhost:8666/cman/Products/index/';
      $total_row=$this->cman_model->record_count();
      $config["total_rows"]=$total_row;
      $config["per_page"]=6;
      $config['use_page_numbers']=TRUE;
      $config['num_links']=$total_row;
      $config['cur_tag_open']='&nbsp;<a class="current">';
      $config['cur_tag_close']='</a>';
      $config['next_link']='Next';
      $config['prev_link']='Previous';
      $this->pagination->initialize($config);
	      if($this->uri->segment(3)){
	         $page=($this->uri->segment(3));
	      }
	      else{
	        $page=1;
	      }
	      $data["results"]=$this->cman_model->get_products($config["per_page"],$page);
	     
	      $str_links=$this->pagination->create_links();
	      $data["links"]=explode('&nbsp;',$str_links);

	     $data['main_content']= 'products';
	     $this->load->view('layouts/main', $data);
    }

    public function adminlogin(){
        if(isset($_SESSION['id'])  ){
        redirect('admin_page');
      }
     $config=array();
      $config["base_url"]='http://localhost:8666/cman/Products/adminlogin/';
      $total_row=$this->cman_model->record_count();
      $config["total_rows"]=$total_row;
      $config["per_page"]=6;
      $config['use_page_numbers']=TRUE;
      $config['num_links']=$total_row;
      $config['cur_tag_open']='&nbsp;<a class="current">';
      $config['cur_tag_close']='</a>';
      $config['next_link']='Next';
      $config['prev_link']='Previous';
      $this->pagination->initialize($config);
	      if($this->uri->segment(3)){
	         $page=($this->uri->segment(3));
	      }
	      else{
	        $page=1;
	      }
	      $data["results"]=$this->cman_model->get_products($config["per_page"],$page);
	     
	      $str_links=$this->pagination->create_links();
	      $data["links"]=explode('&nbsp;',$str_links);

	     $data['main_content']= 'products';
	     $this->load->view('admin', $data);
    	
    }
    public function admin_login(){

          
 

    	 $this->form_validation->set_rules('email','Email','required');
         $this->form_validation->set_rules('password','Password','required');
          if($this->form_validation->run()){

          	$password=$this->input->post('password');
          	$email=$this->input->post('email');
          	$user=$this->cman_model->admin_login($password,$email);

               if ($user){
               	  $session_data=array(
		             		'id'=>$user->id,
                    'first_name'=>$user->first_name,
                    'last_name'=>$user->last_name,
		             	'username'=>$user->username,
		                'email'=>$user->email,
		                 
		                'password'=>$user->password,

		                'mobile'=>$user->mobile,
		                'image'=>$user->image,

		             	);
		             $this->session->set_userdata($session_data);

               	redirect ('admin_page');
               }
               else{
               	  $this->session->set_flashdata('alert alert-danger fade in','Incorrect Password or Email');
                  redirect('products/adminlogin');
               }

          }
          else{
          	echo validation_errors();
          }

    }
  public function load_registration(){
     
     $this->load->view('registration');


  }

  public function register()
     {

          if(isset($_SESSION['id'])  ){
        redirect('products/userpage');
      }

          $config= [
        'upload_path'=>'./uploads/reg_image','allowed_types'=>'gif|jpg|png|jpeg',];

         $this->load->library('upload',$config);
        $this->load->library('form_validation');


        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[12]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('mobile', 'Your Mobile Number ', 'required');
       
          if ($this->form_validation->run()&& $this->upload->do_upload('userfile')) {

                 $from_email= "babalolaisaac@gmail.com";

                 $this->load->library('email');
                  $data=$this->input->post();
                  $info=$this->upload->data();
                  $image_path=base_url("uploads/reg_image/".$info['file_name']);
                  $data['image']=$image_path;
               
                 $registration=$this->cman_model->register($data);
                 $this->email->from($from_email, 'Haytick');
                 $toemail['email']=$to_email;
                 $this->email->to($to_email);
                 $this->email->subject('Haytick Registration Confirmation');
                 $this->email->message('Haytick is a platform whereby you can sell or buy any  product, Just post the product for sale and we assure you that you will be patronised');

                 if ($registration || $this->email->send()){
                  
                    
                   $this->session->set_flashdata('alert alert-success alert-dismissible','Registration Successfully');
                    redirect('products');

                 }
                 else{

                  $this->session->set_flashdata('alert alert-success alert-dismissible','Failed to Register');
                  redirect('products');

                 }

            
          }


            else{
                $this->load->view('registration');
              
            }


     }


     public function user_login(){

              if(isset($_SESSION['id'])){
        redirect('products/userpage');
      }
    
      $this->load->library('form_validation');

         $this->form_validation->set_rules('email','Email','required');
         $this->form_validation->set_rules('password','Password','required');
          if($this->form_validation->run()){

           
            $password=$this->input->post('password');
            $email=$this->input->post('email');
            $user=$this->cman_model->user_login($password,$email);

               if ($user){
                  $session_data=array(
                    'id'=>$user->id,
                    'first_name'=>$user->first_name,
                    'last_name'=>$user->last_name,
                  'username'=>$user->username,
                    'email'=>$user->email,
                     
                    'password'=>$user->password,

                    'mobile'=>$user->mobile,
                    'image'=>$user->image,

                  );
                 $this->session->set_userdata($session_data);

                redirect ('products/userpage');
               }
               else{
                  $this->session->set_flashdata('alert alert-danger fade in','Incorrect Password or Email');
                  redirect('products');
               }

          }
          else{
            echo validation_errors();
          }

   

     }

     public function userpage(){
      if(!isset($_SESSION['id'])  ){
        redirect('products');
      }
      $config=array();
      $config["base_url"]='http://localhost:8666/cman/Products/userpage/';
      $total_row=$this->cman_model->record_count();
      $config["total_rows"]=$total_row;
      $config["per_page"]=6;
      $config['use_page_numbers']=TRUE;
      $config['num_links']=$total_row;
      $config['cur_tag_open']='&nbsp;<a class="current">';
      $config['cur_tag_close']='</a>';
      $config['next_link']='Next';
      $config['prev_link']='Previous';
      $this->pagination->initialize($config);
        if($this->uri->segment(3)){
           $page=($this->uri->segment(3));
        }
        else{
          $page=1;
        }
        $data["results"]=$this->cman_model->get_products($config["per_page"],$page);
       
        $str_links=$this->pagination->create_links();
        $data["links"]=explode('&nbsp;',$str_links);

       $data['main_content']= 'products';
       $this->load->view('userpage', $data);

    }

    public function usercart(){
        if(!isset($_SESSION['id'])  ){
        redirect('products');
      }
     $config=array();
      $config["base_url"]='http://localhost:8666/cman/Products/usercart/';
      $total_row=$this->cman_model->record_count();
      $config["total_rows"]=$total_row;
      $config["per_page"]=6;
      $config['use_page_numbers']=TRUE;
      $config['num_links']=$total_row;
      $config['cur_tag_open']='&nbsp;<a class="current">';
      $config['cur_tag_close']='</a>';
      $config['next_link']='Next';
      $config['prev_link']='Previous';
      $this->pagination->initialize($config);
        if($this->uri->segment(3)){
           $page=($this->uri->segment(3));
        }
        else{    
          $page=1;
        }
        $data["results"]=$this->cman_model->get_products($config["per_page"],$page);
       
        $str_links=$this->pagination->create_links();
        $data["links"]=explode('&nbsp;',$str_links);

       $data['main_content']= 'products';
       $this->load->view('usercart', $data);
      
    }
     public function logout(){

        $this->session->sess_destroy();
        return redirect('products');
      }

  
}