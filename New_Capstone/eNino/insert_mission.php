<?php require_once("connection.php"); ?>
    <?php
    
    $mission_content=mysqli_real_escape_string($link, $_POST['mission_content']);
     //$content=mysqli_real_escape_string($link, $_POST['content']);   
    $sql= "UPDATE mission SET mission_content= '$mission_content' WHERE mission_id=1";
    //$sql = "UPDATE mission SET content='$content' WHERE mission_id=2";
    $result=$link->query($sql);



if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
		header("Location: index.php");
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}

mysqli_close($link);

?>
   