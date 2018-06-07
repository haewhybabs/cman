<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMan</title>
   <link rel="stylesheet" href="<?= base_url('assests/csss/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assests/csss/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assests/csss/mainstyle.css')?>"/>
    <script src="<?= base_url('assests/js/jquery.js')?>"></script>
    
   
  </head>
  <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container">

           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           
           </button>
            <a class="navbar-brand" href="<?=base_url('products/userpage')?>">CMan </a> 
             <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-left">
                  <li class=""><a href="<?=base_url('products/userpage')?>">Home</a></li>    
              
                  <li class="active"><a href="<?=base_url('product/usercart')?>">Shopping Cart</a></li> 
                   <li class=""><a href="<?=base_url('admin_page/logout')?>">Logout</a></li>  
                  
                </ul>
                    <div class="navbar-right">
                        <?php $username=$this->session->userdata('username')?>
                        <h1 class="greetings"> Welcome <?php echo $username;?></h1>
                    </div> 

                   
                   
             </div> 

          
       </div>
    </nav>
  </header>

      <div class="container">
          <div class="row">

             <div class="col-md-4">

                <div class="cart-block">
                  <form action="cart/update" method="post">
                      <table cellpadding="6" cellspacing="1" style="width: 100%; margin-top: 70px;" border="0">
                           

                           <tr>
                               <th>QTY</th>

                               <th>Item Description</th>
                               <th style="text-align:right">Item price</th>
 
                           </tr>

                           <tr>
                             <td></td>
                             <td class="right"><strong>Total</strong></td>

                             <td class="right" style="text-align: right">$</td>
                            

                           </tr>
                      </table>
                   <br>
                   <p><button class="btn btn-default" type="submit" style="margin: 20px;">Update Cart</button><a class="btn btn-default"  href="<?=base_url('cart/goto_cart')?>">Go To Cart</a></p>

                  </form>
                  

                </div>

               <div class="panel panel-default panel-list">
                   <div class="panel-heading panel-heading-dark">
                          
                      <h3 class="panel-title">Smart Phones</h3>
                    </div>
                            
                    
                    <div class="list-group">
                          
          
                         <a href="<?=base_url('category/samsung')?>" class="list-group-item">Samsung </a>
                          <a href="<?=base_url('category/infinix')?>" class="list-group-item">Infinix</a>
                          <a href="<?=base_url('category/tecno')?>" class="list-group-item">Tecno</a>
                          <a href="<?=base_url('category/lenovophones')?>" class="list-group-item">Lenovo</a>
                          <a href="<?=base_url('category/itelphones')?>" class="list-group-item">itel</a>
                          <a href="<?=base_url('category/htcphones')?>" class="list-group-item">Htc</a>
                        
                    </div>
           
                  </div>

                  <div class="panel panel-default panel-list">
                   <div class="panel-heading panel-heading-dark">
                          
                      <h3 class="panel-title">Laptops</h3>
                    </div>

                       <div class="list-group">
                         <a href="<?=base_url('category/samsunglaptop')?>" class="list-group-item">Samsung </a>
                          <a href="<?=base_url('category/Hp')?>" class="list-group-item">Hp</a>
                          <a href="<?=base_url('category/Lenovolaptops')?>" class="list-group-item">Lenovo</a>
                          <a href="<?=base_url('category/Asus')?>" class="list-group-item">Asus</a>
                          <a href="<?=base_url('category/Apple')?>" class="list-group-item">Apple</a>
                          <a href="<?=base_url('category/Toshiba')?>" class="list-group-item">Toshiba</a>
                       </div>
                    <div class="list-group">
                         

                
                       
                         
                        
                          
                        
                    </div>
           
                  </div>

             </div>
            
            <div class="col-md-8">
                   
              <div class="panel panel-default">
                  <div class="panel-heading panel-heading-green">
                  <h3 class="panel-title">Latest Release</h3>
                  </div>

                 <div class="panel-body">
                      <table class="table table-striped">
                      
                          <tr>
                              <th>product</th>
                              <th>Quantity</th>
                              <th>Price</th>



                          </tr>

                          <tr>
                              <th>infinix hot x559</th>
                              <th>1</th>
                              <th>$59.99</th>



                          </tr>

                           <tr>
                              <th>Samsung Galaxy S7</th>
                              <th>1</th>
                              <th>35000</th>

                          </tr>

                           <tr>
                              <th>Tecno boom j8</th>
                              <th>1</th>
                              <th>450000</th>

                          </tr>

                           <tr>
                                <td colspan="3" class="cart-subtotal">
                                    Subtotal:#735,000.00
                                  

                                </td>
                                
                          </tr>
                           <tr>
                                <td colspan="3" class="cart-shipping">
                                    Shipping:#4.99
                                  

                                </td>
                                
                          </tr>

                      </table> 

                      <h3>Shipping Info</h3>   
                    <div class="form-group">
                         <label>Address</label>
                         <input type="text" name="address" class="form-control">

                    </div>  

                    <div class="form-group">
                         <label>Address 2</label>
                         <input type="text" name="address2" class="form-control">

                    </div>  

                    <div class="form-group">
                         <label>City</label>
                         <input type="text" name="city" class="form-control">

                    </div>  

                    <div class="form-group">
                         <label>State</label>
                         <input type="text" name="state" class="form-control">

                    </div>  

                    <div class="form-group">
                         <label>Zipcode</label>
                         <input type="text" name="zipcode" class="form-control">

                    </div>
                    <p><button class="btn btn-primary" type="submit" name="submit">Checkout</button></p>  


               <?php $this->load->view('layouts/includes/footer'); ?>