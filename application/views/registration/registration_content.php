<section id="contact-page">
    <div class="container">
        <div class="center">        
            <h2>Create an account here.</h2>
<!--            <p class="lead">Enter in lead world.</p>-->
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success center" style="display: none"></div>
            <?php echo form_open('sign-up-process',array('id'=>"create_account_form" ,'class'=>'contact-form', 'name'=>"create_account_form")); ?>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <?php echo form_label("Enter your email*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'email','class'=>'form-control','name'=>'email')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Enter your first name.*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'firstname')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Enter your last name.*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'lastname')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Enter your phone no.*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'phone')); ?>
                    </div>                        
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <?php echo form_label("Tell us what your are.*","" ,array()) ?>
                        <?php echo form_dropdown('',array('Seller','Buyer'),'',array('class'=>'form-control','name'=>'usertype')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Give your Short Description (optional)","" ,array()) ?>
                        <?php echo form_textarea('','',array('rows'=>'8','class'=>'form-control','name'=>'description')); ?>
                    </div>                        
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">JOIN US</button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
         
           