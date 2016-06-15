<?php require_once("connection.php"); ?>
    <?php
    
    if (isset($_POST['submit']))
    {
    $date=mysqli_real_escape_string($link, $_POST['date']);
    $topic=mysqli_real_escape_string($link, $_POST['topic']);
    $speaker=mysqli_real_escape_string($link, $_POST['speaker']);
    $meetings_id=mysqli_real_escape_string($link, $_POST['meetings_id']);
        
  $sql = "UPDATE meetings SET date='$date', topic='$topic', speaker='$speaker' WHERE meetings_id='$meetings_id'";
    
$result=$link->query($sql);
/*UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value 
*/
if ($result) {
		// Success
		// redirect_to("somepage.php");
		 header("Location:meetings_admin.php?msg=Meeting Updated Successfully!");
	} else {
		// Failure
		// $message = "Subject update failed";
		die("Database query failed. " . mysqli_error($link));
	}
    }
?>