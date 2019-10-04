<!DOCTYPE html>
  <html lang="en-us">
      <head>
          <meta charset="utf-8">
          <title>TouchAsoul.org | Give a Smile :</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="fontawesome-free-5.2.0-web/css/all.css">
         <link rel="stylesheet" href="css/bootstrap.css">
         
          <style type="text/css">
				*{
					margin: 0;
					padding: 0;
					border: 0;
				}
				body{
					background-color: #fffac5;
					font: 14px/20px Arial.sans-serif;
					color: #555;
					margin: 0;
				}
				h1{
					text-align: center;
					font-size: 180%;
					line-height: 120%;
					padding: 5% 0;
				}
				h2{
					text-decoration: underline;
					line-height: 280%;
					padding-left: 2%;
				}
				h3{
					line-height: 110%;
					padding: 5% 0;
				}
               h4{
                  padding: 5% 0 0 2%;
                }
				p{
					padding: 1%;
				}
				img{
					text-align: center;
					max-width: 100%;
					height: auto;
					/*width: auto;*/
				}
				header nav a , section.social a{
					text-decoration: none;
					font-weight: bold;
					color: #fff;
				}
				a:hover , section.social a:hover{
					text-decoration:underline;
					color:#800000
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
				#doc{
					margin:0 auto;
					
				}
             
				#main_content{
					margin: 0 auto;
					max-height: 1140px;
				}
				.image_banner{
					max-width: 960px;
					margin-top: 110px;
                   
				}
                main{
					/*background-image: url(pexels-photo-459654.jpeg)center no-repeat;*/
                   margin: 0 auto;
				}
				main section#side_bar{
					background: #330000;
					float: left;
					width: 18%;
				    height: auto;
                    position: absolute;
                    top: 132px;
                    /*margin-left: 2px;*/
                    text-align: center;
                    opacity: 1;
                    
			        
				}
				main section#side_bar>ul{
					list-style: none;
				}
				main section#side_bar>ul li{
					margin: 0 10px 4px 10px;
					
				}
              main section#side_bar>ul li a i{
                  font-size: 24px;
              } 
              main section#side_bar>div.card_desc{
                  padding: 20px;
                  background-color: #fff;
                  margin: 12px;
                  height: 100%;
              }
              #side_bar>button{
                   background-color: #4d0ffc;
              }
             
              #side_bar>button i {
	               font-size: 24px;
                   color:#fff;
                  
               }
				
				main section#image_banner{
					float: right;
					margin : 10px auto; 
					width: 100%;
                    height: auto;
                    
                        
				}
				main section#image_banner img{
					width: 100%;
					height: 80%;
					
				}
               .clear{
					clear:both;
				}
                article.one-fourth{
                    float: left;
                    width: 24%;
                    margin: 12px 4px;
                   
                }
                article img{
                    max-width:100%;
                    position: relative;
                    
                }
              article.message{
                  
                  column-count: 3;
                  column-fill: balance;
                  column-rule: 1px solid #bbb;
              }
               .social {
	                background-image: url(assets/images/site_banner.jpeg);
	                background-repeat: no-repeat;
                    background-position: center;
                    background-size:auto;
                    margin-bottom: 4px;
                
                   
                   
                }
                .social>article{
                    text-align: center;
                    
                }
                .social>article ul {
                    list-style: none;
                    
                
                }
                .social>article ul li{
                    margin: 12px;
                   /* float: right;*/
                    text-align: center;
                    display: inline-block;
                    
                }
              .social>article ul li a>i{
                  font-size: 40px;
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
              
              article#support{
					float: left;
					margin: 12px auto;
					width:50%;
					height: auto;
					padding:4%;
                   
				}
				aside{
					float: right;
					margin: 0 auto;
					width:35%;
					height: auto;
					padding:3%;
					
				}
               .two_col {
	
                   column-count: 2;
                   column-rule: 4px solid #aaa;
                   column-gap: normal;
                   background-color:#000033;
                   margin-bottom: 12px;
                               
                }
				 #btn_donate {
                     box-sizing: border-box;
                     width: 30%;
                     padding: 6px;
                     color: #330000;
                     font-size: 16px;
                     font-weight: 600;
                     border-radius: 4px;
                     
	
                }
                #btn_donate:hover {
                  background-color: skyblue;
	
                }
               #div.card{
                  width: 480px;
               }
				/*=========MEDIA QUERY==========*/
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
                      section#side_bar{
                         float: none;
                         width: 100%;
                         display: none;
                      }
                     
                      article.message{
                       column-count: 2;
                       
                      }
                      article.one-fourth{
                         float: none;
                         width: 100%;
                         text-align: center;
                      }
                      article.support img{
                         float: none;
                         width: 100%;
                      }
                      article.support aside{
                         width: 100%;
                      }
                     #news-sec div.card {
                        
                     }
                     #page_footer.footer_nav  {
	                    float: none;
                     }
                   
                  }
				
			</style>
			
			<script src=""></script>
			<script src="slider-img.js"></script>
			
			<script >
				$(window).load(fuction(){
						$('.slider-img').slide();
							   });
			</script>
          
      </head>
      <body>
          
            <?php require("header.php");?>
            <main>
                <section id="image_banner">
					<img src="assets/images/IMG-20190801-WA0007.jpg" >
					<!--<div class="search" style="position: absolute; top: 240px; right:420px; width: 40%">
					  <form method="get" action="" class="form-inline">
                       
                         <input type="search" placeholder="search for result" class="form-control" style="width:80%;">
                         <button type="submit" class="btn btn-outline-warning">search</button>
					 
					  </form>
					 
					</div>-->
					
				</section>
               <!-- side bar-->
                <section id="side_bar">
					<h3>Quick fix</h3>
					<ul>
						<li><a href=""><i class="fa fa-users"></i></a></li>
						<li><a href=""><i class="fa fa-home"></i></a></li>
						<li><a href=""></a></li>
						<li><a href="our_blogs.php">Blogs</a></li>
						<li><a href="#news-sec" id="slide_news">News and updates</a></li>
					</ul>
					<div class="card_desc">
					     <h5>upcoming events</h5>
					     <P>College in Virginia, looked up one of the more obscure Latin words, </P>
					     <p></p>
					     <video controls width="100%" autoplay>
					       <source src="video/video.mp4" type="video/mp4">
					     </video>
					    
					</div>
                    <button type="button" title="partner with us" data-toggle="modal" data-target="#donate-modal"><i class="far fa-handshake"></i></button> 
                    		
				</section>
               <div class="clear"></div>
                <section class="main_content">
                 
                  <section class="jumbotron-fluid text-center" style="background:linear-gradient(#330000,#000033,#330000); overflow: hidden;">
                     <p>&rdquo;As a purpose-driven organisation  focused on supporting the world and communities, we've  terrific partnered in supporting our initiatives ranging from :&ldquo;</p>
                    
                  </section>
                  
                   <article class="message">
                      <h4>Get to Know us</h4>
                      <p>
                          TouchAsoul.org is the largest global crowdfunding community connecting nonprofits, donors, and companies in nearly every country. We help nonprofits around the world  access the tools, training, and support they need to be more effective and make our world a better place.
                      </p>
                      <h4>Our founders</h4>
                      <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,  45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                      </p>
                      
                      <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                      </p>
                      <h4>The cores</h4>
                      <p>
                            As a purpose-driven organisation  focused on supporting the world and communities, we've  terrific partnered in supporting our initiatives ranging from : 
                      </p>
                      <ul>
                          <li>Disaster relief</li>
                          <li>Feeding the hangry</li>
                          <li>Protecting the planet</li>
                      </ul>
                      <p>this is just an outrich to immediately support critical issues and maximize our impact to improve the communities where we live and work</p>   
                   </article>
                   
                   <!-- site intro and briefing -->
                   
                    <section class="site_briefing">
                        <h4 style="text-align: center;text-decoration: underline;color: #aaa; text-transform: uppercase;">projects brefing</h4>
                        <article class="one-fourth">
                             <h4>Transform lives</h4>
                             <a href="" ><img src="assets/images/IMG-20190801-WA0001.jpg" alt="one-fourth"></a>
                        </article>
                        <article  class="one-fourth">
                            <h4>Current projects</h4>
                             <a href="" ><img src="assets/images/IMG-20190801-WA0002.jpg" alt="Tour"></a>
                        </article>
                        <article  class="one-fourth">
                             <h4>Disaster recovery</h4>
                             <a href="" ><img src="assets/images/IMG-20190801-WA0009.jpg" alt="scenic landscape"></a>
                        </article>
                        <article class="one-fourth">
                            <h4>Intergration center </h4>
                            <a href="" ><img src="assets/images/IMG-20190801-WA0007.jpg" alt="souther coast atlanta" ></a>
                        </article>
                        <div class="clear"></div>
                        
                        <!-- two col section -->
                        <article class="two_col">
                            <h4>Our recognition as the center for help</h4>
                              <p >
                                  Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of 
                              </p>
                               <p >
                                     Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a omes from a line in section 1.10.32.
                               </p>
                               <h4>We are the center for help</h4>
                               <p >
                                     Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up 
                               </p>

                        </article>
                        
                        <button type="button" class="btn btn-block m-2" id="explore-btn" style="background: #aaa; color: #fff;" >Explore what we do</button>
                       
                       <article class="support">
                          <img src="assets/images/IMG-20190801-WA0008.jpg" class="img-thumbnail img-responsive" width="640px" height="400px">
                          <aside>
                              <h4>Our impact</h4>
                              <p>
                                &ldquo;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes .&rdquo;
                                 
                              </p>
                          </aside>
                           
                       </article>
                       <div class="clear"></div>
                        
                    </section>
                     <button class="btn btn-block m-2" style="background: #000033; color:#fff;" id="project_btn">see more projects...</button>
                     
                     
                     <!--news  section -->
                     <section id="news-sec" class="m-4">
                        <h4 class="text-center mb-4">News</h4>
                        <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/climate-action-fund.jpg" alt="Card image">
                            <div class="card-body text-center">
                              <h4 class="card-title ">Climate Action Fund</h4>
                              <p class="card-text ">Invest in local leaders tackling a global challange</p>
                              <a href="#" class="btn " style="color: #f26522">DONATE ></a>
                            </div>
                        </div> 
                        <div class="card" >
                            <img class="card-img-top" src="assets/images/hiring-2019.jpg" alt="Card image">
                            <div class="card-body text-center">
                              <h4 class="card-title">we're hiring</h4>
                              <p class="card-text">Join our amazing team and help people around the world.</p>
                              <a href="#" class="btn " style="color: #f26522">VIEW JOBS > </a>
                            </div>
                        </div> 
                        <div class="card" >
                            <img class="card-img-top" src="assets/images/girl-fund.jpg" alt="Card image">
                            <div class="card-body text-center">
                              <h4 class="card-title">Join our Girl Fund</h4>
                              <p class="card-text">supports education ,legal protection,health care and job skills so that girls can thrive by making monthly donation.</p>
                              <a href="#" class="btn" style="color: #f26522">JOIN THE MONTHLY GIVING CIRCLE ></a>
                            </div>
                        </div>
                       </div> 
                       <div class="clearfix"></div>    
                     </section>
                     
                     <!-- start of our social-media section --->
                    <section class="social">
                        <article>
                             <h4>Contact us</h4>
                             <p>follow us on</p>
                             <ul>
                                <li><a href=""><i class="fab fa-facebook-f" title="facebook"></i> </a></li>
                                 <li><a href=""><i class=" fab fa-twitter" title="twitter"></i></a></li>
                                 <li><a href=""><i class="fab fa-google-plus-g " title="google plus"></i></a></li>
                                 <li><a href=""><i  class=" fab fa-linkedin" title="linkedin"></i></a></li>
                                 <li><a href=""><i  class="fab fa-youtube" title="youtube"></i></a></li>
                                 <li><a href=""><i  class="fab fa-telegram" title="telegram"></i></a></li>
                                 <li><a href=""><i  class="fab fa-instagram" title="instagram"></i></a></li>

                            </ul>
                            
                       </article>
                       <div class="clearfix"></div>
                        
                    </section>
                    <!-- subscription form -->
                    
                    <section id="site-subscription" style="text-align: center; margin-bottom: 4px;">
                        <article >
                            <form method="post" action="process_subscription.php">
                                <p style="font-size: 24px; font-weight: 600; color:#7a7a7a;">Get news,updates and matching offers from our site(once or twice a month):</p>
                                <div class="form-inline" style="padding: 30px 230px;" >
                                   <input type="email"  name="subscription-email" placeholder="you@example.com" required title="email" class="form-control " style=" padding: 6px;  width: 400px; ">
                                   <button type="submit" style=" padding: 6px 4px; color: #fff; margin-left: 0;  border: 1px solid #fff" class="btn btn-warning">subscribe</button>
                                 
                                </div>
                                
                            </form>
                        </article>
                    </section>
                    <section class="our-corprate">
                     
                      
                    </section>
                    
                </section>
            </main>
            <!-- footer section -->
            
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
                           <section class="col-12 col-sm-8">
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
                           <section class="col-12 col-sm-4">
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
          
           <!-- Modal for donation page -->
          <div class="modal fade" id="donate-modal" tabindex="-1" role="dialog" aria-labelledby="donate-modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="doante-maodal">Your contribution counts</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                       
                        
                        <main  class="container-fluid" style="background: url(assets/images/logo.jpg); background-repeat: no-repeat; background-size: cover; background-position: center">
                          <div class="jumbotron" style="background-color: #000033;opacity: 0.9" >
                           
                            <form method="post" action="process_payment.php">
                                <div class="form-group">
                                 <label for="r-contrib">reason for contribution</label>
                                  <select class="form-control" name="r-contrib">
                                    <option value="To assist the needy">To assist the needy</option>
                                    <option value="Fund projects">Fund projects</option>
                                    <option value="A price to the founders">A price to the founders</option>
                                    <option value="promote our growth">promote our growth</option>
                                    <option value="Others">Others</option>
                                  </select>
                                </div>
                                <h5>select your payment option</h5>
                                <div class="form-check-inline">
                                  <label for="paypal" class="form-check-label">
                                    <input type="radio" class="form-check-input" name="payment_opt" value="paypal"> paypal
                                  </label>
                                 </div>
                                 <div class="form-check-inline"> 
                                   <label for="paypal" class="form-check-label">
                                     <input type="radio" class="form-check-input" name="payment_opt" value="M-pesa"> M-pesa
                                   </label>
                                  </div>
                                  <div class="form-check-inline">
                                   <label for="paypal" class="form-check-label">
                                     <input type="radio" class="form-check-input" name="payment_opt" value="mastercard"> mastercard
                                   </label>
                    
                                  </div>
                                <div class="form-group">
                                 <label for="date">choose date</label>
                                 <input type="date" class="form-control" name="date_pay">
                                </div>
                                <div class="form-group">
                                 <label for="payment_amount">amount to pay</label>
                                 <input type="number" class=" form-control" name="amount" placeholder="Enter ammount to pay in($)">
                                </div>
                                <div class="form-group">
                                 <label for="contrib_email">Email adress</label>
                                 <input type="number" class=" form-control" name="contrib_email" placeholder="Enter your  email adress()">
                                </div>
                                <div class="form-group">
                                  <label for="feedback">Message</label>
                                  <textarea class="form-control" name="comment"></textarea>
                                </div>
                              
                                <input type="submit" value="complete transactions" class="btn btn-block " style="background-color: #330000; color: #fff; font-weight: 600;">
                    
                            </form>
                            
                           </div> 
                           
                        </main>
                        
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
          <script src="js/jquery-3.3.1.js"></script>
          <script type="text/javascript" src="js/bootstrap.min.js"></script>
          <script>
            $(document).ready(function(){
              
               $("#explore-btn ,,#project_btn").on("click",function(){
                 
                 let url = "./charity_projects.php";
                 window.location.assign(url);
                  alert("redirecting to donation page");
                 
               });
              
               $("#slide_news").on("click",function(){
                  window.scroll(0,400px).setInterval(3000);
                 
                 
               });
               
            });
         
         </script>
      </body>
  </html>
