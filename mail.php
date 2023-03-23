<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $to='your-email@example.com';
    $subject='New Form Submission';
    $message="Name: ".$name."\n"."Email: ".$email."\n"."Message: ".$message;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
        echo "Thank you for contacting us!";
    }
    else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>