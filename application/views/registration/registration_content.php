<section id="contact-page">
    <div class="container">
        <div class="center">        
            <h2>Drop Your Message</h2>
            <p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div> 
        <div class="row contact-wrap"> 
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
            <?php echo form_open('sign-up',array('id'=>"main-contact-form" ,'class'=>"contact-form", 'name'=>"contact-form")); ?>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <?php echo form_label("Enter your email*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'email','class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Enter your first name.*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'email','class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Enter your last name.*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'email','class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Enter your phone no.*","" ,array()) ?>
                        <?php echo form_input(array('type'=>'text','class'=>'form-control')); ?>
                    </div>                        
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <?php echo form_label("Tell us what your are.*","" ,array()) ?>
                        <?php echo form_dropdown('',array('Seller','Buyer'),'',array('class'=>'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_label("Give your Short Description (optional)","" ,array()) ?>
                        <?php echo form_textarea('','',array('rows'=>'8','class'=>'form-control')); ?>
                    </div>                        
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">JOIN US</button>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
         
           