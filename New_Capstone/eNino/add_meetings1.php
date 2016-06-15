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
						<div class = "add_event">
		<div class ="h2">Add Meeting</div>
		<form action="add_meetings2.php" method="post">
		  <p>Date:
		    <input type="date" name="date" value="" required/>
		  </p>
		  
		  <p>Topic:
		    <input type="text" name="topic" value="" required />
		  </p>
		  
		    <p>Speaker:
		    <input type="text" name="speaker" value="" required />
		  </p>
		  
		  <input type="submit" name="submit" value="Add Meeting" class="btn btn-success"/>
		</form>
		<br />
		<th><button class="btn btn-success"><a href="meetings_admin.php" >Cancel</a></button></th>
	</div>
	</div>
	</div>
	</div><?php include 'footer.php';?>
	