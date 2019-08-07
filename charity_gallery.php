<DOCTYPE html>
   <html lang="en">
       <head>
         <meta charset="utf-8">
         <meta  name="viewport" content="width=device-width, initial-scale=1.0">
         <title>TouchAsoul.org | gallery page</title>
         <link rel="stylesheet" href="css/styles.css">
         <link rel="stylesheet" href="css/bootstrap.css">
         <style>
           /*.jumbotron {
              position: relative;
	          top: 100px;
           }*/
           main{
           position: relative;
           top: 150px;
          }
           article.gallery {
               border: 1px solid #ccc;
               margin-bottom: 12px;
             }

             article.gallery:hover {
               border: 1px solid #777;
             }

             article.gallery img {
               width: 100%;
               height: auto;
             }

             div.desc {
               padding: 15px;
               text-align: center;
             }

             * {
               box-sizing: border-box;
             }

             .responsive {
               padding: 0 6px;
               float: left;
               width: 24.99999%;
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

             @media only screen and (max-width: 700px) {
               .responsive {
                 width: 49.99999%;
                 margin: 6px 0;
               }
             }

             @media only screen and (max-width: 500px) {
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
                 
               .responsive {
                 width: 100%;
               }
               article.partners{
                 float: none;
                 width: 100%;
                }
                 article.partners img{
                     width: 100%;
                 }         
             }

             .clearfix:after {
               content: "";
               display: table;
               clear: both;
             }
         </style>
       </head>
       <body>
             <?php require("header.php");?>
            <main>
               <div class="jumbotron text-center">TouchAsoul gallery based on recent projects we have been carrying</div>
               <section class="responsive">
                 <article class="gallery">
                   <a href="" target="_blank">
                     <img src="assets/images/About_overview_join2.jpg" alt="">
                   </a>
                 </article>
               </section>
               <section class="responsive">
                 <article class="gallery" class="thumbnail">
                   <a href="" target="_blank">
                     <img src="assets/images/About_overview_join3.jpg" alt="">
                   </a>
                 </article>
               </section>
               <section class="responsive">
                 <article class="gallery">
                   <a href="assets/images/About_overview_join2.jpg" target="_blank">
                     <img src="assets/images/About_overview_join2.jpg" alt="">
                   </a>
                 </article>
               </section>
               <section class="responsive">
                 <article class="gallery">
                   <a href="" target="_blank">
                     <img src="assets/images/About_overview_join4.jpg" alt="">
                   </a>
                 </article>
               </section>
               <section class="responsive">
                 <article class="gallery">
                   <a href="" target="_blank">
                     <img src="assets/images/About_overview_join3.jpg" alt="">
                   </a>
                 </article>
               </section>
               <section class="responsive">
                 <article class="gallery">
                   <a href="" target="_blank">
                     <img src="assets/images/About_overview_join4.jpg" alt="">
                   </a>
                 </article>
               </section>
               <section class="responsive">
                 <article class="gallery">
                   <a href="assets/images/About_overview_join2.jpg" target="_blank">
                     <img src="assets/images/About_overview_join2.jpg" alt="">
                   </a>
                 </article>
               </section>
               <section class="responsive">
                 <article class="gallery">
                   <a href="" target="_blank">
                     <img src="assets/images/About_overview_join4.jpg" alt="">
                   </a>
                 </article>
               </section>
               <section class="jumbotron-fluid text-center">
                 <button class="btn btn-success btn-lg">see more ...</button>
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
            <footer id="page-footer">
               
             
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
            <script src="js/jquery-3.3.1.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
       </body>
   </html>