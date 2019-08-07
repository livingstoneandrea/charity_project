<?php
$subscription_email = "";

//global $mysqli;

if($_SERVER['REQUEST_METHOD']=="POST"){

  if(!empty($_POST["subscription-email"])){
    
    $subscription_email = $_POST['subscription-email'];
    
    echo "you email adress is ". $subscription_email;
  }
  
}

  //require "connect_db.php";
 $conn = new mysqli("localhost","root","","charity_project");

  if($conn->connect_error){
    die("connection failed". $conn->connect_error);
  }
  

 $safe_email = mysqli_real_escape_string($conn,$subscription_email);

 echo "you email ".$safe_email;
 $insert_sql = "INSERT INTO subscribers(subscriber_email) VALUES('".$safe_email."')";

 $conn->query($insert_sql)or die($conn->error);
 echo "<script>
     alert('succesfully subscribed');
   
     </script>";


 //header("location:charity_index.php");
  
 echo "<br>record inserted with id of :".$conn->insert_id;


?>