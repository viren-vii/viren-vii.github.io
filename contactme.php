<?php

    $name= $_REQUEST['name'];
    $visitor_number= $_REQUEST['number'];
    $message= $_REQUEST['feedback'];

    $email_from= 'virubhosale112@outlook.com';

    $email_subject= "NEW PORTFOLIO FEEDBACK.";

    $email_body="User Name: $name.\n".
                    "User Email: $visitor_number.\n".
                        "User Message: $message.\n";

    $to= "virubhosale112@gmail.com";
    
    $headers ="From: $email_from\r\n";

    $headers .="Reply-to: $visitor_email\r\n";

    mail($to,$email_subject,$email_body,$headers);
    
    header("Location: index.html");
?>
    