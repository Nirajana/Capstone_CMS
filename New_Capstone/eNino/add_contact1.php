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
  
		<div class ="h2">Insert new contact</div>
		<form action="add_contact2.php" method="post">
			
		  <p>Name:
		    <input type="text" name="name" value="" required autofocus/>
		  </p>
		  
		  <p>Designation:
		    <input type="text" name="designation" value="" required/>
		  </p>
		  
		   <p>Email:
		   
		    <input type="email" name="email" value="" required placeholder="example@galthort.com"/>
		  </p>
		 
		  <input type="submit" name="submit" value="Add" class="btn btn-success" />
		</form>
		<br />
		<button class="btn btn-success"><a href="contact_admin.php" >Cancel</a></button>
	
		</div>
		</div>
		</div>
		</div>
		
	
	<?php include 'footer.php';?>