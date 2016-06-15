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
							
  
		<div class = "h2">Add An Event</div>
		<form action="add_event2.php" method="post">
		  <p>Date:
		    <input type="date" name="date" value="" required autofocus/>
		  </p>
		  
		  <p>Topic:
		    <input type="text" name="topic" value="" required/>
		  </p>
		  
		    <p>Speaker:
		    <input type="text" name="speaker" value="" />
		  </p>
		  
		  <p>Cost:
		    <input type="text" name="cost" value="" placeholder="$00.00"/>
		  </p>
		  
		  <p>Location:
		    <input type="text" name="location" value="" />
		  </p>
		  
		  <p>Time:
		    <input type="text" name="time" value="" placeholder="00:00-00:00"/>
		  </p>
		  
		   
		   
		 
		  <input type="submit" name="submit" value="Add Event" class="btn btn-success" />
		</form>
		<br />
		<button class="btn btn-success"><a href="events_admin.php" >Cancel</a></button>
	
		</div>
		</div>
		</div>
		
		<?php include 'footer.php';?>
	
