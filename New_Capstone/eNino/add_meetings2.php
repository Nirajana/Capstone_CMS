<?php require_once("connection.php"); ?>
    <?php
    
    $date=mysqli_real_escape_string($link, $_POST['date']);
    $topic= mysqli_real_escape_string($link, $_POST['topic']);
    $speaker= mysqli_real_escape_string($link, $_POST['speaker']);
    
       
    $sql= "INSERT INTO meetings (";
    $sql.="date, topic,speaker";
    $sql.= ") VALUES (";
    $sql.=  "'$date', '$topic','$speaker'";
    $sql.=   ")";
$result=$link->query($sql);

if ($result) {
		// Success
		// redirect_to("somepage.php")
		
    	header("Location:meetings_admin.php?msg=Meetings Added Successfully!");
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}

mysqli_close($link);

?>