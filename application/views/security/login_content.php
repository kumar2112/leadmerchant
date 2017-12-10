<section id="contact-page">
    <div class="container">
        <div class="row contact-wrap"> 
            <div class="center"> 
                <img src="<?php echo base_url('assets/')?>/images/user.png" width="400" height="200">
            </div> .
            <div class="status alert alert-success" style="display: none"></div>
            <div class="col-md-4 col-md-offset-4">
            <?php echo form_open('login-process',array('id'=>"log_in_form" ,'class'=>"contact-form", 'name'=>"log_in_form")); ?>
                <div class="col-sm-11 col-sm-offset-1">
                    <div class="form-group">
                        <?php echo form_label("Username*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'username')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Password*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'password','class'=>'form-control','name'=>'password')); ?>
                    </div>
                </div>
                <div class="col-sm-11 col-sm-offset-1">
                    <div class="form-group center">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">LOGIN</button>
                    </div>
                </div>
            <?php echo form_close(); ?>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
         
           



