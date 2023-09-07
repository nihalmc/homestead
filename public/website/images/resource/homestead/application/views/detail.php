

<script src='https://www.google.com/recaptcha/api.js'></script>


<!--Page Title-->
  <!--  <section class="page-title" style="background-image:url(images/background/3.jpg);">
    	<div class="auto-container">
        	<div class="title-box">
            	<h2>Projects</h2>
                <ul>
                	<li><a href="index-2.html">Home</a></li>
                    <li>Project Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Cases Section-->
    <section class="cases-section cases-single-page">
    	<div class="auto-container">
        	<div class="cases-single">
            	<div class="inner-box">
                	<!--Cases Images-->
                	<div class="cases-images">
                    	<div class="row clearfix">
                        	<!--Column-->
                        	<div class="column col-md-4 col-sm-4 col-xs-12">
                            	<div class="image">
                                	<img src="images/gallery/15.jpg" alt="" />
                                </div>
                                <div class="image">
                                	<img src="images/gallery/16.jpg" alt="" />
                                </div>
                            </div>
                            <!--Column-->
                            <div class="column col-md-8 col-sm-8 col-xs-12">
                            	<div class="image">
                                	<img src="images/gallery/17.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row clearfix">
                    	
                        
                        <!--Cases Info column-->
                    	<div class="cases-info-column col-md-6 col-sm-12 col-xs-12">
                        	
                            <!--Project Info Widget-->
                            <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                	<div class="blog-carousel owl-carousel owl-theme">
                                    	<div class="blog-slide">
                                            <a href="blog-single.html"><img src="<?php echo extr().'images/gallery/a.jpg'?>" alt="" /></a>
                                          
                                        </div>
                                        <div class="blog-slide">
                                            <a href="blog-single.html"><img src="<?php echo extr().'images/gallery/a.jpg'?>" alt="" /></a>
                                           
                                        </div>
                                        <div class="blog-slide">
                                            <a href="blog-single.html"><img src="<?php echo extr().'images/gallery/a.jpg'?>" alt="" /></a>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-box">
                                	
                                    
                                </div>
                            </div>
                        </div>
                </div>
                        
                        <!--Cases Detail column-->
                    	<div class="cases-detail-column col-md-6 col-sm-12 col-xs-12">
                        	<div class="text">
                            	<p>That is the way we all be came the Brady Bunch these to days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the artist kitchen and beans do not burn on the grill took a whole lotta trying just to get up that hill.</p>
                                <p>The need no welfare states starship enterprise the Brady Bunch that's the way we all be came the Brady Bunch these days are all Happy and Free these days you wanna be where everybody knows your name fish do not fry in the kitchen and beans do not burn on the grill took a whole lotta trying just to get upset.</p>
                                </div>
                                </div>


                               
<div class="cases-detail-column col-md-12 col-sm-12 col-xs-12">

<div class="row">

                        <div class="col-md-12">
                            <div class="product-tab-box">
                                <ul class="nav nav-tabs tab-menu">
                                    <li class="active"><a href="#spec" data-toggle="tab">Specification</a></li>
                                    <li><a href="#amen" data-toggle="tab">Amenities</a></li>
                                     <li><a href="#floor" data-toggle="tab">Floor Plan</a></li>
                                     <li> <a href="#stat" data-toggle="tab">Current Status</a></li>
                                       <li><a href="#gall" data-toggle="tab">Gallery</a></li>
                                       <li><a href="#loc" data-toggle="tab">Location Map</a></li>
                                       <li><a href="#pro" data-toggle="tab">Project Enquiry</a></li>
                                </ul>
      <div class="tab-content">
                                    <div class="tab-pane active" id="spec">

                                     <?php foreach($detail as $det)
{?>
                                
                          
                                        <div class="product-details-content">
                                            <div class="desc-content-box">

<h4><strong><?php echo  $det->specificationname ?> </strong> : <?php echo  $det->value ?> </h4> 
                                          
                                               </div>

                                        </div>    
                                
                                      <?php }
                ?>
                        </div>
                     
                                    <div class="tab-pane" id="amen">
                                       
   <div class="amineties">
     <div class="column col-md-6 col-sm-6 col-xs-12">     
   <ul>
   <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Health club</li>
   <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Furnished Lobby</li>
   <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Intercom</li>
   <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> 24 hrs generator backup for common</li>
   <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Children Play Area</li>
   <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Care taker room</li>
    <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Compound wall with round the clock security</li>
   
   
</ul>
</div>
<div class="column col-md-6 col-sm-6 col-xs-12">   
<ul>

   
    <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Association Room</li>
     <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Guard room</li>
      <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Service Lift</li>
     <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Wide interlocked roads and passage</li>
     <li><img src="<?php echo extr().'images/icons/icon.jpg'?>"> Landscaped Areas</li>
      <li> <img src="<?php echo extr().'images/icons/icon.jpg'?>"> Street lights</li>

 </ul>
 </div>
 
  
   </div>
   
   </div> 
 
                                        
              

                                
                                    <div class="tab-pane" id="floor">
                                       
                                        <div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?php echo extr().'images/gallery/a.jpg'?>"alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                  
                                    <a class="lightbox-image" href="<?php echo extr().'images/gallery/e.jpg'?>" " data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="lower-box clearfix">
                            <h3><a class="lightbox-image" href="<?php echo extr().'images/gallery/e.jpg'?>">Typical Foor Plan</a></h3>
                            <a class="arrow" href="cases-single.html"><span class="icon fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>       

   <div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?php echo extr().'images/gallery/a.jpg'?>"alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                  
                                    <a class="lightbox-image" href="<?php echo extr().'images/gallery/f.jpg'?>" " data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="lower-box clearfix">
                            <h3><a class="lightbox-image" href="<?php echo extr().'images/gallery/f.jpg'?>">Type A<br>Super built up area: 925 sq.ft.</a></h3>
                            <a class="arrow" href="cases-single.html"><span class="icon fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>       

 <div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?php echo extr().'images/gallery/a.jpg'?>"alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                  
                                    <a class="lightbox-image" href="<?php echo extr().'images/gallery/h.jpg'?>" " data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="lower-box clearfix">
                            <h3><a class="lightbox-image" href="<?php echo extr().'images/gallery/h.jpg'?>">Type B<br>Super built up area: 925 sq.ft.</a></h3>
                            <a class="arrow" href="cases-single.html"><span class="icon fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>       



















</div>


                                 
                                    <div class="tab-pane" id="stat">
                                       
<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?php echo extr().'images/gallery/c.jpg'?>" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                  
                                    <a class="lightbox-image" href="<?php echo extr().'images/gallery/c.jpg'?>" title="title " data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
    
<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?php echo extr().'images/gallery/c.jpg'?>" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                  
                                    <a class="lightbox-image" href="<?php echo extr().'images/gallery/c.jpg'?>" title="title " data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
</div>



                                    <div class="tab-pane" id="gall">
                                       
                                  
            	<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?php echo extr().'images/gallery/b.jpg'?>" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                  
                                    <a class="lightbox-image" href="<?php echo extr().'images/gallery/b.jpg'?>" title="title " data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      


<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?php echo extr().'images/gallery/a.jpg'?>" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                  
                                    <a class="lightbox-image" href="<?php echo extr().'images/gallery/a.jpg'?>" title="title " data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
    
                                    </div>





                                    <div class="tab-pane" id="loc">
                                       
                                    <div class="case-block col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?php echo extr()?>images/gallery/18.png" alt="" />
                            
                        </div>
                                      
                                    </div>
                                </div>
                                </div>
                                    <div class="tab-pane" id="pro">
                                       
                                            <div class="form-column pull-right col-md-12 col-sm-12 col-xs-12">

         <form method ="post" action = "careers/add">       	
                    <!-- Contact Form -->
                    <div class="contact-form">

                        <!--Comment Form-->
                        <h4>Yes I am interested to know more about Serene Please get in touch with me</h4><br>
<h4><strong>Call Us +91 98475 40000</strong></h4>

                            <div class="row clearfix">
                                <div class="form-group row">
                                <div class ="col-md-2 col-sm-6 col-xs-12 col-lg-2"><br>
                                Name:
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                    <input  class="form-control" type="text" name="name" placeholder="Name *" >
                                </div>
                            </div>


                                    <div class="form-group row">

                                <div class="col-md-2 col-sm-6 col-xs-12  col-lg-2">
                                Email:
                                </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                    <input class="form-control"  type="email" name="email" placeholder="Email *" >
                                </div>
                                </div>
								
								
                                     <div class="form-group row">

                                <div class="col-md-2 col-sm-6 col-xs-12 col-lg-2">
                                Mobile:
                                </div>
                                  <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                    <input class="form-control"  type="text" name="mobile" placeholder="Mobile *" >
                                </div>

                              </div>  

                                
                                     <div class="form-group row">

                                <div class="col-md-2 col-sm-6 col-xs-12 col-lg-2">
                                Requirements:
                                </div>
                                  <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                    <textarea name="message"></textarea>
                                </div>

                              </div>  

                              <div class="g-recaptcha" data-sitekey="6Lc09zIUAAAAAA8-AU6sPhzpagNDxlW1N6tK60DC"></div>
                             
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now</button>
                                </div>

                        
                          </div>
                          </div>
                        </form>
						</div>
						</div>
                    <!--End Comment Form -->
                  </div> 
			
                
                                      
                                    </div>
                                       </div>
                                </div>      
                            </div>
                        </div>
                    </div>
					</div>
					</div>
   </section>
              
    <!--Cases Section-->