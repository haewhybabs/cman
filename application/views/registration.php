                       <?php $this->load->view('layouts/includes/header');?>
                
                          
                       <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
    
                       <?php echo form_open_multipart('registration/register', ['role'=>'form']);?>
                    

                          <div class="form-group">
                               <label>First Name</label>
                               <input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
                          </div>

                           <div class="form-group">
                               <label>Last Name</label>
                               <input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
                          </div>


                          <div class="form-group">
                               <label>Email</label>
                               <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                          </div>

                          <div class="form-group">
                               <label>Username</label>
                               <input type="text"  class="form-control" name="username" placeholder="Create a Username">
                          </div>

                          <div class="form-group">
                               <label>Password</label>
                               <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                          </div>

                           <div class="form-group">
                               <label>Confirm Password</label>
                               <input type="password" class="form-control" name="passconf" placeholder="Confirm your Password">
                          </div>
                          
                           <div class="form-group">
                               <label>Mobile</label>
                               <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number">
                          </div>
                         
                          <div class="form-group">
                               <label>Upload your Picture</label>
                               <?php echo form_upload(['name'=>'userfile','value'=>'Save', 'class'=>'btn btn-primary btn-block','placeholder'=>'Upload your Picture']);?>
                          </div>


                          <button type="submit" class="btn btn-primary">Register </button>



                       <?php echo form_close(); ?>
                             


       <?php $this->load->view('layouts/includes/footer'); ?>