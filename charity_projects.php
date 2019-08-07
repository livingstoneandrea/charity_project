<DOCTYPE html>
   <html lang="en">
       <head>
           <meta charset="utf-8">
           <title>Our projects</title>
           <link rel="stylesheet" href="fontawesome-free-5.2.0-web/css/all.css">
           <link rel="stylesheet" href="css/bootstrap.css">
           <link rel="stylesheet" href="css/styles.css">
           <style>
               *{
                   box-sizing: border-box;
                   margin: 0;
                   padding: 0;
               }
               body{
                   margin: 0 auto;
                   background-color: #fffac5;
               }
                
               main{
                  position: relative;
                  top: 150px;
               }
               .row:after{
                   content: "";
                   display: table;
                   clear: both;
               }
              section.site_projects{
                  margin: 0 auto;
                  text-align: center;
              }
               #partners-sec {
	            margin: 12px auto;
                text-align: center;
               }
               section >article.partners{
                  float: left;
                  display: block;
                  width: 20%;
                  font-size: 16px;

               }
            section.jumbotron{
             position: sticky;
             top: 100px;
             z-index: 1;
            }
            article.pro-classyfication{
             float: left;
             width: 10%;
            }
            article.pro-classyfication h3{
             font-size: 16px;
            }
                
               @media only screen and (max-width:800px){
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
               @media only screen and (max-width:400px){
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
             <section class="jumbotron text-center">
             
             
             <article class="pro-classyfication">
               <h3>Explore projects :</h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">Featured</a></h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">Newest</a></h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">Nearly Funded</a></h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">children</a></h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">Disaster</a></h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">Education</a></h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">Health</a></h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">Women & Girls</a></h3>
             </article>
             <article class="pro-classyfication">
               <h3><a href="">SEE ALL <i class="fas fa-chevron-right"></i></a></h3>
             </article>
             <div class="clearfix"></div>
             </section>
             <section>
                <div class="container text-center my-3">
                <h3>Projects That Have Been Initiated So Far</h3>
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item row  active">
                            <div class="col-3 float-left"><img class="img-fluid" src="assets/images/IMG-20190801-WA0001.jpg"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="assets/images/IMG-20190801-WA0002.jpg"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="assets/images/IMG-20190801-WA0009.jpg"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="assets/images/IMG-20190801-WA0003.jpg"></div>
                        </div>
                        <div class="carousel-item row ">
                            <div class="col-3 float-left"><img class="img-fluid" src="assets/images/About_overview_join3.jpg"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="assets/images/About_overview_join2.jpg"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="assets/images/About_overview_join3.jpg"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="assets/images/About_overview_join2.jpg"></div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <h4>Wanna Give a Smile to Every Projects ?</h4>
                <a href="./donation_page.php" class="btn btn-info">Fund the projects</a>
              </div>
             
             </section>
             <section class="site_projects m-4">
              
               <p class="text-center">No projects yet that have been initiated</p>
             
                    <h4 class="text-center mb-4">Projects</h4>
                        <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/climate-action-fund.jpg" alt="Card image">
                            <div class="card-body text-center">
                              <h4 class="card-title ">Climate Action Fund</h4>
                              <p class="card-text ">Invest in local leaders tackling a global challange</p>
                              <a href="donation_page.php" class="btn " style="color: #f26522">DONATE ></a>
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
                       <button type="button" class="btn btn-success m-4 ">See More Projects </button>   
                     
             </section>
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
                   
               </section>
              
           </main>
           
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
          <script src="js/bootstrap.js"></script>
       </body>
   </html>