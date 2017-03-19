<?php

    if(!isset($_POST['submit'])){
      echo "Error while submitting the form";
    }
//    var_dump($_POST);
    $email_to =         "kalpan.bhatt@gmail.com";
    $email_subject =    (isset($_POST['emailSubject']) ? $_POST['emailSubject'] : "Your email subject");
    $email_message =    $_POST['emailBody'];

    // create email headers

    $headers =  'From: '.$_POST['email']."\r\n".
                'Reply-To: '.$_POST['email']."\r\n" .
                'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);

    header("Location: /JaiBahuchar/contact.html");
    exit();
 ?>
