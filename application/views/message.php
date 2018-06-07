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
                  <li class=""><a href="<?=base_url('addproduct')?>">New Upload</a></li> 
                  <li class=""><a href="<?=base_url('index/uploads')?>">My Uploads</a></li>    
                  <?php $id=$this->session->userdata('id')?>
                  <li class="active"><a href="<?=base_url();?>message/chat/<?= $id;?>">Messenger</a></li>
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
                  <h1>Haytick.tk Platform</h1>
                  <p>Register with us and then your online marketing </p>
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
                          
                      <h3 class="panel-title"> chats</h3>
                    </div>
                       
                    
                     
                    <div class="panel-body">
                        
                        <?php $array1=array();?>
                       


                      <?php foreach($chats as $chat): ?>
                        <?php $array1= $this->Haytick_model->get_users($chat);?>
                        
                         
                             <?php foreach ($array1 as $users):?>
                              <br>

                                 <a href="<?=base_url();?>message/chat/<?=$users->id;?>" class="btn btn-success" style="width: 100%; color: white;"><?= $users->first_name; ?>  <?= $users->last_name; ?> </a></li>
                        
                             <?php endforeach ;?>
                          
                             <?php endforeach; ?>  

                         
                           
                       </div>
           
                  </div>
             </div>

             <div class="col-md-8">
                 <div class="panel panel-default">
                              <div class="panel-heading panel-heading-green">
                                <?php foreach ($chatdetails as $name) : ?>
                                 <h3 class="panel-title"><?= $name->first_name; ?> <?= $name->last_name; ?></h3>
                                <?php endforeach;?>
                              </div>

                      
                       <div class="panel-body">

                           
                         <?php $id=$this->session->userdata('id')?>
                           <?php foreach($messages as $chats): ?>
                              <?php $data=$this->Haytick_model->update_notification($users->id);?>
                            <?php if (!$data):?>
                               <?php if ($chats->sender_id==$id):?>
                              
                                 <p class="jumbotron" style="text-align: right;margin-top: 20px; background-color:#f0f0f0; font-size: 15px; font-family: sans-serif; min-height: 20px; width: 50%;margin-left: 50%;"><a href="" class="glyphicon glyphicon-ok"><?php echo $chats->messages; ?></a></p>
                              
                               
                                 
                                <?php else: ?>
                             <p class="jumbotron" style="text-align: left;margin-top: 20px; background-color: #b4b4b4; font-size: 15px; font-family: sans-serif; min-height: 20px; width: 50%;"><a href="" class="glyphicon glyphicon-ok"><?php echo $chats->messages; ?></a></p>

                                <?php endif;?> 
                           

                          <?php else:?>

                                  
                             <?php if ($chats->sender_id==$id):?>
                              
                                 <p class="jumbotron" style="text-align: right;margin-top: 20px; background-color:#f0f0f0; font-size: 15px; font-family: sans-serif; min-height: 20px; width: 50%;margin-left: 50%;"><?php echo $chats->messages; ?></p>
                              
                               
                                 
                                <?php else: ?>
                             <p class="jumbotron" style="text-align: left;margin-top: 20px; background-color: #b4b4b4; font-size: 15px; font-family: sans-serif; min-height: 20px; width: 50%;"><?php echo $chats->messages; ?></p>

                                <?php endif;?> 

                            <?php endif ;?>
                            <?php endforeach;?>


                           
                            <?php $idd=$sender_id;?>
                             <?php echo form_open_multipart('message/chat/'.$idd);?>

                                  <div class="form-group">
                                       <label>Message</label>
                                        <textarea name="messages" style="width:700px; height:90px" class="form-control"> </textarea>
                                  </div>
                                  <button type="submit" name="submit" class="btn btn-primary">Send Message </button>

                             <?php echo form_close();?>
                         </div>
                          

                  </div>
             </div>

        </div>
    </div>
