<DOCTYPE html>
   <html lang="en">
       <head>
           <meta charset="utf-8">
           <title>Our projects</title>
           <link rel="stylesheet" href="fontawesome-free-5.2.0-web/css/all.css">
           <link rel="stylesheet" href="css/bootstrap.css">
           <style>
               *{
                   box-sizing: border-box;
                   margin: 0;
                   padding: 0;
               }
               body{
                   margin: 0 auto;
                   background-color:  #fffac5;
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
                header nav a {
					text-decoration: none;
					font-weight: bold;
					color: #fff;
				}
				a:hover {
					text-decoration:underline;
					color:#800000
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
               .main-cont{
                 position: relative;
                 top: 100px;
               }
               section.container-fluid{
                   margin: 0 auto;
                   text-align: center;
                   background-color: #fff;
               }
               article.service-details{
                 
                 float: left;
                 padding: 12px;
                 margin: 12px 24px;
                
                

               }
              /* section#works{
                 background-image: url("assets/images/IMG-20190801-WA0006.jpg") ;
                 background-repeat: no-repeat;
                 background-position:center;
                 background-size: cover;
                 opacity: 1;   
                  
               }*/
               div.card{
                 width: 400px;
               }
               .row:after{
                   content: "";
                   display: table;
                   clear: both;
               }
                #page_footer{
                    margin-top: 12px;
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
               @media only screen and (max-width:800px){
                   
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
                   article.service-details{
                       float: none;
                       width: 100%;
                   }
                   .card{
                       width: 100%;
                       margin: 0 auto;
                   }
               }
           </style>
       </head>
       <body>
           
            <header id="page_header">
             <div id="header-inner">
                <a href="charity_index.html" id="site_logo" width="50px" height="50px"></a>
                <nav id="header_nav">
                    <a href="#" id="menu-icon"></a>
                    <ul>
                        <li><a href="charity_index.php" >Home</a></li>
                        <li><a href="charity_services.php" class="current">Services</a></li>
                        <li><a href="charity_projects.php">Projects</a></li>
                        <li><a href="charity_gallery.php">Gallery </a></li>
                        <li><a href="partnership.php">Partnership </a></li>
                        <li><a href="#" data-toggle="modal" data-target="#contact-us-modal">Contact-us </a></li>
                    </ul>
                </nav>
              </div>  
            </header>
            <div class="main-cont">
            <main>
            <section class="jumbotron text-center">
            TouchAsoul services to the community
             <p>We terrific partners with Non-profit,Donors and Companies around the world.We help local and internationals needy access the funding,tools, Training and Support they need to become more effective</p>
            </section>
            <section class="container-fluid">
              <article class="service-details">
                <h2>2</h2>
                <p>Years</p>
              </article>
              <article class="service-details">
                <h2><i class="fas fa-dollar-sign"></i> 403 M</h2>
                <p>Dollars</p>
              </article>
              <article class="service-details">
                <h2>9 800</h2>
                <p>Donars</p>
              </article>
              <article class="service-details">
                <h2>23 546</h2>
                <p>Projects</p>
              </article>
              <article class="service-details">
                <h2>170</h2>
                <p>Countries</p>
              </article>
              <article class="service-details">
                <h2>170</h2>
                <p>Companies</p>
              </article>
              <article class="service-details">
                <h2>60 %</h2>
                <p>projects target</p>
              </article>
               <article class="service-details">
                <h2>12 000</h2>
                <p>Beneficiaries</p>
              </article>
              <div class="clearfix"></div>
            </section> 
            <section class="container" id="works">
             <h4 class="text-center">How it works</h4>
             <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/IMG-20190801-WA0001.jpg" alt="Card image">
                            <div class="card-body text-center">
                              <h4 class="card-title ">Climate Action Fund</h4>
                              <p class="card-text ">Invest in local leaders tackling a global challange</p>
                              <a href="#" class="btn " style="color: #f26522">DONATE ></a>
                            </div>
                        </div> 
                        <div class="card" >
                            <img class="card-img-top" src="assets/images/IMG-20190801-WA0003.jpg" alt="Card image">
                            <div class="card-body text-center">
                              <h4 class="card-title">we're hiring</h4>
                              <p class="card-text">Join our amazing team and help people around the world.</p>
                              <a href="#" class="btn " style="color: #f26522">VIEW JOBS > </a>
                            </div>
                        </div> 
                        <div class="card" >
                            <img class="card-img-top" src="assets/images/IMG-20190801-WA0007.jpg" alt="Card image">
                            <div class="card-body text-center">
                              <h4 class="card-title">Join our Girl Fund</h4>
                              <p class="card-text">supports education ,legal protection,health care and job skills so that girls can thrive by making monthly donation.</p>
                              <a href="#" class="btn" style="color: #f26522">JOIN THE MONTHLY GIVING CIRCLE ></a>
                            </div>
                        </div>
                       
                       </div> 
                       <div class="clearfix"></div> 
             
              
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
          </div>
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
          <script src="js/jquery-3.3.1.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <script>
            $(document).ready(function(){
              
               $("#btn_donate").on("click",function(){
                 
                 let url = "./donation_page.php";
                 window.location.assign(url);
                  alert("redirecting to donation page");
                 
               });
              
            });
         
         </script>
       </body>
   </html>