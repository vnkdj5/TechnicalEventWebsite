<?php	
	if(isset($_POST['delete_suggestion']))
	{
		$delete_suggestion = filter_var($_POST['delete_suggestion']);
		$delete_delete_suggestion = $db->query("DELETE FROM suggestion WHERE suggestion_id='$delete_suggestion'");
	}
?>