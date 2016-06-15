
    <?php require_once("connection.php"); 
    
    if(isset($_GET['id']))
    {
        $contact_id=$_GET['id'];
        $sql="DELETE FROM contact WHERE contact_id='$contact_id'";
        $result=$link->query($sql);
        
        if ($result) {
		// Success
		// redirect_to("somepage.php")
		
    	 
    	header("Location:contact_admin.php?msg=Contact Deleted Successfully");
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}
	
        
    }
    

?>
    
</body>
</html>