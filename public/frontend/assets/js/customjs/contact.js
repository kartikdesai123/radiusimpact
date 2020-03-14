var Contact = function () {

    var list = function () {
        
        $('body').on('click', '#submit', function () {
            if (grecaptcha.getResponse() == "") {
                alert("You can't proceed whithout recapcha!");
            } 
        });

        var form = $('#contactusmainform');
        var rules = {
            name: {required: true},
            email: {required: true, email: true},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    }

    return{
        init: function () {
            list();
        }
    }
}();