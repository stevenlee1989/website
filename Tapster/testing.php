<html>
<head>
<title>Sending email using PHP</title>
</head>
<body>
<?php
   $to = "cheewei1989@gmail.com";
   $subject = "This is testing subject";
   $message = "This is simple text message.";
   $header = "From:abc@somedomain.com \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
?>
</body>
</html>