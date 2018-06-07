<?php
class Cart extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url'));
    $this->load->model('product_model');
}
	public function index()
	{
      $this->load->view('buycart');
    }
     public function add(){

     	
        $data = array(
	        'id'      => $this->input->post('item_number'),
	        'qty'     => $this->input->post('qty'),
	        'price'   => $this->input->post('price'),
	        'name'    => $this->input->post('title')
	        
         );
         $this->cart->insert($data);
         redirect ('products/usercart');
     }
     /*
      *update cart
     */
     public function update($in_cart=null){

     $data=$this->input->post();
     $this->cart->update($data);
     redirect('products/usercart','refresh');


     }
     public function goto_cart(){

        $this->load->view('goto_cart');
     }
	}


?>