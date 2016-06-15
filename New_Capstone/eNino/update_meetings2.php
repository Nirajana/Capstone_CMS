<?php require_once("connection.php"); ?>
<div class="container">
				<div class = "row">
	                <div class = "col-md-3">
						<div class = "mission">
							<div class = "img-responsive">
								<img src = "img/Galt-Horticulture-Banner.jpg" alt = "GHS Banner">
							</div>
						</div>
					</div>
					
					<div class = "col-md-9">
                      	<div class = "update_events">
							<div class = "h2">Update Meetings</div>
        
									
    <?php
    if(isset($_GET['id']))
    {
        $meetings_id=$_GET['id'];
        $sql="SELECT * FROM meetings where meetings_id='$meetings_id' ";
$result=$link->query($sql);

if($result->num_rows>0){
    //output data of each row
    while($row=$result->fetch_assoc()){
    
    ?>
    
		<form action="update_meetings3.php" method="post">
		  <p>Date:
		    <input type="date" name="date" value="<?php echo ($row['date']); ?>" />
		  </p>
		  <p>Topic:
		    <input type="text" name="topic" value="<?php echo ($row['topic']); ?>" />
		  </p>
		  <p>Speaker:
		    <input type="text" name="speaker" value="<?php echo ($row['speaker']); ?>" />
		  </p>
		  
		  <input type="submit" name="submit" value="Save"  class="btn btn-success" />
		  <p>
		  <input type="hidden" name="meetings_id" value="<?php echo ($row['meetings_id']); ?>"/>
		  </p>
		</form>
		</div>
		</div>
		</div>
		</div>
		</div>
		<?php
    }
  }
}
?>

<?php include 'footer.php';?>
	
    
