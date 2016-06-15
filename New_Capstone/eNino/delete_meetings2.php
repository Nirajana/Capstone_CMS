
    <?php require_once("connection.php"); 
    
    if(isset($_GET['id']))
    {
        $meetings_id=$_GET['id'];
        $sql="DELETE FROM meetings WHERE meetings_id='$meetings_id'";
        $result=$link->query($sql);
        
        if ($result) {
		// Success
		// redirect_to("somepage.php")
		
    	 header("Location:meetings_admin.php?msg=Meetings Deleted Successfully!");
    	 
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}
	
        
    }
    

?>
    
</body>
</html>