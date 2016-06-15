<?php require_once("connection.php"); ?>
    <?php
    
    $membership_content=mysqli_real_escape_string($link, $_POST['membership_content']);
     //$content=mysqli_real_escape_string($link, $_POST['content']);   
    $sql= "UPDATE membership SET membership_content= '$membership_content' WHERE membership_id=1";
    
    $result=$link->query($sql);



if ($result) {
		// Success
		// redirect_to("somepage.php");
		echo "Success!";
		header("Location: membership_admin.php");
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}

mysqli_close($link);

?>
    