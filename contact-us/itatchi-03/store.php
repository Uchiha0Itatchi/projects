<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['emai'];
  $message = $_POST['message'];

  $email_from = 'EasyTutorials@avinashkr.com';

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name.\n"
                  "User Email: $visitor_email.\n"
                       "User Message: $message.\n";

  $to = "Meliodas.Deghedy@gmail.com";

  $headers ="Form: $email_form \r\n";

  $headers = "Reply-to: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location.index.html");
?>