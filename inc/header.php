<?php 
	$fonts="verdana";
	$bgcolor="#444";
	$fontcolor="#fff";
	
;?>

<!DOCTYPE html>
<html lang ="en">
<head>
	
	<title>JQuery</title>
	<style>
		body{font-family:<?php echo $fonts;?>}.phpcoding{width:900px; margin:0 auto; background:<?php echo "#ddd"?>
		;padding:20px;min-height:400px;}
		.headeroption, .footeroption{background: <?php echo $bgcolor;?>;color:<?php echo $fontcolor;?>
		;text-align:center; padding:20px;}.headeroption h2, .footeroption
		h2{margin:0; font-size:24px}.maincontent{min-height:400px;padding:20px;font-size:18px}
		p{margin:0}
		input[type="text"],input[type="password"]{width:238px;padding:5px;}
		
		select{font-size:18px};padding:2px 5px; width:250px;}
		.tblone{width:100%; border:1px solid #fff; margin:20px 0}
		.tblone td{ padding: 5px 10px;text-align:center;}
		table.tblone tr: nth-child(2n+1){background:#fff;height:30px;}
		table.tblone tr: nth-child(2n){background:#f1f1f1;height:30px;}
		#myform{width:100%; border:1px solid #fff;padding:10px;}
		.para{height:400px;width:815px;background:#fff;border:1px solid #999;padding:15px;display:none;}
		.paras{height:300px;width:815px;background:#fff;border:1px solid #999;padding:15px;margin-top:10px;position:relative;}
		.parass{height:1000px;width:815px;background:#fff;border:1px solid #999;padding:15px;margin-top:10px;position:relative;}
		.inside{position:absolute;height:200px;width:200px;background:#000;border:1px solid #999;padding:5px; border-radius:50%;}
		.text{
		border: 1px solid #999;
		border-radius: 5px;
		color: red;
		float:right;
		padding:10px;
	}
	.bg{background:#000; color:#fff}
	.parasCopy{width:815px;background:#fff;border:1px solid #999;margin-top:10px;}
	.dimen{
		background:#ddd none repeat scroll 0 0;
		border: 40px solid #999;
		font-size:48px;
		padding:50px;
		text-align: center;
	}	
	.error_form{color:red;font-size:15px;}
	#gotoup{background: url("img/top.png") no-repeat scroll 0 0; bottom: 10px;right: 10px;position: fixed;width: 45px;height: 33px;cursor: pointer;}
	</style>
	<script src="js/jquery.js"></script>
</head>
<body>
	<div class ="phpcoding" >
	<section class="headeroption">
		<h2><?php echo "JQuery"?></h2>
	</section>
	<section class ="maincontent">
		
		<hr></hr>
	

