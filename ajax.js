$(document).ready(function() {		 
    $("formId").submit(function(ev) {
        // fetch form data
        var formData = {
            name        :$("#name").val(), 
            email       :$("#email").val(),  
            phone       :$("#phone").val(), 
            subject     :$("#subject").val(), 
            message     :$("#message").val()
        };

        //process form using ajax
        $.ajax({
            url: "process.php",
            type: "POST",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);
        });
        ev.preventDefault();
    });
});