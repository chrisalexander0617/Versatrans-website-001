<?php

     //check if the contact form has been submitted
     if(isset($_POST['submit'])) 
     {
          //identifying data from the contact form
          $name = $_POST['name'];
          $subject = $_POST['subject'];
          $mailFrom = $_POST['mail'];
          $message = $_POST['message'];

          //sending that mail externally
          $mailTo = "cclemmons@primedebut.net";
          $headers = "From: ".$mailFrom;
          $txt = "You have received an email from ".$name.".\n\n".$message;

          mail($mailTo, $subject, $txt, $headers);
          //sending user back to homepage after mail has been sent
          header("Location: index.html?mailsend");
     }


?>