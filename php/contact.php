<?php
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $emailInfo = $_POST['emailInfo'];
  $phoneNumber = $_POST['phoneNumber'];
  $comments = $_POST['comments'];

  $email_from = 'Imperial Plating Company';
  $email_subject = 'New Message From Imperial Contact';
  $email_body = "First Name: $firstName.\n".
                "Last Name: $lastName.\n".
                "Email: $emailInfo.\n".
                "Phone Number: $phoneNumber.\n".
                "Comments: $comments.\n";

  $to = "sales@implating.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $emailInfo \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("location: contact.html");
?>
