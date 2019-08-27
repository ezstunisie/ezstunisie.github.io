<?php 
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message =$_POST['message'];


     $email_form = 'hazemzammit1@gmail.com';
         $email_subject = "new form submission";
        $email_body = "user name: $name.\n";
        $email_body = "user email: $visitor_email.\n";
        $email_body = "user message: $message.\n";

    $to ="hazemgithub@gmail.com";
    $headers = "from: $email_from \r\n";
    $headers =  "reply-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers)  ;  
    header ("location: contact.html");
        
        
        
?>