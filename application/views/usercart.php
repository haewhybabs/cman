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
                 <?php echo form_open('cart/update'); ?>
                      <table cellpadding="6" cellspacing="1" style="width: 100%; margin-top: 60px;" border="0">
                           

                           <tr>
                               <th>QTY</th>

                               <th>Item Description</th>
                               <th style="text-align:right">Item price</th>
 
                           </tr>
                           <?php $i=1; ?>
                <?php foreach ($this->cart->contents() as $items): ?>
                   <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
 
                           <tr>

                             <td><input type="text" name="<?php echo $i.'[qty]'; ?>" placeholder="<?php echo $items['qty']; ?>" style="width: 50px;"/>
                             <td class="right"><div class="btn btn-info" style="width:100%; "><?php echo $items['name']; ?></td>

                             <td class="right" style="text-align: right"><div class="btn btn-default" style="width:100%; margin:20px;"><?php echo $this->cart->format_number($items['price']); ?></td>
                            

                           </tr>
                           <?php $i++;?>
                        <?php endforeach; ?>
                        <tr>
                              <td></td>

                              <td class="right"><strong>Total</strong></td>
                              <td class="right" style="text-align: right"><div class="btn btn-info" style="width:100%; margin-left: 20px;">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>

                        </tr>
                      </table>
                   <br>
                   <p><button class="btn btn-default" type="submit" style="margin: 20px;">Update Cart</button><a class="btn btn-default"  href="<?=base_url('cart/goto_cart')?>">Go To Cart</a></p>


                  <?php echo form_close();?> 
                  

                </div>
              
             
                 <div class="panel panel-default panel-list">
                   <div class="panel-heading panel-heading-dark">
                          
                      <h3 class="panel-title">Smart Phones</h3>
                    </div>
                            
                    
                    <div class="list-group">
                          
          
                         <a href="<?=base_url('category/android')?>" class="list-group-item">Samsung </a>
                          <a href="<?=base_url('category/otherphones')?>" class="list-group-item">Infinix</a>
                          <a href="<?=base_url('category/Hplaptops')?>" class="list-group-item">Tecno</a>
                          <a href="<?=base_url('category/lenovolaptops')?>" class="list-group-item">Lenovo</a>
                          <a href="<?=base_url('category/Otherlaptops')?>" class="list-group-item">itel</a>
                          <a href="<?=base_url('category/others')?>" class="list-group-item">Htc</a>
                        
                    </div>
           
                  </div>

                  <div class="panel panel-default panel-list">
                   <div class="panel-heading panel-heading-dark">
                          
                      <h3 class="panel-title">Laptops</h3>
                    </div>

                       <div class="list-group">
                         <a href="<?=base_url('category/android')?>" class="list-group-item">Samsung </a>
                          <a href="<?=base_url('category/otherphones')?>" class="list-group-item">Hp</a>
                          <a href="<?=base_url('category/Hplaptops')?>" class="list-group-item">Lenovo</a>
                          <a href="<?=base_url('category/lenovolaptops')?>" class="list-group-item">Asus</a>
                          <a href="<?=base_url('category/Otherlaptops')?>" class="list-group-item">Apple</a>
                          <a href="<?=base_url('category/others')?>" class="list-group-item">Toshiba</a>
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
                    <div class="row">
                          <?php foreach($results as $product):?>
                       <div class="col-md-4 game">
                        
                         
                       

                         <a href="<?=base_url();?>index/detailuser/<?= $product->id;?>">
                                <div class="btn btn-info" style="width:200px;"><?= $product->title; ?></div>

                                 <img src=<?= $product->image;?> style="width: 200px; height: 250px; margin:8px 0 8px;  ;"/>
                                  <div class="btn btn-default" style="width: 200px; margin-bottom: 5px;">Price:<?= $product->price; ?></div>
                          </a>


                          
                          <div class="game-add">
                              <?php echo form_open('cart/add'); ?>

                                QTY: <input class="qty" type="text" name="qty" value="1">
                                <input type="hidden" name="item_number" value="<?php echo $product->id; ?>"/>
                                <input type="hidden" name="price" value="<?php echo $product->price; ?>"/>
                                <input type="hidden" name="title" value="<?php echo $product->title; ?>"/>
                                <button class="btn btn-primary" type="submit" style="margin-top: 15px;">Add To Cart</button>
                                <?php echo form_close();?>
                          </div>
                        
                                
                        </div>
                        <?php endforeach;?>
                    </div>

                    <?php $this->load->view('layouts/includes/footer'); ?>

                      
               










            