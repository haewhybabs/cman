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
              
                  <li><a href="<?=base_url ('product/register')?>">Create an Account</a></li>

                  
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
                        <?php foreach(get_categories_h() as $category): ?>
                          <a href="<?=base_url();?>product/category<?=$category->id;?>" class="list-group-item">
                          <?php echo $category->name;  ?>
                          </a>
                          <?php endforeach;?> 
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
    
                     <div class="row details">
                       
                         <div class="col-md-4">
                           
                        <img src="<?=base_url();?>/assests/img/<?= $product->image; ?>" style="width: 150px; height: 200px;"/>
                         </div>
                          
                         <div class="col-md-8">

                             <h3><?= $product->title ;?> </h3>
                            <div class="details-price">
                               <?= $product->price;?>
                            </div>
                            <div class="details-description">
                                <p><?= $product->description;?></p>
                            </div>

                            <div class="details-buy">
                                 <?php echo form_open('product/add'); ?>

                                QTY: <input class="qty" type="text" name="qty" value="1">
                                <input type="hidden" name="item_number" value="<?php echo $product->id; ?>"/>
                                <input type="hidden" name="price" value="<?php echo $product->price; ?>"/>
                                <input type="hidden" name="title" value="<?php echo $product->title; ?>"/>
                            <button class="btn btn-primary" type="submit">Add To Cart</button>
                             <?php echo form_close();?> 
                            </div>
                         </div>
                       
                         
                     </div>    
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