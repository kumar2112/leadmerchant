<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>join us</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
         <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-8 col-offset-2">
                        <div class="row">
                            <h3 class="text-center">Join Us</h3>
                        </div>
                        <?php echo form_open('sign-up',array('name'=>'registration-form')); ?>
                            <div class="form-group">
                                <?php echo form_label("Enter your email","" ,array()) ?>
                                <?php echo form_input(array('type'=>'email','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                 <?php echo form_label("Enter your first name","" ,array()) ?>
                                <?php echo form_input(array('type'=>'email','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label("Enter your last name","" ,array()) ?>
                                <?php echo form_input(array('type'=>'email','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label("Tell us your intrest","" ,array()) ?>
                                <?php echo form_input(array('type'=>'email','class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_label("Tell us what your are","" ,array()) ?>
                                <?php echo form_dropdown('',array('Seller','Buyer'),'',array('class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_submit('sign-up-button', 'Save',array('class'=>'btn btn-default btn-block active')); ?>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
                       