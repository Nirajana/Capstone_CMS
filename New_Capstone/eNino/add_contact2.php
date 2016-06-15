<?php require_once("connection.php"); ?>
    <?php
    
    $name=mysqli_real_escape_string($link, $_POST['name']);
    $designation= mysqli_real_escape_string($link, $_POST['designation']);
    $email= mysqli_real_escape_string($link, $_POST['email']);
    
    
    $sql= "INSERT INTO contact (";
    $sql.="name, designation, email";
    $sql.= ") VALUES (";
    $sql.=  "'$name', '$designation', '$email' ";
    $sql.=   ")";
$result=$link->query($sql);

if ($result) {
		// Success
		// redirect_to("somepage.php")
		
    	
    	header("Location:contact_admin.php?msg=Contact Added Successfully");
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}

mysqli_close($link);

?>