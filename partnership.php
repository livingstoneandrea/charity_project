<DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="utf-8">
         <title>charity partners</title>
         <link rel="stylesheet" href="css/bootstrap.css">
         <link rel="stylesheet" href="fontawesome-free-5.2.0-web/css/all.css">
         <script src="js/jquery-3.3.1.js.js"></script>
         <script src="js/bootstrap.min.js"></script>
           
         <style>
              *{
                   box-sizing: border-box;
                   margin: 0;
                   padding: 0;
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
              
             div.cont{
                 position: relative;
                 top: 100px;
             }
             #partners-sec {
	            margin: 12px auto;
                text-align: center;
            }
            section >article.partners{
               float: left;
               display: block;
               width: 18%;
               font-size: 16px;
                
            }
             #page_footer{
                    width: 100%;
                    clear: both;
                    display:block;
                    color: aqua;
                    text-align: center;
                    overflow: hidden;
                    background-color: #000033;
                    opacity: 1;
               }
                #page_footer>nav#footer_nav ul{
                    list-style: none;
                    
            
               }
              #page_footer>nav#footer_nav ul li {
                    display: inline-block;
					padding: 10px;
              }
              section.partner-reg{
                  text-align: center;
              }
              @media only screen and (max-width:580px){
					body{
						position: absolute;
                        max-width: 580px;
					}
                    h3{
                     font-size: 125%;
                    }
                    p{
                     font-size: 120%;
                    }
					
				}
				@media only screen and (max-width:580px){
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
                 section >article.partners{
                   float: none;
                   width: 100%;
                   margin-bottom: 16px;
                 }                     
                      

             }
               
         </style>
          <script>
                $(document).ready(function(){


                    $("article#partner-reg").hide();


                    
                });
         
         </script>
          
      </head>
      <body>
          <?php require("header.php");?>
              
         <div class="cont">
          <main>
           <div class="jumbotron text-center">Partner with us to ensure we reach our goals</div>
           <section id="partners-sec">
                <h4>Our Corporate Partners</h4>
                 <p class="text-center">We've made it possible for more than <span>290 companies to support local causes  around the world</span></p>
                 <article class="partners">
                      <a href="">
                        <img src="assets/images/vmware.png">
                      </a>
                  </article>
                  <article class="partners">
                      <a href="">
                        <img src="assets/images/ford.png">
                      </a>
                  </article>
                  <article class="partners">
                      <a href="">
                        <img src="assets/images/microsoft.png">
                      </a>
                  </article>
                  <article class="partners">
                    <a href="">
                      <img src="assets/images/discovery.png">
                     </a>
                  </article>
                  <article class="partners">
                    <a href="">
                      <img src="assets/images/tripadvisor.png">
                    </a>
                  </article>
                  <div class="clearfix"></div>
               </section>
               <section class="partner-reg m-4">
                <button class="btn btn-success mt-4" type="btn" id="partner-reg-btn">Partner With Us :)</button>
                 <article id="partner-reg">
                  <p class="text-center">partner with us by registering with us as non-profit org</p>
                  <form method="post" action="process_partnership.php">
                    <div class="form-row">
                     <div class="form-group col-6">
                      <label for="partner-name" class="col-form-label">Partner name</label>
                      <input type="text" class="form-control ">
                     </div>
                   
                     <div class=" form-group col-6">
                      <label for="partner-email" class="col-form-label">Partner Email</label>
                      <input type="email" class="form-control ">
                     </div>
                    </div>
                    <div class="form-group">
                     <label for="reason-join">Reasons for Joining</label>
                     <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Upload you brand image</label>
                      <input type="file" formenctype="multipart/form-data">
                    </div>
                    <input type="submit" value="Submit Details" class="btn btn-success">
                  </form>
                 
                </article>
               
                
                
               </section>
              
              
            
          </main>
           <footer id="page_footer">
               <p>&copy;copyright 2016-2019 by design,inc</p>
              <button type="button" id="btn_donate" data-toggle="modal"  data-target="#donate-modal">BECOME A DONOR</button>
               <nav id="footer_nav">
                     <ul>
                        <li><a href="index.html">Legal</a></li>
                        <li><a href="About.html">About</a></li>
                        <li><a href="Terms_service.html">Terms of service</a></li>
                        <li><a href="privacy.html">Privacy</a></li>
                    </ul>
               </nav>
                
            </footer>
            
             <!-- Modal -->
          <div class="modal fade" id="contact-us-modal" tabindex="-1" role="dialog" aria-labelledby="contactUsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="contactUsModal">Contact Us | Give a Smile </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                       <div class="row">
                           <section class="col-8">
                               <form method="post" action="process_contact.php">
                                   <div class="form-group">
                                       <label for="name">your name <span>*</span></label>
                                       <input type="text" name="name" class="form-control">
                                   </div>
                                   
                                   <div class="form-group">
                                       <label for="name">your email address <span>*</span></label>
                                       <input type="email" name="email" class="form-control">
                                   </div>
                                   <div class="form-group">
                                       <label for="name">subject <span>*</span></label>
                                       <input type="text" name="subject" class="form-control">
                                   </div>
                                   <div class="form-group">
                                       <label for="message">message <span>*</span></label>
                                        <textarea class="form-control" name="message"></textarea>
                                   </div>
                                   <button type="submit" class="btn  btn-success">send message</button>
                               </form>
                               
                           </section>
                           <section class="col-4">
                               <p>Get in <span>touch</span></p>
                               <p>we'd like to hear from you and encourage you to contact us either electronically or in person</p>
                               <hr>
                               <article>
                                   <h5>Nairobi office</h5>
                                   <p><i class="fas fa-map-marker-alt"></i> <b>adress :</b>252 city center, Nairobi</p>
                                   <p><i class="fas fa-phone-alt"></i> <b>phone :</b>+254 999 998</p>
                                   <p><i class="fas fa-envelope"></i> <b>Email :</b><a href="mailto:infor@touchAsoul.org">infor@touchAsoul.org</a></p>
                               </article>
                           </section>
                       </div>
                        
                       
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
             
        </div>
      </body>
    
   </html>