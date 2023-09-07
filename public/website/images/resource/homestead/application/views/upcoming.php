 
	<!--Page Title-->
    <!--<section class="page-title" style="background-image:url('<?php echo extr() ?>images/background/3.jpg');">
    	<div class="auto-container">
        	<div class="title-box">
            	<h2>Projects</h2>
                <ul>
                	<li class="current"><a href="<?php echo base_url(); ?>Home">Home</a>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Cases Section-->
     <section class="about-section">
    	<div class="auto-container">
        	<div class="row clearfix">

    <!--News Block Two-->
                         <?php foreach($upcoming as $up)
{?>
               

                  <div class="case-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="<?php echo extr()?>images/gallery/<?php echo $up->image ?>" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                    <a href="<?php echo base_url(); ?>Project/detail/<?php echo $up->id?>"><span class="icon fa fa-link"></span></a>
                                
                                </div>
                            </div>
                        </div>
                        <div class="lower-box clearfix">
                            <h3><a href="<?php echo base_url(); ?>Project/detail/<?php echo $up->id?>  "> <?php echo $up->name?> <br><?php echo $up->description?>  </a></h3>
                            <a class="arrow" href="<?php echo base_url(); ?>Project/detail/<?php echo $up->id?>"><span class="icon fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
                
                      <?php }
                ?>
                        
                
               
              
            <div class="text-center">
            	<!-- Styled Pagination -->
              <!--  <div class="styled-pagination">
                    <ul class="clearfix">
                        <li><a class="prev" href="#"><span class="fa fa-angle-double-left">&ensp;Prev</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a class="next" href="#">Next&ensp;<span class="fa fa-angle-double-right"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>-->
    </section>
    <!--Cases Section-->
    