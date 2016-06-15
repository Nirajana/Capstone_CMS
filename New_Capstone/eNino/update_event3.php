<?php require_once("connection.php"); ?>
    <?php
    
    if (isset($_POST['submit']))
    {
    $date=mysqli_real_escape_string($link, $_POST['date']);
    $topic=mysqli_real_escape_string($link, $_POST['topic']);
    $speaker=mysqli_real_escape_string($link, $_POST['speaker']);
    $cost=mysqli_real_escape_string($link, $_POST['cost']);
    $location=mysqli_real_escape_string($link, $_POST['location']);
    $time=mysqli_real_escape_string($link, $_POST['time']);
    $event_id=mysqli_real_escape_string($link, $_POST['event_id']);
        
  $sql = "UPDATE events SET date='$date', topic='$topic', speaker='$speaker', cost='$cost', location='$location',
            time='$time' WHERE event_id='$event_id'";
    
$result=$link->query($sql);
/*UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value 
*/
if ($result) {
		// Success
		// redirect_to("somepage.php");
		 header("Location:events_admin.php?msg=Event Updated Successfully!");
	} else {
		// Failure
		// $message = "Subject update failed";
		die("Database query failed. " . mysqli_error($link));
	}
    }
?>