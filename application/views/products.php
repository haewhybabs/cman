 <div class="row">
         <?php foreach($results as $product):?>

                  <div class="col-md-4 game">

                             <a href="#">
                                <div class="btn btn-info" style="width:200px;"><?= $product->title; ?></div>

                                 <img src=<?= $product->image;?> style="width: 200px; height: 250px; margin:8px 0 8px;  ;"/>
                                  <div class="btn btn-default" style="width: 200px; margin-bottom: 5px;">Price:<?= $product->price; ?></div>
                              </a>



                  </div>

                        

          <?php endforeach;?>  
   </div>

 </div>



            <ul class="pagination" style="margin-left: 7px;padding-left: 4px;">
                               <?php foreach ($links as $link) : ?>
                                 <li><?php echo $link;?></li>  
                               <?php endforeach;?>
            </ul>
