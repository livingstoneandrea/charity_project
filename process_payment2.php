<?php 

   // echo "info will be updated soon";

 $currency_locale = $contrib_amount =$monthly_contrib =$email_adress = $card_number =$security_code= $Exp_date = $contrib_name =$contrib_adress =$contrib_city = $contrib_country= $contrib_state = $contrib_postal_adress = $authorized=$authorization_code=$status ="";

if($_SERVER["REQUEST_METHOD"]==="POST"){

    if(!empty($_POST['currency-locale']) && !empty($_POST['contrib-amount'])&& !empty($_POST['monthly-contrib'])&& !empty($_POST['email-adress'])&& !empty($_POST['card_number'])&& !empty($_POST['security_code'])&& !empty($_POST['Exp_date'])&& !empty($_POST['contrib_name'])&& !empty($_POST['contrib_adress'])&& !empty($_POST['contrib_city'])&& !empty($_POST['contrib_country']) &&!empty($_POST['contrib_state'])&& !empty($_POST['contrib_postal_code'])){
        
        
       // echo "all form inputs filled";
        
        echo $_POST['currency-locale'] ."<br> ". $_POST['contrib-amount']." ". $_POST['monthly-contrib'] ."<br> ".$_POST['email-adress'] ." ".$_POST['card_number'] ." ".$_POST['security_code'] ." ".$_POST['Exp_date'] ." ".$_POST['contrib_name'] ." ".$_POST['contrib_adress']." ".$_POST['contrib_city'] ." ".$_POST['contrib_country'] ." ". $_POST['contrib_state']." ".$_POST['contrib_postal_code'];
        
        
        require("connect_db.php");
     
        //call the payment getway APi's and save the response as either success or failure
        if($payment_method == "mpesa"){
          #call mpesa Api's and get authotications here
         
         //if success  $authorization = success;
         // get auth code 
         //assign status code
         
         
        }
     
         $authorized = True;
         $authorization = "success";
         $status = "processed";
         $authorization_code = 1;
     
     //save transaction details into the database case success transaction from the credit card
     
       
      process_transactions($authorization,$mysqli);
        
        
        
        
    }else{
        
        echo "need to fill all the details";
    }
    
    
}
  
//funcion to save transaction details on to the database case success
function process_transactions($auth,$mysqli){
    switch($auth){
         case  'success':
                $currency_locale = mysqli_real_escape_string($mysqli,$_POST['currency-locale']);
        
                $contrib_amount = mysqli_real_escape_string($mysqli,$_POST['contrib-amount']);
                $monthly_contrib = mysqli_real_escape_string($mysqli,$_POST['monthly-contrib']);
                $email_adress = mysqli_real_escape_string($mysqli,$_POST['email-adress']);
                $card_number =  mysqli_real_escape_string($mysqli,$_POST['card_number']);
                $security_code = mysqli_real_escape_string($mysqli,$_POST['security_code']);
                $Exp_date =  mysqli_real_escape_string($mysqli,$_POST['Exp_date']);
                $contrib_name = mysqli_real_escape_string($mysqli,$_POST['contrib_name']);
                $contrib_adress = mysqli_real_escape_string($mysqli,$_POST['contrib_adress']);
                $contrib_city =  mysqli_real_escape_string($mysqli,$_POST['contrib_city']); 
                $contrib_country= mysqli_real_escape_string($mysqli,$_POST['contrib_country']);
                $contrib_state =  mysqli_real_escape_string($mysqli,$_POST['contrib_state']);
                $contrib_postal_adress  = mysqli_real_escape_string($mysqli,$_POST['contrib_postal_code']);



                $insert_sql = "INSERT INTO projects_contrib (contrib_locale,contrib_amount,monthly_contrib,email_adress,card_number,security_code,card_exp_date,contrib_name,contrib_adress,contrib_city,contrib_country,contrib_state,contrib_postal_adress,authorization_code,status) VALUES('".$currency_locale."','".$contrib_amount."','".$monthly_contrib."','".$email_adress."','".$card_number."','".$security_code."','".$Exp_date."','".$contrib_name."','".$contrib_adress."','".$contrib_city."','".$contrib_country."','".$contrib_state."','".$contrib_postal_adress."','".$authorization_code."','".$status."')";



                mysqli_query($mysqli,$insert_sql) or die(mysqli_error($mysqli));

                echo "record inserted";

                mysqli_close($mysqli);


              break;
          
         case 'failure':
      
               printf("Sorry ! could not complete your transaction, try again letter");
          break;
          
        }
     
   
 
 
}
 
?>