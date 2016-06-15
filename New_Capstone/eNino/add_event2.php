<?php require_once("connection.php"); ?>
    <?php
    
    $date=mysqli_real_escape_string($link, $_POST['date']);
    $topic= mysqli_real_escape_string($link, $_POST['topic']);
    $speaker= mysqli_real_escape_string($link, $_POST['speaker']);
    $cost= mysqli_real_escape_string($link, $_POST['cost']);
    $location= mysqli_real_escape_string($link, $_POST['location']);
    $time= mysqli_real_escape_string($link, $_POST['time']);
       
    $sql= "INSERT INTO events (";
    $sql.="date, topic,speaker,cost,location,time";
    $sql.= ") VALUES (";
    $sql.=  "'$date', '$topic','$speaker','$cost','$location','$time'";
    $sql.=   ")";
$result=$link->query($sql);

if ($result) {
		// Success
		// redirect_to("somepage.php")
		
    	header("Location:events_admin.php?msg=Event Added Successfully!");
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}

mysqli_close($link);

?>