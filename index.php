<!Doctype html>
<html>
<head>
    <title>JQuery AJAX Practice</title>

    <!--JQuery Library-->
    <script src= "https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src= "ajax.js" > </script>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>
  <!-- FORM -->
<body>
<div class="form-style" id="contact-form">
<div class="form-style-heading">Dont see anything you like? Please Contact Us!</div>
    <div id="contact_results"></div>
    <div id="contact_body">
    <form id='formId' method="POST" action='results.php'>
        <label for="name"><span>Name: <span class="required">*</span></span>
            <input type="text" name="name" id="name" required="true" class="input-field" autocomplete="off"/>
            </label> <br>
        <label for="email"><span>Email: <span class="required">*</span></span>
            <input type="text" name="email" required="true" class="input-field"/>
            </label> <br>
        <label for="phone"><span>Phone:</span>
            <input type="text" name="phone" maxlength="15" placeholder="+63" required="true" class="tel-number-field long" />
            </label> <br>
        <label for="subject"><span>Category:</span>
            <select name="subject" class="select-field">
            <option value="General Question">General Question</option>
            <option value="Advertise">Order or Request</option>
            <option value="Partnership">Quotation</option>
            </select>
            </label> <br>
        <label for ="message"><span>Message:<span class="required">*</span></span>
            <textarea name="message" id="message" class="textarea-field" required="true" spellcheck="false"></textarea>
            </label> <br>
        <label>
            <span>&nbsp;</span><input type="submit" id="submit_btn" value="Submit" />
            </label> <br>
    </form>
    </div>
</div>
</body>
  
</html>