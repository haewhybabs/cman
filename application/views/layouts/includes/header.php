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
            <a class="navbar-brand" href="<?=base_url('')?>">CMan</a> 
             <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-left">
                  <li class="active"><a href="<?=base_url('products')?>">Home</a></li>    
              
                  <li class=""><a href="<?=base_url ('products/load_registration')?>">Create an Account</a></li>


                  
                </ul>
                 <?php echo form_open_multipart('products/user_login', ['class'=>'navbar-form navbar-right']);?>
               
                    <div class="form-group">
                      <input type="text" name="email" class="form-control" placeholder="Enter your Email">
                    </div>

                     <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
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
                  <h1>CMan-tk Platform</h1>
                 
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
                  <h1>CMantk </h1>
                  <p>Home and office accessories supply on your convenience </p>
               </div>  
                        </div>
            </div>

        </div>

  <body>
     
    
       <script>
         $(document).ready(function(){
         $("#p1").css("color", "red")
          .slideUp(10000)
          .slideDown(4000);
            
    
         });
      </script>

      <div class="container">
        <div class="hay1">
          <div class="row">
            <div class="col-md-6">
              <img src=<?=base_url('assests/img/hay.png') ?> style="margin-top: 30px;">
            </div>

             <div class="col-md-6">
              <p id="p1" style="margin-top: 100px; font-size: 30px; font-family: sans-serif; "> Giving  life to Smartphones and Laptops .</p>
              <p id="p1" style="margin-top: 100px; font-size: 30px; font-family: sans-serif; "> CREATE AN ACCOUNT WITH US TO MAKE YOUR TRANSACTION </p><br>
               <a href="<?= base_url('products/load_registration')?>" class="btn btn-info" style="width:250px;">Register Now</a>
             </div>
          </div>
          
          
        </div>
             <?php if($msg=$this->session->flashdata('alert alert-danger fade in')):?>
                             <div class="alert alert-danger fade in">
                               <?php echo $msg;?>
                             </div>
             <?php endif;?>
          <div class="row">


             <div class="col-md-4">
                   
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

               <?php if($msg=$this->session->flashdata('alert alert-success alert-dismissible')):?>
                             <div class="alert alert-success alert-dismissible">
                               <?php echo $msg;?>
                             </div>

               <?php endif;?>
                   
                  <div class="panel panel-default">
                  <div class="panel-heading panel-heading-green">
                  <h3 class="panel-title">Latest Release</h3>
              </div>

              
              <div class="panel-body">
             


