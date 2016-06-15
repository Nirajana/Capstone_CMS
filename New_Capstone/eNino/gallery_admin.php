<?php include 'connection.php';?>
<div class="container">
				<div class = "row">
	                <div class = "col-md-3">
						<div class = "mission">
							<div class = "img-responsive">
								<img src = "img/Galt-Horticulture-Banner.jpg" alt = "GHS Banner">
							</div>
						</div>
					
					<br>
					<div class = "quote">
					<center>Quotes:</center> <br>
					
					<?php
                          
                            $sql="SELECT quotation, quotation_author FROM quotation ORDER BY RAND() LIMIT 1";
                            $result=$link->query($sql);
                            
                            if($result->num_rows>0){
                                //output data of each row
                                while($row=$result->fetch_assoc()){
                                    echo "<p><q>{$row['quotation']}</q></p>-{$row['quotation_author']}";
                                    
                                    }
                            }
                            else 
                                {
                                echo "0 results";
                                }
                            ?>
				</div>
			</div>
					
				

			<div class="col-md-9">
				<div class="text-center">
					<div class="h2">Gallery</div>
				</div>
		
	
	

	 		
	 					
	 		
	 	
	 	 <?php
                          
                            $sql="SELECT image_path FROM gallery";
                            $result=$link->query($sql);
                            
                            if($result->num_rows>0){
                                //output data of each row
                                while($row=$result->fetch_assoc()){
                                    echo "	<div class = 'col-md-4'><div class = 'img-responsive'><img src='{$row['image_path']}'>  </div></div>";
                                   
                                    
                                    }
                            }
                            else 
                                {
                                echo "0 results";
                                }
                            ?>
                            	<br>
                            		</div>
                            			</div>
                            			<div class="ficon" align = "center">
							<a href="upload.php" class="btn btn-default" role="button">Upload</a>
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
	 