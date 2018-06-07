<?php
class Admin_page extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
  $this->load->model('cman_model');
  $this->load->library('pagination');
}
	public function index()
	{
      if(!isset($_SESSION['id'])  ){
        redirect('products');
      }

		$config=array();
      $config["base_url"]='http://localhost:8666/cman/admin_page/index/';
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
	     $this->load->view('admin_page', $data);

	}
	public function newupload(){

      if(!isset($_SESSION['id'])  ){
        redirect('products');
      }


		 $data['categories']=$this->cman_model->get_category();

		$this->load->view('newpost', $data);
	}


	 public function publishpost()
    {
          
       if(!isset($_SESSION['id'])  ){
        redirect('products');
      }

        	$config= [
      	'upload_path'=>'./uploads','allowed_types'=>'gif|jpg|png|jpeg',];


          $this->load->library('upload',$config);
          $this->form_validation->set_rules('title','Name', 'required');
          $this->form_validation->set_rules('description', 'Post Description', 'required');
           $this->form_validation->set_rules('price','Post price', 'required');
          $this->form_validation->set_rules('category_id', 'Category Number', 'required');
          if($this->form_validation->run() && $this->upload->do_upload('userfile')){
                
                  $data=$this->input->post();
                  $info=$this->upload->data();
                
                  $image_path=base_url("uploads/".$info['file_name']);
                  $data['image']=$image_path;  
                  unset($data ['submit']);
                 

                  if ($this->cman_model->insertpost($data) ){

                     
                      $this->session->set_flashdata('response','Post published Successfully');
                      redirect('admin_page');

                   }
                   else{
                   	   $this->session->set_flashdata('responsef','failed to publish post');

                      echo "this is wrong";

                   }

                  


                  



            }
         else{
            	echo validation_errors();
         }



    }

     public function logout(){

      	$this->session->sess_destroy();
      	return redirect('products/adminlogin');
      }


      public function uploads(){
    
      if(!isset($_SESSION['id'])){
        redirect('products/adminlogin');
      }

         	$config=array();
      $config["base_url"]='http://localhost:8666/cman/admin_page/uploads/';
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
	     $this->load->view('adminpost', $data);

      }

      public function delete_post($id){
       if(!isset($_SESSION['id'])  ){
        redirect('products/adminlogin');
      }
     	
     	$delete=$this->cman_model->deletepost($id);
     	if($delete){
     		$this->session->set_flashdata('responsep', 'A post is deleted' );
     	}
     	else{
     		$this->session->set_flashdata('responsep','unsuccessful');
     	}
     	redirect('admin_page');
     }

}