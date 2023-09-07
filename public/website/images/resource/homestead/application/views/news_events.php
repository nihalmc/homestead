
    
	<!--Page Title-->
  <!--  <section class="page-title" style="background-image:url(<?php echo extr()?>images/background/3.jpg);">
    	<div class="auto-container">
        	<div class="title-box">
            	<h2>News & Events</h2>
                <ul>
                	<li><a href="Home">Home</a></li>
                    <li>News & Events</li>
                </ul>
            </div>
        </div>
    </section>-->
    <!--End Page Title-->
    
    <!--Sidebar Page-->
    <div class="sidebar-page-container blog-page">
        <div class="auto-container">
            <div class="row clearfix">
				
                <!--Content Side-->
               
                	<!--Our-Blogs-->
                    <div class="our-blogs">
					


                
                        <!--News Block Two-->
                         <?php foreach($news as $new)
{?>
	<div class="content-side col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                               
                                    <a href="#"><img src="<?php echo extr()?>images/resource/<?php echo $new->image ?>" alt="" /></a>
                                  <div class="post-date"><?php $originalDate = "$new->created_date";
                                              $newDate = date("d M Y", strtotime($originalDate));

                                                 echo $newDate;?>

                                   
   
    </div>                       </div>
                                <div class="lower-box">
                                	<ul class="post-meta">
                                       <!-- <li><span class="icon fa fa-user"></span>By Admin</li>-->
                                       <!-- <li><span class="icon fa fa-commenting"></span>10 Comments</li>-->
                                    </ul>
                                    <h3><a href="#"> <?php echo $new->title?></a></h3>
                                    <div class="text"><?php echo $new->text?></div>
                                    <a href="<?php echo base_url()?>News/getnewsbyid/<?php echo $new->id?>"class="read-more">Read More <span class="fa fa-angle-double-right"></span></a>
                             
                                </div>
                            </div>
                        </div>

                        </div>

                        <?php }
                ?>
                        
                      </div>
                          </div>
               

          
        </div>

    </div>