jQuery(function($) {
    var RegistrationForm = $('#create_account_form');
    RegistrationForm.submit(function(event){
            event.preventDefault();
            var form_status = $('<div class="form_status center"></div>');
            $.ajax({
                    type:'POST',
                    url: $(this).attr('action'),
                    data: RegistrationForm.serialize(),
                    beforeSend: function(){
                            RegistrationForm.prepend( form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Please wait...</p>').fadeIn() );
                    }
            }).done(function(data){
                   form_status.html('<p class="text-success">' + data.status + '</p>').delay(3000).fadeOut();
            });
    });  
    
});
