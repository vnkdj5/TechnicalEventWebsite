<?php
	include("private/conn.php");
	if(isset($_POST['send_message']))
	{
		$w_name = $_POST['w_name'];
		$w_email = $_POST['w_email'];
		//$w_phone = $_POST['w_phone'];
		$w_message = $_POST['w_message'];
		$insert_sug = $db->query("INSERT INTO suggestion VALUES('','$w_name','$w_email','','$w_message','1')");
	}
?>