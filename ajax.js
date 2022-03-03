$(document).ready(function() {		 
    $("#submit_btn").click(function(ev) {

        // fetch form data
        var form_data = {
            'user_name'		: $("#name").val(), 
            'user_email'	: $("#email").val(),  
            'phone_number'	: $("#phone").val(), 
            'subject'		: $("#subject").val(), 
            'msg'			: $("#message").val()
        };

        //process form using ajax
        $.ajax({
            url: "process.php",
            type: "POST",
            data: form_data,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);
        });
        ev.preventDefault();
    });
});