<?php	
	if(isset($_POST['delete_participant']))
	{
		$registration_id = filter_var($_POST['delete_participant']);
		$delete_registration = $db->query("DELETE FROM registrations WHERE registration_id='$registration_id'");
	}
?>