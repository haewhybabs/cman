<?php
class Category extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
	 $this->load->model('cman_model');
  $this->load->library('pagination');
}
	public function index()
	{
    $this->load->view('category');
      }

      public function samsung(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/android';
	      $total_row=$this->cman_model->record_countsamsung();
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
          
	      $data["results"]=$this->cman_model->get_samsungphones($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }

        public function infinix(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/infinix';
	      $total_row=$this->cman_model->record_count_infinix();
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
          
	      $data["results"]=$this->cman_model->get_infinixphones($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }

        public function tecno(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/tecno';
	      $total_row=$this->cman_model->record_count_tecno();
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
          
	      $data["results"]=$this->cman_model->get_tecnophones($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
     public function lenovophones(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/lenovophones';
	      $total_row=$this->cman_model->record_count_lenovophones();
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
          
	      $data["results"]=$this->cman_model->get_lenovophones($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
        public function itelphones(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/itelphones';
	      $total_row=$this->cman_model->record_count_itelphones();
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
          
	      $data["results"]=$this->cman_model->get_itelphones($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }

        public function htcphones(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/htcphones';
	      $total_row=$this->cman_model->record_count_htcphones();
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
          
	      $data["results"]=$this->cman_model->get_htcphones($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
        public function samsunglaptop(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/sampsunglaptop';
	      $total_row=$this->cman_model->record_count_samsunglaptop();
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
          
	      $data["results"]=$this->cman_model->get_samsunglaptop($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
        public function Hp(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/Hp';
	      $total_row=$this->cman_model->record_count_Hp();
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
          
	      $data["results"]=$this->cman_model->get_Hp($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
        public function lenovolaptops(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/lenovolaptops';
	      $total_row=$this->cman_model->record_count_lenovolaptops();
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
          
	      $data["results"]=$this->cman_model->get_lenovolaptops($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
        public function Asus(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/Asus';
	      $total_row=$this->cman_model->record_count_Asus();
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
          
	      $data["results"]=$this->cman_model->get_Asus($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
        public function Apple(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/Apple';
	      $total_row=$this->cman_model->record_count_Apple();
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
          
	      $data["results"]=$this->cman_model->get_Apple($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
        public function Toshiba(){
	      $config=array();
	      $config["base_url"]='http://localhost:8666/cman/category/Toshiba';
	      $total_row=$this->cman_model->record_count_Toshiba();
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
          
	      $data["results"]=$this->cman_model->get_Toshiba($config["per_page"],$page);
	      $str_links=$this->pagination->create_links();
         
	      $data["links"]=explode('&nbsp;',$str_links);
          $this->load->view('category',$data);

      }
     

}
