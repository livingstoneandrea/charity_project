<?php 
  $reason_for_contrib = $payment_opt = $date_sub = $amount_contrib=$message_for_contrib = $authorization=$status= "";
  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
     if(!empty($_POST["r-contrib"])){
         $reason_for_contrib = $_POST["r-contrib"];
     }else{
      
     }
      if(!empty($_POST["payment_opt"])){
         $payment_opt = $_POST["payment_opt"];
     }else{
      
     }
     if(!empty($_POST["date_pay"])){
         $date_sub = $_POST["date_pay"];
     }else{
      
     }
     if(!empty($_POST["amount"])){
          $amount_contrib = $_POST["amount"];
     }else{
      
     }
     if(empty(!$_POST["comment"])){
         $message_for_contrib = $_POST["comment"];
     }else{
      
     }
    
  }
  echo "payment method is : ".$payment_opt. " amount contribution is :".$amount_contrib."date : ".$date_sub."message : ".$message_for_contrib."  reasons : ".$reason_for_contrib;
   process_payment($payment_opt);

   function process_payment($pay_opt){
     switch($pay_opt){
      case "M-pesa" :
           $display_block = <<< END_OF_TEXT
            
            <script type="text/javascript">
              alert("calling mpesa APIs");
            </script>
           
           END_OF_TEXT;
        echo $display_block;
            break;
      case "paypal" :
           break;
      case "mastercard" :
           break;
     }
    
   }
  //connecting to the database to store transactions

  require("connect_db.php");

  $safe_reason = mysqli_real_escape_string($mysqli,$reason_for_contrib);
  $safe_pay_opt = mysqli_real_escape_string($mysqli,$payment_opt);
  $safe_date_sub = mysqli_real_escape_string($mysqli,$date_sub);
  $safe_amount = mysqli_real_escape_string($mysqli,$amount_contrib);
  $safe_mess = mysqli_real_escape_string($mysqli,$message_for_contrib);
  $safe_email = mysqli_real_escape_string($mysqli,$_POST['contrib_email']);

 $insert_sql = "INSERT INTO quick_contribs(reason_for_contrib,payment_opt,amount_paid,contrib_email,contrib_msg,authorization_code,status) VALUES('".$safe_reason."','".$safe_pay_opt."','".$safe_amount."','".$safe_email."','".$safe_mess."','".$authorization."','"
  .$status."')";
  
 mysqli_query($mysqli,$insert_sql)or die(mysqli_error($mysqli));
 
  echo"transaction completedf";
  

?>