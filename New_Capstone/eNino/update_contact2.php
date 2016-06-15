<?php require_once("connection.php"); ?>
<title>Update Contacts</title>
        
<div class="container">
				<div class = "row">
	                <div class = "col-md-3">
						<div class = "mission">
							<div class = "img-responsive">
								<img src = "img/Galt-Horticulture-Banner.jpg" alt = "GHS Banner">
							</div>
						</div>
					</div>
					<div class = "add_event">

    <div class = "h2">Update Contacts</div>
    <?php
    if(isset($_GET['id']))
    {
        $contact_id=$_GET['id'];
        $sql="SELECT * FROM contact where contact_id='$contact_id' ";
$result=$link->query($sql);

if($result->num_rows>0){
    //output data of each row
    while($row=$result->fetch_assoc()){
    
    ?>
    
		<form action="update_contact3.php" method="post">
		  <p>Name:
		    <input type="text" name="name" value="<?php echo ($row['name']); ?>" />
		  </p>
		  <p>Designation:
		    <input type="text" name="designation" value="<?php echo ($row['designation']); ?>" />
		  </p>
		  <p>Email:
		    <input type="email" name="email" value="<?php echo ($row['email']); ?>" />
		  </p>
		  
		  <input type="submit" name="submit" value="Save" class="btn btn-success"/>
		  <p>
		  <input type="hidden" name="contact_id" value="<?php echo ($row['contact_id']); ?>"/>
		  </p>
		</form>
		<?php
    }
  }
}
?>
	</div>
    </div>
    </div>
    
    <?php include 'footer.php';?>
