<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haytick</title>
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
            <a class="navbar-brand" href="<?=base_url('Haytick')?>">Haytick</a> 
             <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-left">
                  <li class="active"><a href="<?=base_url('Haytick')?>">Home</a></li>    
              
                  <li><a href="<?=base_url ('registration')?>">Create an Account</a></li>

                  
                </ul>
                  <?php echo form_open_multipart('registration/login', ['class'=>'navbar-form navbar-right']);?>
                    <div class="form-group">
                      <input type="text" name="email" class="form-control" placeholder="Enter Your Email">
                    </div>

                     <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>
                    <button name="submit" type="submit" class="btn btn-default">Login</button>

                  <?php echo form_close(); ?>
             </div> 

          
       </div>
    </nav>
  </header>


         <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="image1"></div>
     
                         <div class="carousel-caption">
                  <h1>Haytick.tk  Platform</h1>
                  <p><strong>Register with us and then your online marketing </strong> </p>
               </div>  
                        </div>

                        <div class="item">
                 <div class="image1"></div>
                <div class="carousel-caption">
                  <h3>Online Marketing</h3>
                  <p></p>
                </div>
              </div>

                         
                         <div class="item">
                <div class="image2"></div>
     
                         <div class="carousel-caption">
                  <h1>Its meant for you</h1>
                  <p></p>
               </div>  
                        </div>


                        <div class="item">
                <div class="image2"></div>
     
                         <div class="carousel-caption">
                  <h1>Haytick </h1>
                  <p>Home and office accessories supply on your convenience </p>
               </div>  
                        </div>
            </div>

        </div>

  <body>
    

      <div class="container">
          <div class="row">

             <div class="col-md-4">
                   
                 <div class="panel panel-default panel-list">
                   <div class="panel-heading panel-heading-dark">
                          
                      <h3 class="panel-title"> Categories</h3>
                    </div>
                       
                    
                    <div class="list-group">
                          
          
                           <a href="<?=base_url('category/android')?>" class="list-group-item">Android Phones</a>
                          <a href="<?=base_url('category/otherphones')?>" class="list-group-item">Other Phones</a>
                          <a href="<?=base_url('category/Hplaptops')?>" class="list-group-item">Hp laptops</a>
                          <a href="<?=base_url('category/lenovolaptops')?>" class="list-group-item">Lenovo Laptops</a>
                          <a href="<?=base_url('category/Otherlaptops')?>" class="list-group-item">Other Laptops</a>
                          <a href="<?=base_url('category/others')?>" class="list-group-item">Others</a>
                        
                    </div>
           
                  </div>
                   <div class="panel panel-default panel-list">
                   <div class="panel-heading panel-heading-dark">
                          
                      <h3 class="panel-title">Some Available Products</h3>
                    </div>
                       
                    
                    <div class="list-group">
                         

                          <?php foreach ($random as $category): ?>

                              <a href="<?=base_url();?>Haytick/detail/<?= $category->id;?>" class="list-group-item">
                                <p><?= $category->title; ?></p>

                                
                              </a>
                         <?php endforeach; ?>
                       
                         
                        
                          
                        
                    </div>
           
                  </div>
             </div>

             <div class="col-md-8">
                   
                  <div class="panel panel-default">
                    <div class="panel-heading panel-heading-green">
                      <h3 class="panel-title">Latest Release</h3>

                    </div>

              
              <div class="panel-body">

                  
                   <div class="row details">
                       <div class="col-md-5">
                          
                           <img src=<?= $product->image;?> style="width: 100%; height: 400px; margin: 0 auto;"/>
                            <p class="btn btn-info" style="margin: 5px auto ; width: 100%;">price: <?= $product->price;?></p>
                             </div>
                              
                             <div class="col-md-7">

                                 <h3 class="btn btn-info" style="width: 100%; margin-bottom:7px;"><?= $product->title ;?></h3>
                                   
                                     
                                   
                                <div class="jumbotron">
                                    <p>Description : <?= $product->description;?></p>
                                </div>

                                <div class="jumbotron">
                                  <p> My current location : <?=$product->location ; ?></p><br>
                                  <p class="btn btn-default" style="width:120%">Contact me on: <?=$product->mobile_number ;?></p>
                                  
                          
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