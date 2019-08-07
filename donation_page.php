<!DOCTYPE html>
  <html lang="en">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>TouchAsoul.org |Donate in honour</title>
       <link rel="stylesheet" href="css/bootstrap.css">
       
       <style>
        body{
          background-color: linear-gradient(45deg,#330000,#000033,#000,#45adca,transparent);*/
          
        }
        
        header{
					background: #000033;
					width: 100%;
					height: auto;
					position: fixed;
					top: 0;
					left: 0;
					z-index: 100;
					opacity: 0.90;
                    /*overflow: hidden;*/
                    
					
				}
                #header-inner {
                    max-width: 1200px;
	                margin: 0 auto;
                    
                }
				#site_logo{
					margin: 20px;
					float: left;
					width:230px;
					height: 80px;
                    padding: 0 4px 0 4px;
					background: url(assets/images/logo.jpg) no-repeat center;
                    background-position:center;
                    background-size: contain;
                    
					
				}
				header nav,footer nav{
					float: right;
					padding: 35px 6px 20px 0;
				}
				#menu-icon{
					display:none;
					width: 40px;
					height: 40px;
					background-image: url(assets/images/nav_icon.png);
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    
                   
				}
				a:hover#menu-icon{
					border-radius: 4px 4px 0 0;
					
				}
				ul{
					list-style: none;
					
				}
				nav#header_nav ul li{
					display: inline-block;
					float: left;
					padding: 10px;
				}
				.current{
					color: #eee;
					text-decoration: underline;
				}
        main{
         position: relative;
         top: 100px;
        }
        section.donation-details{
         text-align: center;
         margin: 0 auto;
         padding: 12px 12px;
        
        }
        p{
         font-size:16px;
         font-weight: 600;
         color: #aaa;
         
        }
        @media only screen and(max-width:580px){
         
        
                  header{
				     position: absolute;
                        
					}
                    #site_logo{
                        margin: 15px 0 20 -25px;
                    }
					#menu-icon{
						display: inline-block;
					}
					nav#header_nav ul, nav#header_nav:active ul{
						display: none;
                        z-index: 1000;
						position: absolute;
						padding: 20px;
						background: #405580;
						border: 1px solid #fff;
						right: 20px;
						top: 60px;
						width: 50%;
						border-radius: 2px 0 2px 2px;
                      }
                      nav#header_nav:hover ul{
                          display: block;
                      }
                      nav li{
                          text-align: center;
                          width: 100%;
                          padding: 10px 0;
                          margin: 0;
                      }
         
             }
       </style>
    </head>
    <body>
        <?php require("header.php");?>
      <main>
        <section class="jumbotron text-center">Contribute With Honor For A Smile</section>
        <section id="donation-details" class="container-fluid mb-4">
        
          <form method="post" action="process_payment2.php" >
           <p>please select your prefered currency</p>
          
            
              <div class="form-check-inline">
             <label for="currency-locale" class="form-check-label ">
               <input type="radio" class="form-check-input" name="currency-locale" value="Kes" checked> Kenya shillings
             </label>
           </div>
            <div class="form-check-inline">
             <label for="currency-locale" class="form-check-label">
               <input type="radio" class="form-check-input" name="currency-locale" value="usd"> US Dollars($)
             </label>
           </div>
           
            <p>Contribution Amount</p>
             <?php 
                 $amount = 100;
                
                 $count = 1;
                while($count <= 7){
                   $contrib_amount = $amount * $count;
                 
                  $display_block = <<< END_OF_BLOCK
                  <div class="form-check-inline">
                    <label for="contrib-amount" class="form-check-label mr-2">
                     <input type="radio" class="form-check-input" name="contrib-amount" value="'.$contrib_amount.'"> $contrib_amount
                    </label>
                   </div>
                  END_OF_BLOCK;
                 
                  $count++;
                  echo $display_block;
                }
               
            
              ?>
              <div class="form-group">
               <label for="other-amount">
                Other Amount
               </label>
               <input type="number" name="contrib-amount"  class="">
              </div>
              <div class="form-check-inline">
                <label for="form-check-label">
                  <input type="checkbox" class="form-check-input"  name="monthly-contrib" value="yes"> I want to contribute this amount every month
                </label>
               
              </div>
              <div class="form-group">
                <label for="email-adress">Email  Adress <span>*</span></label>
                <input type="email" name="email-adress" class="form-control">
              </div>
              
              
             <hr>
           
              <p class="text-center">credit card information</p>
              <div class="form-row">
              <div class="form-group col-4">
               <label for="card_number">Card Number <span>*</span></label>
               <input type="number" name="card_number" class="form-control">
               
              </div>
              <div class="form-group col-4">
               <label for="security_code ">Security Code <span>*</span></label>
               <input type="number" name="security_code" class="form-control">
               
              </div>
              <div class="form-group col-4">
               <label for="Exp_date">Expiration Date <span>*</span></label>
               <input type="date" name="Exp_date" class="form-control">
               
              </div>
             </div>
            
             
             <hr>
             <div class="form-row">
              <p class="text-center col-12">Billing Name and Adress</p>
              <div class="form-group col-6">
               <label for="contrib_name" >Billing  Name <span>*</span></label>
               <input type="text" name="contrib_name" class="form-control col-10">
               
              </div>
               <div class="form-group col-6" >
               <label for="contrib_adress" >Street Adress <span>*</span></label>
               <input type="text" name="contrib_adress" class="form-control col-10">
               
              </div>
               <div class="form-group col-4">
               <label for="contrib_city">City<span>*</span></label>
               <select class="form-control" name="contrib_city">
                <option>_ SELECT _</option>
                <?php   
                   $city = array("Nairobi","Mombasa","Kisumu","Eldoret");
                   foreach($city as $ci){
                      echo "<option value=\" $ci\">$ci</option>";
                     
                   }
                 
                 ?>
               </select>
               
              </div>
              <div class="form-group col-4">
               <label for="contrib_coutry">Country <span>*</span></label>
               <select class="form-control" name="contrib_country">
               <option>_ Select _</option>
               <?php 
                  $country = array("Kenya","Sudan","USA","Canada","Egypt","Japan","India");
                  foreach ($country as $c){
                   
                    echo "<option value=\" $c\">$c</option>";
                  }
                   
                
                
                ?>
                
               </select>
               
              </div>
           
              <div class="form-group col-4">
               <label for="contrib_state">State /Province <span>*</span></label>
               <select class="form-control" name="contrib_state">
                <option>_ N/A _ </option>
                <?php  
                  $states = array("Nairobi","Eldoret","Kisumu","Mombasa","Turkana");
                  
                 foreach ($states as $str){
                   echo "<option value='".$str."'>".$str."</option>";
                 }
                
                 ?>
               </select>
               
              </div>
              <div class="form-group col-12">
               <label for="contrib_postal_code">Postal Adress<span>*</span></label>
               <input type="text" name="contrib_postal_code" class="form-control">
               
              </div>
             </div> 
             <button type="submit" class="btn btn-success btn-sm " name="submit">Contribute</button>
          </form>
             
        </section>
      
      </main>
     
    </body>
  </html>