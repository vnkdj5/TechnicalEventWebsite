<?php
	include_once("query.php");
?>
<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" id="viewport" content="target-densitydpi=high-dpi,initial-scale=1.0,user-scalable=no" />
    <title>Document Title</title>

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
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
    </style>
</head>
<body>

    <h2>Modal Example</h2>

    <!-- Trigger/Open The Modal -->
    <button class="myBtn_multi">C CLASH</button>
    <button class="myBtn_multi">WEB WEAVER</button>
	 <button class="myBtn_multi">WEB s</button>

    <!-- The Modal -->
    <div class="modal modal_multi">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close close_multi">×</span>
           <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">CLASH</h4>
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
                    
                </div>

        </div>

    </div>

    <!-- The Modal -->
    <div  class="modal modal_multi">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <p>web weaver</p>
        </div>

    </div>
	 <div class="modal modal_multi">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close close_multi">×</span>
            <p>C CLdddd..</p>
        </div>

    </div>
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal --- OLD</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">x</span>
            <p>Some text in the Modal. OLD.</p>
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

</body>
</html>