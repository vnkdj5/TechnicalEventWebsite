<?php
	include_once("query.php");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration | Credenz</title>
	<meta name="keywords" content="drivers ed" />
	<link rel="icon" href="img/fevicon.png" type="image/png" >
<link rel="shortcut icon" href="img/fevicon.png" > 
	<meta charset="utf-8"/>
	<meta name="robots" content="index, follow"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/inner.css">
	<link rel="stylesheet" type="text/css" href="css/mobile-menu.css">
	<link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<style>
	.antispam { display:none;}
	</style>
	<script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/libs/js-modernizr.min.js"></script>
	<script type="text/javascript" src="js/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/common.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47781007-1', 'creative-mob.com');
	  ga('send', 'pageview');

	</script>
	<script>
		var frmContact = {
			validateField : function (e){
				var self = $(this);
				var idField = self[0].id;

				switch (idField){
					case 'name':
						if ( self.val().length < 4 ){
							$('.frm-ok.name').hide();
						} else {
							$('.frm-ok.name').show();
						}
						break;
					case 'email':
						if ( self.val().length < 4 ){
							$('.frm-ok.email').hide();
						} else if ( self.val().indexOf('@') < 0 || self.val().indexOf('.') < 0 ) {
							$('.frm-ok.email').hide();
						} else {
							$('.frm-ok.email').show();
						}
						break;
					case 'phone':
						if ( self.val().length == 10 ){
							$('.frm-ok.phone').show();
						} else {
							$('.frm-ok.phone').hide();
						}
						break;
					case 'message':
						if ( self.val().length < 10 ){
							$('.frm-ok.message').hide();
						} else {
							$('.frm-ok.message').show();
						}
						break;
				}
			}
		};
		$(window).resize(function (){
			$('.frm-ok.name').css({ left : $('#name').width(), top : $('#name').position().top + 12 });
			$('.frm-ok.email').css({ left : $('#email').width(), top : $('#email').position().top + 12 });
			$('.frm-ok.phone').css({ left : $('#phone').width(), top : $('#phone').position().top + 12 });
			$('.frm-ok.message').css({ left : $('#message').width(), top : $('#message').position().top + 14 });
		});
		$(document).ready(function() {
			$('#name').on('keyup', frmContact.validateField);
			$('#email').on('keyup', frmContact.validateField);
			$('#phone').on('keyup', frmContact.validateField);
			$('#message').on('keyup', frmContact.validateField);

			$('.frm-ok.name').css({ left : $('#name').width(), top : $('#name').position().top + 12 });
			$('.frm-ok.email').css({ left : $('#email').width(), top : $('#email').position().top + 12 });
			$('.frm-ok.phone').css({ left : $('#phone').width(), top : $('#phone').position().top + 12 });
			$('.frm-ok.message').css({ left : $('#message').width(), top : $('#message').position().top + 14 });
			// init form validation
			$('#contactForm').validate({
				rules: {
					name:    {required: true},
					email:   {required: true, email: true},
					phone:   {required: true, digits: true, rangelength: [10, 10]},
					message: {required: true}
				}
			});
		});
	</script>
</head>
<body class="contact">
	<!-- MOBILE MENU -->
	<!-- START MOBILE MENU -->

<div class="overlay-menu overlay-hugeinc">
    <div class="overlay-close">Close</div>
    <nav>
        <ul>
             <li><a href="index.php"><div class="icon-wrap"><div class="icon home"></div></div>HOME</a></li>
			<li><a href="about.php"><div class="icon-wrap"><div class="icon contact"></div></div>ABOUT</a></li>
            <li><a class="small" href="events.php"><div class="icon-wrap"><div class="icon meet"></div></div>EVENTS</a></li>
            <li><a href="workshop.php"><div class="icon-wrap"><div class="icon what"></div></div>WORKSHOP</a></li>
            <li><a href="hackathon.php"><div class="icon-wrap"><div class="icon services"></div></div>HACKATHON</a></li>
            <li><a href="index.php#CONTACT"><div class="icon-wrap"><div class="icon contact"></div></div>CONTACT</a></li>
        </ul>
    </nav>
</div>
	
	<div class="maincontainer">
		
		<!-- MOBILE HEADER -->
		<header class="mobile">
	<div class="menu-mobile-trigger" id="trigger-overlay"></div>
</header>
<div class="tab-contact">
    <div class="central-balloon" id="central-balloon">
        <div class="dots">
            <div class="dot dot-0"></div>
            <div class="dot dot-1"></div>
            <div class="dot dot-2"></div>
        </div>
    </div>
</div>		
		<!-- CONTACT FORM -->
		<section class=" bg-radial-black-left" style="padding-top: 100px;">
			<div class="inner" >
				<h1 class="small blue" style="text-align:center;">Registation</h1>
				
				<center>
				<div class="" style="width:50%;">
					<form id="contactForm" class="clearafter" method="post">
						
						<div class="letter">
						<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
							<label for="name">Name</label>
							<input type="text" id="name" name="name"><div class="frm-ok name"></div><br>
							<label for="email">Email</label>
							<input type="text" id="email" name="email"><div class="frm-ok email"></div><br>
							<label for="phone">Mobile No.</label>
							<input type="text" id="phone" name="phone"><div class="frm-ok phone"></div><br>
							
							<!-- By default "select event from which page you have redirected"  --->
							
						<label for="event">Event</label>
							 <select name="event" id="event">
								<option value="C/C++ Clash" selected>C/C++ Clash</option>
								<option value="Web Weaver">Web Weaver</option>
								<option value="Cretronix">Cretronix</option>
								<option value="Croodle">Croodle</option>
								<option value="Mad Talks">Mad Talks</option>
								<option value="Reverse Coding">Reverse Coding</option>
								<option value="Paper Presentation">Paper Presentation</option>
								<option value="RoboLIGA">RoboLIGA</option>
								<option value="NTH">NTH</option>
								<option value="Software Development">Software Development</option>
						</select><div class="frm-ok "></div><br>
						<label for="phone">Number of Team Members</label>
						<select name="event" id="event">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
						</select><div class="frm-ok "></div><br>
  
							<label for="fees">Participation Fees:</label>
							<input type="text" id="fees" name="fees" disabled value="100"><div class="frm-ok message"></div><br>
						<!----AMIT FETCH THIS FEE FROM DB when event is selected --->
						
						<label for="payment_method">Payment Method</label>
						
						<select name="payment_method" id="payment_method">
								<option value="CASH">Cash</option>
								<option value="PAYTM">Paytm</option>
								<option value="UPI">UPI</option>
						</select><div class="frm-ok "></div><br>
						<button class="blue with-blue-text">Register</button>
					</div>
					</form>
				</div>
				</center>
			</div>
		</section>
		
		<!-- FOOTER -->
		<footer>
	<div class="scene">
		<div class="lights"></div>
		<div class="buildings"></div>
		<div class="top"></div>
		<div class="ship"></div>
	</div>
	<div class="blackbar">
		<div class="inner">
			<div class="creativemob">
				<div class="icon"><img src="Logos/logo pisb.png" style="width:200px;height:90px;"/></div>
				
			</div>
			<ul class="connect-buttons">
				<li class="fb"><a href="https://www.facebook.com/pisb.credenz" target="_blank"></a></li>
				<li class="em"><a href="mailto:admin@credenz.com" target="_blank"></a></li>
				
			</ul>
			<div class="location">
				<div class="icon location"></div>
				<span><strong>Pune Institute Of Computer Technology<br>27,Pune-Satara Road<br> Dhankawadi,Pune-411043<br><!-- <a href="tel:619-800-3298">619-800-3298</a> --></strong></span>
			</div>
		</div>
	</div>
	<div class="copyright">&copy; 2017 PISB. All rights reserved..</div>
</footer>		
	</div>
	
	<!-- DESKTOP MENU -->
	<div class="menu-desktop open">
	<ul>
		<li class="about"><a href="index.php">HOME</a></li>
		<li class="about"><a href="about.php">ABOUT</a></li>
		<li class="showroom"><a href="events.php">EVENTS</a></li>
		<li class="services"><a href="workshop.php">WORKSHOPS</a></li>
		<li class="services"><a href="hackathon.php">HACKATHON</a></li>
		<li class="services"><a href="index.php#CONTACT">CONTACT</a></li>
	</ul>
	<div class="circle">
		<img src="img/common/menus/logo-cm%402x.png">
	</div>
	<div class="ribbon-left"></div>
	<div class="ribbon-right"></div>
</div>

<div class="overlay-window overlay-hugeinc">
	<div class="contact-window">
		<div class="close-window"><img src="img\inner\resources\close-btn.png" /></div>
		<div class="window-form">
			<h3>Any Suggestions?</h3>
			<p>Fill out the fields below and send us a message. Look forward to hearing from you!</p>
			<form method="POST">
				<input type="text" name="w_name" placeholder="Name" />
				<input type="email" name="w_email" placeholder="Email" />
				<textarea name="w_message" placeholder="Message"></textarea>
				<input type="submit" class="button send-msg" name="send_message" value="SEND SUGGESTION"/>
			</form>
		</div>
		<div class="window-bar">
			<div class="the-bar"></div>
		</div>
		<div class="call-us-today">
			<h3>Any Queries?</h3>
			<p>Perhaps a phone conversation is more your style? No worries!</p>
			<button class="button bigger call-us">Call Us Directly!</button>
			<h2>+91-9890811301</h2>
		</div>
	</div>
</div>	<script type="text/javascript" src="js/menus.js"></script>
	<script type="text/javascript" src="js/inner.js"></script>
	<script type="text/javascript" src="js/home.js"></script>
</body>