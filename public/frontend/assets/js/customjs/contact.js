var Contact = function () {

    var list = function () {

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