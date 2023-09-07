<?php

if ( isset( $_POST['submit'] ) )
	
	/*if ( get_magic_quotes_gpc() )
		$postedValue = htmlspecialchars( stripslashes( $editor1 ) ) ;
	else
		$postedValue = htmlspecialchars( $editor1 ) ;*/
		$postedValue=$_POST['editor1'];

	include("../../connect.php");
	$sql="insert into tbldomestic(domestic) values('$postedValue')";
	$rs=mysql_query($sql);
	if($rs)
		header("location:autogrow.php");
?>
	