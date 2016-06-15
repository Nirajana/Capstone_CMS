
 <?php require_once("connection.php"); ?>
 <?php session_start(); 

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
     $username=mysqli_real_escape_string($link, $_POST['username']);
    $password=hash ( "sha256", $_POST[password]);
    

    $sql= "INSERT INTO admin (";
    $sql.="username, password";
    $sql.= ") VALUES (";
    $sql.=  "'$username', '$password'";
    $sql.=   ")";
$result=$link->query($sql);
      
      
      if ($result) {
		// Success
		// redirect_to("somepage.php")
		
    	
    	header("Location:index.php?msg=Admin Added Successfully");
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}

mysqli_close($link);
}
?>
	

	