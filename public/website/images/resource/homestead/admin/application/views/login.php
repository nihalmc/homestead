

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
<!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="">
<meta name="author" content="">

<!-- Custom styles -->
<style type="text/css">
.signin-content {
  max-width: 360px;
  margin: 0 auto 20px;
  
}
</style>

<!-- Le styles -->
<link href="<?php echo extr();?>css/lib/bootstrap.css" rel="stylesheet">
<link href="<?php echo extr();?>css/lib/bootstrap-responsive.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo extr();?>css/sweetalert.css">

<link href="<?php echo extr();?>css/boo.css" rel="stylesheet">

<link href="<?php echo extr();?>css/boo-coloring.css" rel="stylesheet">
<link href="<?php echo extr();?>css/boo-utility.css" rel="stylesheet">



<script src="js/jquery-1.11.0.js" type="text/javascript"></script>

        <script type="text/javascript" src="<?php echo extr();?>js/sweetalert.min.js"></script>

<script type="text/javascript">
function FrmSub(){
if(document.getElementById('txtUser').value  == ""){	
	alert("Enter a valid Username");	
	return false;	
}
if(document.getElementById('idPassword').value == "")
{
	alert("Enter a valid Password");	
	return false;	
}
		

	
}
</script>

</head>

<body class="signin signin-vertical">





<div class="page-container">
    
    <!-- // header-container -->
    
    <div id="main-container">
        <div id="main-content" class="main-content container">
            <div class="signin-content">
                <h1 class="welcome text-center" style="line-height: 0.6;"><!--<span style="margin-left: -45px;">Welcome to</span><br />-->
                     <small><img src="<?php echo extr();?>img/logo.png"></small></h1>
                <div class="well well-nice form-dark">
                    <div class="tab-content overflow">
                        <div class="tab-pane fade in active" id="login">
                            <h3 class="no-margin-top"><!--<i class="fontello-icon-user-4"></i>--> 
    Admin Panel</h3>
                            <form class="form-tied margin-00" id="form1" method="post" action="login" name="form1" onSubmit="return FrmSub()">
                                <fieldset>
                                    <legend class="two"><span>Sign in with your username and password</span></legend>
                                    <ul>
                                        <li>
                                        <!--<input type="text" name="txtUser" id="txtUser" class="required">-->
                                            <input id="txtUser" class="input-block-level required" type="text" name="usr" placeholder="Username">
                                        </li>
                                        <li><!--<input type="password" name="txtPass" id="txtPass" class="required">-->
                                            <input id="idPassword" class="input-block-level required" type="password" name="psd" placeholder="Password">
                                        </li>
                                    </ul>
                                    <button type="submit" class="btn btn-black btn-block btn-large" name="Submit">SIGN IN</button>
                                    <hr class="margin-xm">
                                    
                                    <!--<a href="#forgot" class="link pull-right" data-toggle="tab">Forgot Password?</a>-->
                                </fieldset>
                            </form>
                            <!-- // form --> 
                            
                          <?php if($this->session->flashdata('msg')){ ?>
        <span style="color: #FF0000; font-weight: bold; font-size: 10px !important;"><?php echo $this->session->flashdata('msg');?></span>
        <?php
					}
				?>  
                            
                        </div>
                        <!-- // Tab Login -->
                   
                      
                   
                    </div>
                </div>
                <!-- // Well-Nice --> 
                

                <!--<ul class="nav nav-center well well-impressed well-small" style="margin-top: 90px">
                    <li><a href="login-01.html" class="link">Black</a></li>
                    <li class="divider-vertical line"></li>
                    <li class="active"><a href="index.php" class="link">Nice</a></li>
                    <li class="divider-vertical line"></li>
                    <li><a href="login-02.html" class="link">Base</a></li>
                    <li class="divider-vertical line"></li>
                    <li><a href="login-03.html" class="link">SignIn</a></li>
                </ul>-->
            </div>
            <!-- // sign-content --> 
            
        </div>
        <!-- // main-content --> 
        
    </div>
    <!-- // main-container  --> 
    
</div>
<!-- // page-container --> 

<!--<div class="modal hide fade" id="myModal">
    <div class="modal-header">
    	<h4>Welcome</h4>
    </div>
    <div class="modal-body">
    	<h3 class="margin-0s">Hi,</h3>
    	<p>This template has been updated, but the update is not yet available for download on ThemeForest.The package is awaiting approval. <br>Once the new version to download you will see in the icon template version number 1.2.0. <br>After the purchase are all updates, including this one, free.</p>
    </div>
    <div class="modal-footer">
    	<a href="#" data-dismiss="modal" class="btn btn-red">Close</a>
    </div>
</div> -->

</body>
</html>
