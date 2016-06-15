
    <?php require_once("connection.php"); 
    
    if(isset($_GET['id']))
    {
        $event_id=$_GET['id'];
        $sql="DELETE FROM events WHERE event_id='$event_id'";
        $result=$link->query($sql);
        
        if ($result) {
		// Success
		// redirect_to("somepage.php")
		
    	 header("Location:events_admin.php?msg=Event Deleted Successfully!");
    	 
	} else {
		// Failure
		// $message = "Subject creation failed";
		die("Database query failed. " . mysqli_error($connection));
	}
	
        
    }
    

?>
    
</body>
</html>