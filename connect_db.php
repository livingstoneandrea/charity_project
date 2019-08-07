<?php
    global $mysqli;
    $mysqli = mysqli_connect("localhost","root","","charity_project");


    if(mysqli_connect_errno()){
       printf("connection failed  %s\n ",mysqli_connect_error());
        
        exit();

    }else{
       echo "</br>";
       printf("host info : %s\n",mysqli_get_host_info($mysqli));  
      //mysqli_close($mysqli);   
    }
?>