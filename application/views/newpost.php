<?php $this->load->view('layouts/includes/header4'); ?>
              	
             
                   <?php echo form_open_multipart('admin_page/publishpost', ['role'=>'form']);?>

                          <div class="form-group">
                               <label>Name of The product</label>
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
                              <label>Select the category</label>
                                 

                         
                             
                            <select name="category_id">
                              <?php foreach($categories as $category): ?>
                               <option value=<?= $category->category_id; ?>><?= $category->categories; ?></option>
                              <?php endforeach; ?> 
                             </select>  

                        

                          </div>

                           <div class="form-group">
                               <label>Image of your Product</label>
                               <?php echo form_upload(['name'=>'userfile','value'=>'Save', 'class'=>'btn btn-primary btn-block','placeholder'=>'Upload your product']);?>
                          </div>

                          
                                             

                          <button type="submit" name="submit" class="btn btn-primary">Publish Post </button>


                          <?php echo form_close();?>


<?php $this->load->view('layouts/includes/footer'); ?>