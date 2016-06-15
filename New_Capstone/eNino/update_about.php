<?php require_once("connection.php"); ?>
    <?php
    
    $content=mysqli_real_escape_string($link, $_POST['content']);
     //$content=mysqli_real_escape_string($link, $_POST['content']);   
    $sql= "UPDATE about SET content= '$content' WHERE about_id=1";
    //$sql = "UPDATE mission SET content='$content' WHERE mission_id=2";
    $result=$link->query($sql);



if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
		header("Location:about_admin.php");
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}

mysqli_close($link);

?>
    