jQuery(function($) {
    var RegistrationForm = $('#create_account_form');
    RegistrationForm.submit(function(event){
            event.preventDefault();
            var form_status = $('<div class="form_status center"></div>');
            RegistrationForm.find("input[type='submit']").attr("disabled",true);
            $.ajax({
                    type:'POST',
                    url: $(this).attr('action'),
                    data: RegistrationForm.serialize(),
                    dataType: 'json',
                    beforeSend: function(){
                            RegistrationForm.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Please wait...</p>').fadeIn() );
                    }
            }).done(function(data){
                    
                    if(data.status=="success"){
                        form_status.html('<p class="text-success">' + data.responseText + '</p>').delay(5000).fadeOut();
                        RegistrationForm[0].reset();
                        
                    }else if(data.status=="failed"){
                        form_status.html('<p class="text-danger">' + data.responseText + '</p>').delay(5000).fadeOut();
                    }
                    RegistrationForm.find("input[type='submit']").attr("disabled",false);
            }); 
    });  
    
    
    var LoginForm = $('#log_in_form');
    LoginForm.submit(function(event){
            event.preventDefault();
            var form_status = $('<div class="form_status center"></div>');
            LoginForm.find("input[type='submit']").attr("disabled",true);
            $.ajax({
                    type:'POST',
                    url: $(this).attr('action'),
                    data: LoginForm.serialize(),
                    dataType: 'json',
                    beforeSend: function(){
                            LoginForm.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Please wait...</p>').fadeIn() );
                    }
            }).done(function(data){
                    if(data.status=="success"){
                        form_status.html('<p class="text-success">' + data.responseText + '</p>').delay(5000).fadeOut();
                        LoginForm[0].reset();
                       
                    }else if(data.status=="failed"){
                        form_status.html('<p class="text-danger">' + data.responseText + '</p>').delay(5000).fadeOut();
                    }
                     LoginForm.find("input[type='submit']").attr("disabled",false);
            }); 
    });  
    
});
