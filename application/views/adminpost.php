<?php $this->load->view('layouts/includes/header4'); ?>
                <div class="row">
                    <?php if(empty($results)): ?>
                        <p>No post found</p>
                      <?php else: ?>

                      <?php foreach($results as $product):?>

                        <div class="col-md-4 game">

                             <a href="">
                                <div class="btn btn-info" style="width:200px;"><?= $product->title; ?></div>

                                 <img src=<?= $product->image;?> style="width: 200px; height: 250px; margin:8px 0 8px;  ;"/>
                                  <div class="btn btn-default" style="width: 200px; margin-bottom: 5px;">Price:<?= $product->price; ?></div>
                              </a>

                                
                               <a href="<?=base_url();?>admin_page/delete_post/<?= $product->id;?>" class="btn btn-danger" style="width: 100px; margin-top: 5px; ">Delete Post</a>




                        </div>

                        

                          <?php endforeach;?>
                          <?php endif; ?>
                         </div>

              </div>
             



<?php $this->load->view('layouts/includes/footer'); ?>