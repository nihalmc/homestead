<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="Dashboard">

    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">



    <title>Yatheem  - Admin Panel--</title>



    <!-- Bootstrap core CSS -->

    <link href="<?php echo extr();?>css/bootstrap.css" rel="stylesheet">

    <!--external css-->

    <link href="<?php echo extr();?>font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="<?php echo extr();?>css/zabuto_calendar.css">

    <link rel="stylesheet" type="text/css" href="<?php echo extr();?>css/sweetalert.css">

    <link rel="stylesheet" type="text/css" href="<?php echo extr();?>js/gritter/css/jquery.gritter.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo extr();?>lineicons/style.css"> 

     <link rel="stylesheet" type="text/css" href="<?php echo extr();?>css/jquery.dataTables.css">     

      <link rel="stylesheet" type="text/css" href="<?php echo extr();?>css/default.css"> 

    

    <!-- Custom styles for this template -->

    <link href="<?php echo extr();?>css/style.css" rel="stylesheet">

    <link href="<?php echo extr();?>css/style-responsive.css" rel="stylesheet">



    <script src="<?php echo extr();?>js/chart-master/Chart.js"></script>

    <script src="<?php echo extr();?>js/jquery.js"></script>

     <script src="<?php echo extr();?>js/jquery-1.8.3.min.js"></script>

     <script type="text/javascript" src="<?php echo extr();?>js/gritter/js/jquery.gritter.js"></script>

    <script type="text/javascript" src="<?php echo extr();?>js/gritter-conf.js"></script>

        <script type="text/javascript" src="<?php echo extr();?>js/sweetalert.min.js"></script>

  </head>



  <body>



  <section id="container" >

      <!-- **********************************************************************************************************************************************************

      TOP BAR CONTENT & NOTIFICATIONS

      *********************************************************************************************************************************************************** -->

      <!--header start-->

      <header class="header black-bg">

              <div class="sidebar-toggle-box">

                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>

              </div>

            <!--logo start-->

            <a href="index.html" class="logo"><b>Offer Yatheem </b></a>

            <!--logo end-->

            

            <div class="top-menu">

            	<ul class="nav pull-right top-menu">

                    <li><a class="logout" href="<?php echo base_url();?>login">Logout</a></li>

            	</ul>

            </div>

        </header>

      <!--header end-->

      

      <!-- **********************************************************************************************************************************************************

      MAIN SIDEBAR MENU

      *********************************************************************************************************************************************************** -->

      <!--sidebar start-->

      <aside>

          <div id="sidebar"  class="nav-collapse ">

              <!-- sidebar menu start-->

              <ul class="sidebar-menu" id="nav-accordion">

              

              	  <p class="centered"><a href="profile.html"><img src="<?php echo extr();?>img/ui-sam.jpg" class="img-circle" width="60"></a></p>

              	  <h5 class="centered"></h5>

              	  	


              

         



                  

                   <li class="sub-menu">

                      <a href="javascript:;" >

                          <i class="fa fa-file-text"></i>

                          <span>Services</span>

                      </a>

                      <ul class="sub">

                          <li><a  href="<?php echo base_url();?>addservice">Add</a></li>

                             <li><a  href="<?php echo base_url();?>listservice">List</a></li>

                         

                      </ul>

                  </li>

                  

                  

                  

                  

                  <li class="sub-menu">

                      <a href="javascript:;" >

                          <i class="fa fa-users"></i>

                          <span>Gallery</span>

                      </a>

                      <ul class="sub">

                          <li><a  href="<?php echo base_url();?>addgallery">Add</a></li>

                          <li><a  href="<?php echo base_url();?>listgallery">List</a></li>

                         

                      </ul>

                  </li>
                   <li class="sub-menu">

                      <a href="javascript:;" >

                          <i class="fa fa-users"></i>

                          <span>Gallery Images </span>

                      </a>

                      <ul class="sub">

                          <li><a  href="<?php echo base_url();?>addgalleryimage">Add</a></li>

                          <li><a  href="<?php echo base_url();?>listgalleryimage">List</a></li>

                         

                      </ul>

                  </li>
                  <li class="sub-menu">

                      <a href="<?php echo base_url();?>changepassword" >

                         

                          <span>Change Password </span>

                      </a>
                      </li>



                 

                 



              </ul>

              <!-- sidebar menu end-->

          </div>

      </aside>

      <!--sidebar end-->

      

      <!-- **********************************************************************************************************************************************************

      MAIN CONTENT

      *********************************************************************************************************************************************************** -->

      <!--main content start-->

      <section id="main-content">

          <section class="wrapper">



             