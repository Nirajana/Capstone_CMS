<?php include 'connection.php';?>
<div class="container">
				<div class = "row">
	                <div class = "col-md-3">
						<div class = "mission">
							<div class = "img-responsive">
								<img src = "img/Galt-Horticulture-Banner.jpg" alt = "GHS Banner">
							</div>
						</div>
						</div>
						<div class="col-md-9">
						    <div class = "upload">
					            <div class = "text-center">
					            	 
					            	<div class="h2">Upload Image</div>
					            	
					            	</div>
					            
                                    <form action="insert_image.php" enctype="multipart/form-data" method="post">
                                    	 <fieldset>
                                    	<legend>Choose an image:</legend>
                                    		<center>
                                    	    <input type="file" name="image" id="image" />
                                    	   
                                                <br><br>
                                                        <input type="submit" value="Upload" name="upload" class="btn btn-success">
                                                   </center>  
  </fieldset> 
</form>
 
</div>
</div>
</div>
</div>
</div>


<?php include 'footer.php';?>

 <?php
					               if(isset($_GET['msg']))
					               {
					               	$message=$_GET['msg'];
					               	echo "<script language='javascript' type='text/javascript'>";
                                    echo "alert('$message');";
                                    echo "</script>";
					               }
					               ?>