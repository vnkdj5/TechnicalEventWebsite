<?php
	include_once("query.php");
?>
<!DOCTYPE html>
<html>


<head>
	<title>Credenz | Amplifying Ideas</title>
	<meta name="keywords" content="" />
	<link rel="icon" href="img/fevicon.png" type="image/png" >
<link rel="shortcut icon" href="img/fevicon.png" > 
	<meta charset="utf-8">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	
	
	<link rel="stylesheet" type="text/css" href="css/inner.css">
	<link rel="stylesheet" type="text/css" href="css/mobile-menu.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
	<style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1001; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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


    </style>
	
	
	<script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/libs/js-modernizr.min.js"></script>
	<script type="text/javascript" src="js/common.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47781007-1', 'creative-mob.com');
	  ga('send', 'pageview');

	</script>
</head>
<body class="webdesign">
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
		<!-- TOP SECTION -->
		<section id="top" class="top bg-radial-blue-left">
			<div class="inner">
				
				<h2 style="text-align:center;color:white;">Events</h2>
				
			</div>
		</section>
		
		
		<div id="EV"></div>
		<!-- UX / UI SECTION -->
		<section id="uxui" class="uxui bg-radial-black-left">
			<div class="inner">
				
				<ul class="services-buttons">
					<li>
					<div class="myBtn_multi" >
						<div id="CLASH"></div>
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#f14852" class="img-responsive imgclass" src="Logos/clash.png"></div>
						<a class="button red inverted twolines" href="#EV">C/C++ CLASH</a>
						
						</div>
						<!-- The Modal -->
    
					</li>
					<li>
					<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#ffb56a" class="img-responsive imgclass" src="Logos/web.png"></div>
						<a class="button peach inverted twolines" href="#EV">WEB WAEVER</a>
						</div>
					</li>
					<li>
						<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#78c6e1" class="img-responsive imgclass" src="Logos/cretronix.png"></div>
						<a class="button blue inverted twolines" href="#EV" style="padding-top: 12px;">CRETRONIX<br>&nbsp;</a>
						</div>
					</li>
					<li>
						<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#f14852" class="img-responsive imgclass" src="Logos/croodle.png"></div>
												
						<a class="button red inverted twolines" href="#EV" style="padding-top: 12px;">Croodle<br>&nbsp;</a>
						</div>		
					</li>
					<li>
					<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#ffb56a" class="img-responsive imgclass" src="Logos/madtalks.png"></div>
						
						<a class="button peach inverted twolines" href="#EV">MAD<br>TALKS</a>
						</div>
					</li>
					<li>
						<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#78c6e1" class="img-responsive imgclass" src="Logos/paper.png"></div>
						
						<a class="button blue inverted twolines" href="#EV">PAPER<br>PRESENTATION</a>
						</div>
					</li>
					<li>
						<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#f14852" class="img-responsive imgclass" src="Logos/revb.png"></div>
						
						<a class="button red inverted twolines" href="#EV">REVERSE<br>CODING</a>
						</div>
						
					</li>
					<li>
					<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#ffb56a" class="img-responsive imgclass" src="Logos/roboliga.png"></div>
						
						<a class="button peach inverted twolines" href="#EV" style="padding-top: 12px;">ROBOLIGA<br>&nbsp;</a>
						</div>
					</li>
					<li>
					<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#78c6e1" class="img-responsive imgclass" src="Logos/nth.png"></div>
						
						<a class="button blue inverted twolines" href="#EV">NETWORK<br>T.HUNT</a>
						
					</li>
					<li>
					<div class="myBtn_multi" >
						<div class="perdy-icon"> <img id="img2" class="imgc" style="width:160px;height:160px; border-radius: 50%;background-color:#f14852" class="img-responsive imgclass" src="Logos/softwae.png"></div>
						
						<a class="button red inverted twolines" href="#EV">SOFTWARE<br>DEVELOPMENT</a>
						</div>
					</li>
				</ul>
				
			</div>
		</section>
		<!-----------------------------------------------------------------------
		-----MODAL DATA ------------------------------------------------------>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="window.open('register.php')" data-dismiss="modal">Register Now</button>
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
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')" class="btn btn-default" data-dismiss="modal">Register Now</button>
                </div>
        </div>
    </div>
	
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">CRETONIX</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>An Electronics based competition which tests the participants' theoretical & practical knowledge. (all students from FE to BE.)
                        </li>
                        <li>Registration fees:
                            <ul>
                                <li>Rs.150 for Non-IEEE member</li>
                                <li>Rs. 120 for IEEE member
                                </li>

                            </ul>
                        </li>
                    </ul>
                    <h4>Rules:</h4>
                    <ul>
                        <li>Each team can consist of maximum 3 members.</li>
                        <li>Electronic gadgets are not allowed.</li>
                        <li>All the participants should bring receipt and valid I-cards while coming for the contest. No one without I-card will be allowed for the contest and the team will be disqualified.</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>Junior level:
                            <ol>
                                <li>1st round:<br> Section 1: Single choice MCQ's.<br> Section 2: Crossword</li>
                                <li>2nd round:<br> The participants will be given a circuit with bugs on a breadboard or a general-purpose PCB along with input and expected output conditions. They have to find the bugs and debug it to obtain the correct expected output.</li>
                                <li>3rd round: Circuit Designing and implementation<br> The participants will be given a problem statement and they are supposed to implement the solution with the help of hardware. They will also be provided with input-output data, for which they have to build the required circuit.</li>
                            </ol>
                        </li>
                        <li>Senior level:
                            <ol>
                                <li>1st round:<br> Section 1: Single choice MCQ's.<br> Section 2: Crossword</li>
                                <li>2nd round: HARDWARE/SOFTWARE DEBUGGING<br> The participants will be given a problem statement for which they are supposed to implement the solution for HARDWARE/SOFTWARE DEBUGGING. They will also be provided with input-output conditions. Participants will have to write a code for SOFTWARES.</li>
                                <li>3rd round: Circuit Designing and implementation<br> The participants will be given a problem statement for which they are supposed to implement the solution with the help of hardware/software (Proteus).They will also be provided with input-output waveforms for which they have to build the desired circuit.</li>
                            </ol>
                        </li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>It will test your basic knowledge of electronics and practical implementation.</li>
                        <li>Total Shortlisted teams for 2nd round: 12<br> Total Shortlisted teams for 3rd round: 6</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')" class="btn btn-default" data-dismiss="modal">Register Now</button>
                </div>
        </div>
    </div>
	
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">CROODLE</h4>
                </div>
                <div class="modal-body">
                    <h4>Coming Soon...</h4>
                    <!--
                    <h4>Introduction:</h4>
                    <ul>
                        
                    </ul>
                    <h4>Rules:</h4>
                    <ul>

                    </ul>
                    <h4>Structure:</h4>
                    <ul>

                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>

                    </ul>
                    -->
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')" class="btn btn-default" data-dismiss="modal">Register Now</button>
                </div>
			
			
			
			
        </div>
    </div>
	
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">MADTALKS</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>Ever had an idea or a thought deemed absurd by society? Here at MAD talks, we appreciate your crazy ideas.</li>
                        <li>MAD talks gives you a platform to put forward your ingenious thoughts and let your imagination soar. It is a battle of grey cells and wit where insanity is sane.</li>
                        <li>Participate and be a part of an astounding event – My Amazing Discovery. Give a presentation on what your idea is, why it is out-of-the-box and not easy to implement, yet why you think it is sheer brilliance! A platform to prove technology starts with MAD people and their MAD ideas!</li>
                        <li>Registration Fee:
                            <ul>
                                <li>Rs150 for NON-IEEE member</li>
                                <li>Rs120 for IEEE members</li>
                            </ul>
                    </ul>
                    <h4>Rules:</h4>
                    <ul>
                        <li>A team of maximum 3 candidates pursuing undergraduate/postgraduate/junior college course are allowed to participate.</li>
                        <li>All the participants should bring their receipts and college I-cards. Those without I-cards will not be permitted and their team will be disqualified.</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>Proposed concept should be innovative and original.</li>
                        <li>A soft copy of your abstract (about 250-300 words) should be mailed to madtalks.credenz17@gmail.com</li>
                        <li>The soft copy must be in *.pdf format.</li>
                        <li>Summaries will be evaluated by judges and 10 (+3 waiting) entries will be qualified for the next round.</li>
                        <li>The finalists have to prepare a presentation of about 6-7 minutes (maximum time limit) that will be presented during Credenz '17 before a panel of judges.</li>
                        <li>The presentation will be followed by a question - answer session based on the proposed idea.</li>
                        <li>Teams will be evaluated based on their performance in the Presentation and Q/A round.</li>
                        <li>NOTE: LCD projector and Laptop will be provided.</li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>Originality and usability of the idea/plan (prime importance).</li>
                        <li>The hypothesis of the plan is extremely essential and should be scientifically correct.</li>
                        <li>Oratory and presentation skills of the participants.</li>
                        <li>The judges' decision will be final and binding on all.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')" class="btn btn-default" data-dismiss="modal">Register Now</button>
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
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')"  class="btn btn-default" data-dismiss="modal">Register Now</button>
                </div>
        </div>
    </div>
	
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">REVERSE CODING</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>
                            Given some sequence of steps, writing a code and getting the output is pretty easy! Want to try a reverse way? If given some input and output, can you find the logic and sequence? Focusing less on concepts, all you need is your logical skill to decipher this "Black Box". Reverse Coding is a logical event which tests your basic logical skills along with pattern analysis and recognition as you play with the code. So, get ready to reverse code in Credenz '17!
                        </li>
                        <li>Registration Fee:
                            <ul>
                                <li>Rs.80 for Non-IEEE members.</li>
                                <li>Rs.60 for IEEE members.</li>
                            </ul>
                        </li>
                    </ul>
                    <h4>Rules:</h4>
                    <ul>
                        <li>A maximum of 2 candidates pursuing undergraduate program at their institution are allowed per team.</li>
                        <li>All the participants should bring their receipt and valid I-cards while coming for the contest. A participant without an I-card will NOT be allowed for the contest and the respective team will be disqualified.</li>
                        <li>Marking scheme will be declared on spot.</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>There are two rounds:
                            <ol>
                                <li>Logic Round.</li>
                                <li>Decipher and Code Round.</li>
                            </ol>
                        </li>
                        <li>Logic round consists of Logical questions which can be solved by coding.</li>
                        <li>In the Decipher and coding round, the participants have to write the code for pattern that maps input to output.</li>
                        <li>The event will be conducted in two categories, Junior level(First and Second year) and Senior level(Third and Fourth year).</li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>The competition will test the participants' logical and coding skills.</li>
                        <li>Time and cost efficiency of the code will be tested in round 2.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')" class="btn btn-default" data-dismiss="modal">Register Now</button>
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
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')" class="btn btn-default" data-dismiss="modal">Register Now</button>
                </div>
        </div>
    </div>
	
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">NTH</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>Hook onto Network Treasure Hunt, an online treasure hunt where participants follow clues and visit different websites to solve riddles. Solve a series of strategic clues to complete the track and win prizes. Decrypt rules, follow the trail and race to the finish to win exciting goodies! This is your chance to challenge your technical skills. So go on, login and be Sherlock for a day!</li>
                        <li>Registration is free</li>
                    </ul>
                    <h4>Rules:</h4>
                    <ul>
                        <li>To start your hunt, go to www.nth.credenz.info</li>
                        <li>Register to get your NTH username.</li>
                        <li>You will be directed to the starting page of the hunt.</li>
                        <li>To advance, crack the question, and put the answer in the URL:<br> FROM
                            <br> http://www.nth.credenz.info/question.php
                            <br> TO
                            <br> http://www.nth.credenz.info/answer.php</li>
                        <li>You need to use Google for many of them to solve. Of course, that is where you search for everything you don't know.</li>
                        <li>Check the source of the pages, you'll get some important clues for hunting further. The titles may also give you clues.</li>
                        <li>Most importantly, do not forget to have fun!</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>There will be two Network Treasure Hunts, three and one week respectively before Credenz '17.</li>
                        <li>Both the Treasure Hunts are independent. There will be separate winners for both the Treasure Hunts.</li>
                        <li>It consists of 30 to 50 levels each.</li>
                        <li>To go to the next level, you need to crack the present level in any possible way.</li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>The person who has cracked the highest number of levels wins.</li>
                        <li>NOTE: In case of a tie, the one who has reached first on that level is the winner.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')" class="btn btn-default" data-dismiss="modal">Register Now</button>
                </div>
        </div>
    </div>
	
	<div  class="modal modal_multi">
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">SOFTWARE DEVELOPMENT</h4>
                </div>
                <div class="modal-body">
                    <h4>Introduction:</h4>
                    <ul>
                        <li>Software Development will be an Application Development Competition, android or desktop with no restriction on the choice of programming language used. You can use ANY existing programming language(s) to make your application. The application will be judged by experts in the software industry.</li>
                        <li>
                            Registration Fees:
                            <ul>
                                <li>Rs200 for Non-IEEE member</li>
                                <li>Rs160 for IEEE members.</li>
                            </ul>
                        </li>
                    </ul>
                    <h4>Rules:</h4>
                    <ul>
                        <li>Maximum of Three people in a team.</li>
                        <li>All the participants should bring receipt and valid I-cards while coming for the contest. A single team member without an I-card will result in the disqualification of the entire team.</li>
                    </ul>
                    <h4>Structure:</h4>
                    <ul>
                        <li>The juniors as well as the seniors group will have to send their draft of their software at softwaredevelopment.credenz17@gmail.com within three days of the release of the problem statement. The problem statement will be released 20 days prior to the competition on the official website of Credenz '17.</li>
                        <li>Software of the shortlisted candidates will be presented by them in the first round of the Software Development. Further the shortlisted candidates will go for the second round that is presentation round. The winners will be declared once all the applications have been reviewed.</li>
                    </ul>
                    <h4>Judging Criteria:</h4>
                    <ul>
                        <li>Criteria for Judging would consist of multiple parameters:
                            <ul>
                                <li>User Interface</li>
                                <li>User friendliness</li>
                                <li>Deployment Scenarios</li>
                                <li>Presentability</li>
                                <li>Scenario Adaptability</li>
                                <li>Feature Richness</li>
                            </ul>And a few more.</li>
                        <li>Scenario Adaptability: You might be asked to clarify the use of your application in certain scenarios, say What if this software needs to be used in a Library? Or on a Cruiser? Can you elaborate on how that can be accomplished? What if this needs to be deployed in Software Company's office? At a manager's desk?</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="window.open('register.php')" class="btn btn-default" data-dismiss="modal">Register Now</button>
                </div>
        </div>
    </div>
		
		
		<!--------------------------MODALS END----------
		FOOTER -->
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
		<div class="close-window"><img src="img\inner\resources\close-btn.png" />
		</div>
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
	<script type="text/javascript" src="js/inner.js"></script>
</body>