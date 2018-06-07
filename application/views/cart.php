<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The GamingPlace</title>
   <link rel="stylesheet" href="<?= base_url('assests/csss/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assests/csss/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assests/csss/mainstyle.css')?>"/>
   
    
   
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
            <a class="navbar-brand" href="<?=base_url('product')?>">The GamimgPlace</a> 
             <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-left">
                  <li><a href="<?=base_url('product')?>">Home</a></li>    
              
                  <li class="active"><a href="<?=base_url ('product/register')?>">Create an Account</a></li>

                  
                </ul>
                  <form class="navbar-form navbar-right">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Enter username">
                    </div>

                     <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>
                    <button name="submit" type="submit" class="btn btn-default">Login</button>

                  </form>
             </div> 

          
       </div>
    </nav>


      <div class="container">
          <div class="row">

             <div class="col-md-4">

                <div class="cart-block">
                  <form action="cart/update" method="post">
                      <table cellpadding="6" cellspacing="1" style="width: 100%" border="0">
                           

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
                   <p><button class="btn btn-default" type="submit">Update Cart</button><a class="btn btn-default" href="cart">Go To Cart</a></p>


                  </form>
                  

                </div>

               <div class="panel panel-default panel-list">
                   <div class="panel-heading panel-heading-dark">
                          
                      <h3 class="panel-title"> Categories</h3>
                    </div>
                       
                    
                    <div class="list-group">
                          <a href="#" class="list-group-item">
                            Gaming Consoles
                          </a>
                          <a href="#" class="list-group-item">Xbox one Games</a>
                          <a href="#" class="list-group-item">Playstation 4 Games</a>
                          <a href="#" class="list-group-item">Nintendo wii U Games</a>
                          <a href="#" class="list-group-item">Xbox 360 Games</a>
                          <a href="#" class="list-group-item">Playstation 3 Games</a>
                          <a href="#" class="list-group-item">Nintendo wii Games</a>
                          <a href="#" class="list-group-item">Other Console Games</a>
                    </div>

                </div>

                 <div class="panel panel-default panel-list">
                   <div class="panel-heading panel-heading-dark">
                          
                      <h3 class="panel-title"> Most Popular</h3>
                    </div>
                       
                    
                    <div class="list-group">
                          <a href="#" class="list-group-item">
                            Gaming Consoles
                          </a>
                          <a href="#" class="list-group-item">Xbox one Games</a>
                          <a href="#" class="list-group-item">Playstation 4 Games</a>
                          <a href="#" class="list-group-item">Nintendo wii U Games</a>
                          <a href="#" class="list-group-item">Xbox 360 Games</a>
                          <a href="#" class="list-group-item">Playstation 3 Games</a>
                          <a href="#" class="list-group-item">Nintendo wii Games</a>
                          <a href="#" class="list-group-item">Other Console Games</a>
                    </div>

                </div>

             </div>
            
            <div class="col-md-8">
                   
              <div class="panel panel-default">
                  <div class="panel-heading panel-heading-green">
                  <h3 class="panel-title">The GamingPlace</h3>
                  </div>

                 <div class="panel-body">
                      <table class="table table-striped">
                      
                          <tr>
                              <th>product</th>
                              <th>Quantity</th>
                              <th>Price</th>



                          </tr>

                          <tr>
                              <th>Call Of Duty: Ghosts- Xbox One</th>
                              <th>1</th>
                              <th>$59.99</th>



                          </tr>

                           <tr>
                              <th>Destiny- Xbox One</th>
                              <th>1</th>
                              <th>$59.99</th>

                          </tr>

                           <tr>
                              <th>Watch Dogs- PS3</th>
                              <th>1</th>
                              <th>$59.99</th>

                          </tr>

                           <tr>
                                <td colspan="3" class="cart-subtotal">
                                    Subtotal:$179.97
                                  

                                </td>
                                
                          </tr>
                           <tr>
                                <td colspan="3" class="cart-shipping">
                                    Shipping:$4.99
                                  

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


                 </div>


              </div>    
            </div>

            
          </div>
        
      </div>










              <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo base_url('assests/jss/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/jss/bootstrap.js'); ?>"></script>
    
            </body>
            </html>