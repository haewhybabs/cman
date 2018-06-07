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
            <a class="navbar-brand" href="<?=base_url('index')?>">Haytick</a> 
             <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-left">
                  <li class=""><a href="<?=base_url('index')?>">Home</a></li>
                  <li class="active"><a href="<?=base_url('addproduct')?>">New Upload</a></li> 
                  <li class=""><a href="<?=base_url('index/uploads')?>">My Uploads</a></li>    
                   <li class=""><a href="<?=base_url('index/logout')?>">Logout</a></li>   
                 

                  
                </ul>
                   <div class="navbar-right">
                    <?php $username=$this->session->userdata('username')?>
                    <h1 class="greetings"> Welcome <?php echo $username;?></h1>
                   </div>   
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
                      

                        
                           <?php echo form_open_multipart('addproduct/publishpost', ['role'=>'form']);?>

                          <div class="form-group">
                               <label>Name of Your product</label>
                               <input type="text" class="form-control" name="title" placeholder="Name of your product">
                          </div>

                           <div class="form-group">
                               <label>Description</label>
                               <input type="text" class="form-control" name="description" placeholder="Describe your product">
                          </div>


                          <div class="form-group">
                               <label>Price</label>
                               <input type="text" class="form-control" name="price" placeholder="Enter the Price">
                          </div>

                          <div class="form-group">
                               <label>Location</label>
                               <input type="text"  class="form-control" name="location" placeholder="Enter your location">
                          </div>

                          <div class="form-group">
                               <label>Mobile Number</label>
                               <input type="text" class="form-control" name="mobile_number" placeholder="Enter Your Mobile Number">
                          </div>


                          <div class="form-group">
                              <label>Select the category</label>
                                 

                         
                             
                            <select name="category_id">
                              <?php foreach($categories as $category): ?>
                               <option value=<?= $category->id; ?>><?= $category->name; ?></option>
                              <?php endforeach; ?> 
                             </select>  

                        

                          </div>

                           <div class="form-group">
                               <label>Image of your Product</label>
                               <?php echo form_upload(['name'=>'userfile','value'=>'Save', 'class'=>'btn btn-primary btn-block','placeholder'=>'Upload your product']);?>
                          </div>

                          
                                             

                          <button type="submit" name="submit" class="btn btn-primary">Publish Post </button>


                          <?php echo form_close();?>

                       
                     

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