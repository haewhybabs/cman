<?php
class Index extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	$this->load->library('pagination');
	$this->load->model('Haytick_model');
}
	public function index($page=false)
	{
     if(!isset($_SESSION['id'])  ){
        redirect('Haytick');
      }
    
      $config=array();
      $config["base_url"]='http://localhost:8666/Haytick/index/index/';
      $total_row=$this->Haytick_model->record_count();
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
      $data["results"]=$this->Haytick_model->get_products($config["per_page"],$page);
      $str_links=$this->pagination->create_links();
      $data['random']=$this->Haytick_model->get_random_products();
      $data["links"]=explode('&nbsp;',$str_links);
      $this->load->view("index",$data);


	}


      public function logout(){

      	$this->session->sess_destroy();
      	return redirect('Haytick');
      }

      /*
      your personal uploads
      */
      public function uploads(){
      	$this->load->model('Haytick_model');
      	
    
      if(!isset($_SESSION['id'])){
        redirect('Haytick');
      }

          $config=array();
      $config["base_url"]='http://localhost:8666/Haytick/index/uploads/';
      $total_row=$this->Haytick_model->count_userpost($_SESSION['id']);
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
      $data["results"]=$this->Haytick_model->getuserpost($_SESSION['id'],$config["per_page"],$page);
      $str_links=$this->pagination->create_links();
      $data["links"]=explode('&nbsp;',$str_links);

      	$this->load->view('userpost',$data);
      }

       public function detailuser($id)
  {

   
    $this->load->model('Haytick_model');
    $data['product']=$this->Haytick_model->get_products_detail($id);
    $this->load->view('detailuser',$data);


  }
     public function delete_post($id){
       if(!isset($_SESSION['id'])  ){
        redirect('Haytick');
      }
     	$this->load->model('Haytick_model');
     	$delete=$this->Haytick_model->deletepost($id);
     	if($delete){
     		$this->session->set_flashdata('responsep', 'A post is deleted' );
     	}
     	else{
     		$this->session->set_flashdata('responsep','unsuccessful');
     	}
     	redirect('index');
     }
     public function testing_not(){

        $id=$this->session->userdata('id');
                     $message_notification=$this->Haytick_model->message_notify_header($id);
                      var_dump($message_notification);

     }
 }