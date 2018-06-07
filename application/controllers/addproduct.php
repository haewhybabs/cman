<?php
class Addproduct extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
}
	public function index()
	{
     if(!isset($_SESSION['id']) ){
        redirect('Haytick');
      }
      
    $this->load->model('Haytick_model');
    $data['categories']=$this->Haytick_model->get_category();
    $data['random']=$this->Haytick_model->get_random_products();
    $this->load->view('addproduct',$data);


    }

    public function publishpost()
    {
          
       if(!isset($_SESSION['id'])  ){
        redirect('Haytick');
      }

        	$config= [
      	'upload_path'=>'./uploads','allowed_types'=>'gif|jpg|png|jpeg',];


          $this->load->library('upload',$config);
          $this->form_validation->set_rules('title','Name', 'required');
          $this->form_validation->set_rules('description', 'Post Description', 'required');
           $this->form_validation->set_rules('price','Post price', 'required');
          $this->form_validation->set_rules('location', 'Your location', 'required');
           $this->form_validation->set_rules('mobile_number','Mobile Number', 'required');
          $this->form_validation->set_rules('category_id', 'Category Number', 'required');
          if($this->form_validation->run() && $this->upload->do_upload('userfile')){
                
                  $data=$this->input->post();
                  $info=$this->upload->data();
                
                  $image_path=base_url("uploads/".$info['file_name']);
                  $data['image']=$image_path;
                  $data['author_id']=$this->session->userdata('id');
                 
                  unset($data ['submit']);
                  $this->load->model('Haytick_model');

                  if ($this->Haytick_model->insertpost($data) ){

                     
                      $this->session->set_flashdata('response','Post published Successfully');
                      redirect('index');

                   }
                   else{
                   	   $this->session->set_flashdata('responsef','failed to publish post');



                   }

                  


                  



            }
         else{
            	echo validation_errors();
         }



    }

}


?>