<?php 
  $name = $email = $subject = $message = "";

  if($_SERVER['REQUEST_METHOD']=="POST"){
    
    if(!empty($_POST['name']) || !empty($_POST['email']) ||!empty($_POST['subject'])||!empty($_POST['message'])){
      
      
      echo("have filled all the details"."<br>");
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      
      
      printf( "name : %s  email : %s  subdject : %s  and your message :%s", $name , $email, $subject,$message);
      
      require("connect_db.php");
     
      $safe_name = mysqli_real_escape_string($mysqli,$name);
      $safe_email = mysqli_real_escape_string($mysqli,$email);
      $safe_subject = mysqli_real_escape_string($mysqli,$subject);
      $safe_message = mysqli_real_escape_string($mysqli,$message);
     
      $insert_sql = "INSERT INTO received_messages(sender_name,sender_email,message_subject,sender_message)VALUES('".$safe_name."','".$safe_email."','".$safe_subject."','".$safe_message."')";
     
     
      mysqli_query($mysqli,$insert_sql) or die(mysqli_error($mysqli));
     
      echo ("record inserted with an id of :".mysqli_insert_id($mysqli));
     
     
     //create a mail to send to the sender of the message received
     
     $to = $safe_email;
     $subject = "our respond";
     $txt = "Thank you for your message!\n,your message will be processed soon!";
     $headers = "From: info@TouchAsoul.org" . "\r\n" .
     "CC: somebodyelse@example.com";

     mail($to,$subject,$txt,$headers); 
     header("location:".$_SERVER['HTTP_REFERER']);

    }
    else{
      echo "Nop fill the form";
      header("location:'".$_SERVER['HTTP_REFERER']."'");
    }
    
  }

  echo("processing your contact message");


?>