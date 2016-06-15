<?php require_once("connection.php"); ?>
    <?php
    
    if (isset($_POST['submit']))
    {
    $name=mysqli_real_escape_string($link, $_POST['name']);
    $designation=mysqli_real_escape_string($link, $_POST['designation']);
    $email=mysqli_real_escape_string($link, $_POST['email']);
    $contact_id=mysqli_real_escape_string($link, $_POST['contact_id']);
        
  $sql = "UPDATE contact SET name='$name', designation='$designation', email='$email' WHERE contact_id='$contact_id'";
    
$result=$link->query($sql);
/*UPDATE table_name
SET column1=value, column2=value2,...
WHERE some_column=some_value 
*/
if ($result) {
		// Success
		// redirect_to("somepage.php");
		 header("Location:contact_admin.php?msg=Contact Updated Successfully!");
	} else {
		// Failure
		// $message = "Subject update failed";
		die("Database query failed. " . mysqli_error($link));
	}
    }
?>