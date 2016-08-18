var helpers = {

    addErrorsForm: function(errors){
        helpers.clearErrors();

        $.each(errors, function(field, error){
            
            $.each(error,function(index, error_text){
                    $('.form-group-container-' + field + ' .form-control-error').append('<span>' + error_text + '</span>');
            });

        });

        return this;
    },

    clearErrors: function(){
        $('.form-control-error').html('');

        return this;
    },

    clearForm: function(){
        $('input', '.form-app').val('').removeAttr('checked').removeAttr('selected');

        return this;
    }

};