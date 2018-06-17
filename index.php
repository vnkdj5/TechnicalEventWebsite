<?php
	include_once("query.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js gt-ie9 non-ie" lang="en"> <!--<![endif]-->


<head>
	<title>Credenz | Amplifying Ideas </title>
	<meta name="keywords" content="" />
	<meta name="description" content="CREDENZ. Pune's Largest Tech Event" />
	<link rel="icon" href="./img/favicon.png" type="image/png" /> 
	<meta charset="utf-8">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/mobile-menu.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />

	<style>
	.antispam { display:none;}
	</style>

	<!--- Animation particle background
	 <link rel="stylesheet" media="screen" href="css/style.css">
	
	--- ENDS HERE-->
	<link type="text/css" media="screen" rel="stylesheet" href="css/iexplorer.css" />

	<script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/libs/js-modernizr.min.js"></script>
	<script type="text/javascript" src="js/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/libs/jquery.toftrigger.js"></script>
	<script type="text/javascript" src="js/common.min.js"></script>
	<script type="text/javascript" src="js/js-iedetect.js"></script>
	<!--[if gte IE 8]>
		<link rel="stylesheet" type="text/css" href="css/iexplorer.css" media="screen, projection" />
	<![endif]-->
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47781007-1', 'creative-mob.com');
	  ga('send', 'pageview');

	</script>
	<script>
	$(document).ready(function() {
			// init form validation
			$('#connectForm').validate({
				rules: {
					name:    {required: true},
					email:   {required: true, email: true},
					phone:   {required: true, digits: true, rangelength: [10, 10]},
					message: {required: true}
				}
			});
		});
	</script>
	<style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1001; /* Sit on top */
            padding-top: 50px; /* Location of the box */
			padding-bottom: 50px;
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			
			    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    
        }
		
		.modal h4{
		font-size:18px;
		}
		.modal li{
		font-size:14px;}

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 	0px;
            border: 1px solid #888;
            width: 80%;
			
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
		
		.tile {
    width: 13%;
    height: auto;
    right: 45%;
    top: 20%;
    position: absolute;
    cursor: pointer;
}

.borderimg {
    border: 5px solid red;
}

.imgclass {
    transition: all .7s ease-out;
    -webkit-transition: all .4s ease-out;
    -webkit-transition-property: -webkit-transform;
}

.modal-header {
    font-size: 22px;
    background-color: rgb(58, 57, 57);
    color: white;
	padding: 15px;
    border-bottom: 1px solid #fefefe
}

.modal-body ul {
    margin-left: 3%;
    margin-right: 3%;
    text-align: justify;
}
.modal-body li {
    color:black;
    text-align: justify;
}
.modal-body ul ul {
    margin-left: 3%;
    margin-right: 3%;
}

.modal-body ul ol {
    margin-left: 3%;
    margin-right: 3%;
}
.modal-footer{
text-align:center;padding: 15px;
    border-top: 1px solid #e5e5e5;}
.modal-footer button:hover {
    background-color: rgb(58, 57, 57);
    color: white;
}
.modal-body {
    position: relative;
    padding: 15px;
}

.imgc:hover {
    transform-origin: 50% 50% !important;
    -moz-transform: scale(1.17)!important;
    transform: scale(1.17)!important;
    opacity: 1!important;
}

.tab-contact1 {
  position: fixed;
  display: block;
  z-index: 30;
  top: 20%;
  left: 0%;
  background-color: #ffb56a;
  padding: 8px 8px 8px 30px;
  -webkit-border-top-right-radius: 50px;
  -webkit-border-bottom-right-radius: 50px;
  -moz-border-radius-topright: 50px;
  -moz-border-radius-bottomright: 50px;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}

.tab-contact1:hover {
  background-color: #ff7c00;
}
    </style>
</head>
<body class="home">
	<!-- MOBILE MENU -->
	<!-- START MOBILE MENU -->
<!-- particles.js container -->


<!-- scripts -->




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
	<div class="tab-contact1">
    <a href="register.php" ><img src="img/home/reg.png" width="50" height="50"/></a>
	
	
</div>
</div>		
		<!-- WELCOME SECTION -->
		<section class="welcome">
			<div class="lights"></div>
			<div class="buildings"></div>
			<div class="blackbg"></div>
			<div class="title">
				<p style="text-align:center"><img src="img/digitalindia.png" width="10%" height="5%" />
				<img src="img/unesco.png" width="10%" height="5%" />
				<img src="img/make in india.png" width="10%" height="5%"/>
				
				<h1>CREDENZ</h1>
				
				
				<h2 class="subtitle">AMPLIFYING IDEAS <br></h2>
				
				</p>
			</div>
			<div class="blurb">
				<div class="inner">
					<h2>HELLO. WELCOME TO CREDENZ.</h2>
					<p class="gray2">Credenz is the national level, annual technical festival of PICT, Pune. Eleven years ago, a spark was ignited among a group of bright engineers and since then, this spark has grown manifold, continuing to ignite minds across the nation. Credenz is now one of the biggest technical festivals in the country, providing a platform for young engineers to think, innovate and showcase their talents.</p>
				</div>
			</div>
		</section>
		
		<!-- WHO-WE-ARE SECTION -->
		<section class="who">
			<div class="alley3d">
				<div class="cube">
					<div class="computer-scene"></div>
					<div class="code-window"><div class="code"></div></div>
					<div class="mobster-coding"></div>
					<div class="backface"></div>
					<div class="rightface"></div>
					<div class="bottomface"></div>
					<div class="blurb">
						<div class="inner">
							<h2 class="large">HACKATHON</h2>
							<p> This is a 24-hour hackathon to code, strategize and innovate some ingenious solutions to the most sought out real-life problem statements.</p>
							<a class="button black inverted" href="hackathon.php">Learn More</a>
							<!-- doesn't fit nicely
							<p>Our team of highly motivated designers, developers, strategists and writers prides itself on collaborative development and flexibility resulting in projects that consistently exceed the expectations of our partners and their customers.</p>
						-->
					</div>
				</div>
				<div class="lamppost-shadow"></div>
				<div class="lamppost"></div>
				<div class="trashcan"></div>
			</div>
		</div>
	</section>
	
	<!-- MEET THE MOB -->
	<section class="meet">
		<div class="bricks"></div>
		<div class="mobsters">
			<div class="mobster mobster2"><div></div></div>
			<div class="mobster mobster5"><div></div></div>
			<div class="mobster mobster7"><div></div></div>
			<div class="mobster mobster3"><div></div></div>
			<div class="mobster mobster6"><div></div></div>
			<div class="mobster mobster8"><div></div></div>
			<div class="mobster mobster4"><div></div></div>
			<div class="mobster mobster9"><div></div></div>
			<div class="mobster mobster1"><div></div></div>
		</div>
		<div class="blurb">
			<div class="inner">
				<h2 class="large"> WORKSHOPS</h2>
				<p>
            Did you dream of making the Iron Man suit? Did you dream of building the Autobots? Are you fascinated by the gadgets and want to know how they work? Well, here's an opportunity for you to learn and explore the ingenious technologies, a chance to work under the guidance of renowned professionals and interact with other students who share common interests. Buckle up and get ready to have hands-on, enriching experience and realize your dreams. <!-- <span class="extra">In industry terms, we are able to provide the full suite of digital marketing services.</span> --></p>
				<a class="button black inverted" href="workshop.php">View Details</a>
			</div>
		</div>
	</section>
	
	<!-- WHAT WE DO -->
	<section class="what">
		<div class="blackbg"></div>
		<div class="bottom"></div>
		<div class="bags">
			<div class="guitar"></div>
			<div class="bag1">
				<div class="bag1-handle"></div>
				<div class="bag1-bg"></div>
			</div>
			<div class="bag3"></div>
			<div class="bag2">
				<div class="bag2-paper">
					<div class="inner">
						<p class="black">Hook onto Network Treasure Hunt, an online treasure hunt where participants follow clues and visit different websites to solve riddles. Solve a series of strategic clues to complete the track and win prizes.<span class="extra"> So go on, login and be Sherlock for a day!</span></p>
						<a class="button black inverted" href="register.php">REGISTER NOW</a>
					</div>
				</div>
				<div class="bag2-flap"></div>
			</div>
		</div>
		<div class="fishingpole">
			<div class="fishingpole-handle"></div>
		</div>
		<div class="title">
			<h2 class="large">Network Treasure Hunt</h2>
		</div>
	</section>
	
	<!-- SERVICES SECTION -->
	<section class="services">
		<div class="waves">
			<div class="wave wave1"></div>
			<div class="wave wave2"></div>
			<div class="wave wave3"></div>
		</div>
		<div class="waterbg-shallow"></div>
		<div class="waterbg-deep"></div>
		<div class="seascene">
			<div class="inner">
				<div class="fish-blurry1"><div></div></div>
				<div class="fish-blurry2"><div></div></div>
				<div class="fish-blurry3"><div></div></div>
				<div class="seaweed-blurry1"></div>
				<div class="fish-blurry4"><div></div></div>
				<div class="fish-blurry5"><div></div></div>
				<div class="fish-blurry6"><div></div></div>
				<div class="seaweed-blurry2"></div>
				
				<div class="barrel"></div>
				<div class="seaweed1"></div>
				<div class="seaweed2"></div>
				<div class="starfish"></div>
				<div class="fish1"><div></div></div>
				<div class="fish2"><div></div></div>
				<div class="fish3"><div></div></div>
				<div class="seaweed3"></div>
				<div class="fish4"><div></div></div>
			</div>
		</div>
		<div class="blurb">
			<div class="inner">
				<h2 class="large">EVENTS</h2>
				<p>
				Are you ready to dive to dive into one of the most happening thing in PICT.
				Brace yourself, as Credenz'17 is here to give you most thrilling experience you will have in your college life! We have arranged various Tachnical and Non-Technical events such as such as Code Clash, Web Weaver, RoboLIGA, Quiz.
				Win prizes up to Rs. 10,000/-. 
				</p>
				<p>Have a look at various events:</p>
				<div class="perdy-icons">
					<div id="#CLASH" class="wrap smallest-text">
					<div class="myBtn_multi" >
					<a href="#CLASH"><div class="perdy-icon contentmarketing"></div>C/C++<br>CLASH</a>
					</div></div>
					
					<div id="ww" class="wrap smallest-text">
					<div class="myBtn_multi" ><a href="#ww"><div class="perdy-icon webdesign"></div>WEB<br>WEAVER</a></div><br class="show-small"
					></div>
					
					<div id ="roboliga"class="wrap smallest-text">
					<div class="myBtn_multi" ><a href="#roboliga"><div class="perdy-icon webdevelopment"></div>RoboLIGA</a></div
					></div>
					<div id="PP" class="wrap smallest-text">
					<div class="myBtn_multi" ><a href="#PP"><div class="perdy-icon onlinemarketing"></div> PAPER<br>PRESENTATION</a></div></div>
				</div>
				<br>
				<a class="button black" href="events.php">VIEW MORE</a>
			</div>
		</div>
		<div class="fishingline">
			<div class="worm">
				<div class="worm-eyes"></div>
			</div>
		</div>
	</section>
	<!------------------------------------------------------>
		<div class="modal modal_multi">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close close_multi">×</span>
           <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">C CLASH</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>A C/C++ coding competition held in high regard for the conceptual challenges it brings to a coder's mind, 'C'-LASH beckons all the programmers out there, amateur and experienced alike, to participate and enhance their coding skills! Utterly professional yet non-compromising on coding-fun, 'C'-LASH tests you for your speed, logic and checks if you have the right outlook towards a problem. So 'compile' yourself and join this national-level coding combat in Credenz '17!</li>
                        <li>Registration Fees:
                            <ul>
                                <li>Rs.100 for NON IEEE member</li>
                                <li>Rs.80 for IEEE members.
                                </li>
                            </ul>
                    </ul>
                    <h4>Rules:</h4>
                    <ul>
                        <li>A maximum of 2 candidates pursuing undergraduate program at their institution are allowed per team.</li>
                        <li>All the participants should bring receipt and valid I-cards while coming for the contest. A participant without an I-card will NOT be allowed for the contest and the respective team will be disqualified.</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>There will be TWO rounds per group:
                            <ol>
                                <li>Elimination Round (MCQ's Round)</li>
                                <li>Coding Round (Final Round)</li>
                            </ol>
                        </li>
                        <li>Owing to the vast nature of the programming language, the event will be conducted in two categories, Junior Level and Senior Level.</li>
                        <li>Teams can register at the registration desk on the day of the event, 1 hour prior to the event. Teams can also register at desks put up at various colleges in Pune.</li>
                        <li>The competition will test the participants' programming skills and knowledge of C/C++.</li>
                        <li>The Second Round structure will be declared on the spot.</li>
                        <li>NOTE: Only one computer will be provided to each team.</li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>The competition will test participants programming skills and knowledge of C/C++.</li>
                        <li>Time and cost efficiency of the code.</li>
                    </ul>
					<center><button type="button" class="btn btn-default" onclick="window.open('register.php')">Register Now</button>
					</center>
                </div>
                <div class="modal-footer">
                    
                </div>

        </div>

    </div>
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
           <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">WEB WEAVER</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>Think about what happens when you visit a website that is poorly designed as opposed to one that is clean, easy-to-use and modern? The look and feel of a website is critical to keep visitors engaged online. If you think you can do this, it's time for you to design such a site. A striking blend of technology, skill and CREATIVITY can help you win this competition. Develop a website captivating enough to grab the attention of your peers and an experienced panel of judges.</li>
                        <li>Registration Fees:
                            <ul>
                                <li>Rs. 150 for Non-IEEE member</li>
                                <li>Rs. 120 for IEEE members.</li>
                            </ul>
                        </li>
                    </ul>
                    <h4><b>Problem Statement:</b></h4>
                    <b>Design a Website for an Art Gallery Portal with the following features:</b>
                    <ul>
                        <li>The website must exhibit its facilities to artists and visitors in an interactive and responsive manner.</li>
                        <li>The website must provide information about various art galleries around the world.</li>
                        <li>The site must present profiles of famous artists along with their major works and masterpieces.</li>
                        <li>Judging criteria includes UI/UX of the website, creativity and features that bring out uniqueness.</li>
                        <li>The Structure of the site is up to the participant it may contain a single page or multiple pages.</li>
                    </ul>
                    The participant might also design a section for upcoming art exhibition and Art Festivals. Additional Features to enhance your website are welcomed. The presentation must be professional with contrast to artistic elements. Images, Videos, GIFs and any other supporting media relevant to the subject can be used by the participant.
                    <ul>
                        <li>
                            Email your website in a zip file at webweaver.credenz17@gmail.com
                        </li>
                        </ul>
                    <h4><b>Last date of Submission is 9th September 2017</b></h4>
                    <h4>Rules:</h4>
                    <ul>
                        <li>A team of maximum 3 is permissible for the event.</li>
                        <li>Use of any front end framework is permitted.</li>
                        <li>You are allowed to use any language but readymade template must not be used.</li>
                        <li>Wordpress is not allowed.</li>
                        <li>All teams shall have to get their own laptops on the day of the competition. It is advisable to get a high speed data card (even though net connection will be provided), for your convenience.</li>
                        <li>All the participants should bring receipt and valid I-cards while coming for the contest. A single team member without an I-card will result in the disqualification of the entire team.</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>1st ROUND:</li>
                        <li>A problem statement shall be given to the participants online.</li>
                        <li>The problem statement shall be released approximately 20 Days prior on the official website of Credenz '17.</li>
                        <li>The team should mail the files to webweaver.credenz17@gmail.com in <b>zip archive</b>. (All files with understandable documentation.)</li>
                        <li>2nd ROUND</li>
                        <li>The second round shall be conducted at PICT.</li>
                        <li>Approximately 10 teams shall be shortlisted.</li>
                        <li>The teams shall be given certain add-ons over the pages designed earlier.</li>
                        <li>Five add-ons shall be given, specific to the pages designed by the participants.</li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>Creativity and originality of the design.</li>
                        <li>Distinct features incorporated in the design.</li>
                        <li>Navigation through the site, how well the pages are interconnected.</li>
                        <li>Persuasiveness of the design, the efficiency of the site to give primary information on the required theme.</li>
                        <li>Based on the your Design, UI/UX and Development.</li>
                        <li>Additional points will be awarded for backend development.</li>
                    </ul>
					 <center><button type="button" class="btn btn-default"  onclick="window.open('register.php')">Register Now</button>
					 </center>
                </div>
                <div class="modal-footer">
                   
                </div>
        </div>
    </div>
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">RoboLIGA</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>Football- The most breath-taking game becomes even more so when it's the robots that play the game! Bring your footballer-bot to the game and become a part of the most attractive of the events of Credenz '17. As an event that surely keeps everyone's eyes transfixed on the field, RoboLIGA does not fail to entertain and teach at the same time. Explore the Robotics-aspect of Credenz and experience the extravagant thrill as you make your bot wade past the opponent and …that's right – SCORE!
                        </li>
                        <li>Registration Fees:
                            <ul>
                                <li>Rs200 for NON IEEE member</li>
                                <li> Rs160 for IEEE members.</li>
                            </ul>
                    </ul>
                    <h4>Rules:</h4>
                    <ul>
                        <li>Max Current 5A.</li>
                        <li>A maximum of 3 candidates pursuing undergraduate program in their institution are allowed per team.
                        </li>
                        <li>Teams can register at the desk put up in various colleges in and around Pune.</li>
                        <li>Teams can also register at the registration desk on the day of the event, at least an hour prior to the event.</li>
                        <li>ROBOT LIMITATIONS
                            <ol>
                                <li>Maximum robot dimensions: 30cm x 30 cm x 30 cm.</li>
                                <li>Maximum weight 3.5 kg.</li>
                                <li>Power specifications:
                                    <ul>
                                        <li>Max Voltage: 12V (Normal Operation).</li>
                                        <li>18 V (Momentary surge on load only) allowed three times in a match.</li>
                                    </ul>
                                </li>
                                <li>The robot cannot split into two independent parts.</li>
                                <li>Robot should be manually controlled.</li>
                                <li>No weapons (blades, spikes) of any kind are to be attached onto the robot.</li>
                                <li>The participants are allowed to use any number of actuators.</li>
                            </ol>
                            <li>There should be no intentional damage done to the other robot by means of attacking wires, wheels, motors etc.</li>
                            <li>NOTE: Any damage to the field or to the opposing robot would result in immediate disqualification of the team.</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>The duration of each match will be 8 minutes (i.e. two halves, each of 4 minutes duration). A 30- seconds break will be given after half time during which the teams will be allowed to attend to their robots.
                        </li>
                        <li>Each match will be a one-on-one match between two similar teams selected randomly. For scoring system, refer to 8.A.</li>
                        <li>The team with the highest number of points is the winner of the match. In case of a tie, a penalty shootout will be held, details of which will be announced at the time of the event.</li>
                        <li>The field will be subjected to changes after the elimination rounds. The field design for final rounds will be revealed on the website before the final rounds.</li>
                        <li>The teams will be short-listed for final rounds on the basis of their score in the elimination round.</li>
                        <li>Elimination round:<br> I. Goal from inner circle: +20 points.<br> II. Goal from between inner circle and half line: +40 points<br> III. Goal from beyond half line: +60 points.<br> IV. Negative points for Yellow Cards and fouls.<br> V. Disqualification on Red Card.<br> Note: This may change at the time of the event</li>
                        <li>Final round: To be declared after elimination round.</li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>A yellow card will be flashed on each hand touch after the first one. A maximum of three such cards will add up to a red card i.e. Disqualification.</li>
                        <li>Losing teams may re-register to participate again in the elimination round. Registration fees would be Rs.150/- for this case. (Organizers reserve the rights to close the re-registrations at any point of time).</li>
                        <li>Organizers have the authority to disqualify any team for misconduct or disorderly behaviour. This team would not be allowed to re-register.</li>
                        <li>Organizers reserve the rights to make changes to the field design at any time without prior notification. Participants are requested to refer to the website regularly for any such changes.</li>
                        <li>Organizers' decisions will be final and binding to all.</li>
                    </ul>
					<center>
					<button type="button" class="btn btn-default"  onclick="window.open('register.php')">Register Now</button>
					</center>
                </div>
                <div class="modal-footer">
                    
                </div>
        </div>
    </div>
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">PAPER PRESENTATION</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>It is always said that knowledge is not something to be confined to oneself, but something to be shared as much as possible. One of the most popular events of Credenz, Paper Presentation gives a platform to undergraduate/ postgraduate students to present technical papers. So, here is your chance to challenge your own skills of research and put forth your ideas on technology in front of an experienced panel of judges.</li>
                        <li>
                            Registration Fee:
                            <ul>
                                <li>Rs.200 per team for Non-IEEE members</li>
                                <li>Rs.180 for IEEE members.</li>
                            </ul>
                        </li>
                    </ul>
                    <h4>Rules:</h4>
                    <ul>
                        <li>A team of maximum three candidates pursuing undergraduate / postgraduate program are allowed.</li>
                        <li>All the participants should bring valid I-cards while coming for the contest. No one without I-card will be allowed for the contest and the team will be disqualified.</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>Only soft copy i.e. a .pdf file, of the paper and abstract should be submitted. The paper should not exceed more than 6 pages.</li>
                        <li>Soft copy of the technical paper and the abstract should be mailed to paper.credenz17@gmail.com.</li>
                        <li>The paper must strictly adhere to the IEEE format.</li>
                        <li>Authors will get 15 minutes to deliver a presentation on their topic followed by a question - answer session.</li>
                        <li>The presentation should be in power point format (.ppt or .pptx).</li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>Oratory and Presentation skills will be of prime importance.</li>
                        <li>Relevance of the content in context with the chosen topic.</li>
                        <li>Judge's decision will be final and binding on all.</li>
                    </ul>
					 <center><button type="button" class="btn btn-default"  onclick="window.open('register.php')">Register Now</button></center>
                </div>
                <div class="modal-footer">
                   
                </div>
        </div>
    </div>
		
	<div id="CONTACT"></div>
	<!-- CONNECT SECTION -->
	<section class="connect">
		<div class="sediment-layers1and2">
			<div class="seaweed-with-root"><div></div></div>
			
			<h2 class="connect">CONNECT WITH US</h2>
			
			<ul class="connect-buttons">
				<li class="facebook"><a href="https://www.facebook.com/pisb.credenz" target="_blank"></a></li>
				<li class="twitter"><a href="https://twitter.com/pisbcredenz" target="_blank"></a></li>
				<li class="email"><a href="mailto:contact@credenz.info" target="_blank"></a></li>
			</ul>
			<div class="address">
				<div class="myBtn_multi" ><a href="#PP"> <div class="icon location"></div></a></div>
				<p><strong>Pune Institute Of Computer Technology<br>27,Pune-Satara Road<br> Dhankawadi,Pune-411043<br><!-- <a href="tel:619-800-3298">619-800-3298</a> --></strong></p>
			</div>
		</div>
		<div class="sediment-layer3">
			<h2 class="message">SEND US A MESSAGE</h2>
			<form id="connectForm" class="clearafter" method="post">
				<div class="leftside">
					<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
					<input type="text" id="name" name="name" placeholder="Name"><br>
					<input type="text" id="email" name="email" placeholder="Email"><br>
					<input type="text" id="phone" name="phone" placeholder="Telephone">
				</div>
				<div class="rightside">
					<textarea id="message" name="message" placeholder="Message"></textarea><br>
					<button class="orange with-blue-text">SEND MESSAGE</button>
				</div>
			</form>
		</div>
	</section>
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
           <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">PICT Map</h4>
                </div>
                <div class="modal-body">
                  <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBKLpkW51IVgpo9rVQLrVskGb5KmcniTvQ'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>  <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=52dbb9c66dd7206fe11baed4797ed3618a620bff'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(18.4575421,73.85083359999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(18.4575421,73.85083359999999)});infowindow = new google.maps.InfoWindow({content:'<strong>Credenz\'17</strong><br>Pune Institite Of Computer Technology, Pune<br>411043 Pune<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>	   
				   
                </div>
                <div class="modal-footer">
                   
                </div>
        </div>
    </div>
	<!-- FOOTER -->
	<footer>&copy; 2017 PISB. All rights reserved.</footer>	
</div>

<!-- DESKTOP MENU -->
<div class="menu-desktop open">
	<ul>
		<li class="about"><a href="index.php">HOME</a></li>
		<li class="about"><a href="about.php">ABOUT</a></li>
		<li class="showroom"><a href="events.php">EVENTS</a></li>
		<li class="services"><a href="workshop.php">WORKSHOPS</a></li>
		<li class="contact"><a href="hackathon.php">HACKATHON</a></li>
		<li class="contact"><a href="index.php#CONTACT">CONTACT</a></li>
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
</div>
<script>
        // Get the modal

        var modalparent = document.getElementsByClassName("modal_multi");

        // Get the button that opens the modal

        var modal_btn_multi = document.getElementsByClassName("myBtn_multi");

        // Get the <span> element that closes the modal
        var span_close_multi = document.getElementsByClassName("close_multi");

        // When the user clicks the button, open the modal
        function setDataIndex() {

            for (i = 0; i < modal_btn_multi.length; i++)
            {
                modal_btn_multi[i].setAttribute('data-index', i);
                modalparent[i].setAttribute('data-index', i);
                span_close_multi[i].setAttribute('data-index', i);
            }
        }



        for (i = 0; i < modal_btn_multi.length; i++)
        {
            modal_btn_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "block";
            };

            // When the user clicks on <span> (x), close the modal
            span_close_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "none";
            };

        }

        window.onload = function() {

            setDataIndex();
        };

        window.onclick = function(event) {
            if (event.target === modalparent[event.target.getAttribute('data-index')]) {
                modalparent[event.target.getAttribute('data-index')].style.display = "none";
            }

            // OLD CODE
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };

//XXXXXXXXXXXXXXXXXXXXXXX    Modified old code    XXXXXXXXXXXXXXXXXXXXXXXXXX

// Get the modal

        var modal = document.getElementById('myModal');

// Get the button that opens the modal
        var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
        var span = modal.getElementsByClassName("close")[0]; // Modified by dsones uk

// When the user clicks on the button, open the modal

        btn.onclick = function() {

            modal.style.display = "block";
        }

// When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }



    </script>
<script type="text/javascript" src="js/menus.js"></script>
<script type="text/javascript" src="js/home.js"></script>
</body>

</html>