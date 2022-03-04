<link href="style.css" rel="stylesheet" type="text/css" />
<div class="form-style" id="contact-form">
<?php

$errors = [];
$data = [];

$name = $_POST['name']; 
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}

if (empty($_POST['phone'])) {
    $errors['phone'] = 'Phone Number is required.';
}

if (empty($_POST['subject'])) {
    $errors['subject'] = 'Subject is required.';
}

if (empty($_POST['message'])) {
    $errors['message'] = 'Message is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Data has been uploaded!';
    echo "test <br> $name <br> $email <br> $phone <br> $message <br> $subject <br>";
}

echo json_encode($data);
?>
</div>