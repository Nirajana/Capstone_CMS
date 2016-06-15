<?php include 'connection2.php';?>
				
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
					<div class="slider">
						<div class="img-responsive">
							<ul class="bxslider">				
								<li><img src="img/cottage_1.jpg" alt=""/></li>								
								<li><img src="img/garden_view.jpg" alt=""/></li>	
								<li><img src="img/garden_bench.jpg" alt=""/></li>
							</ul>
							</div>	
						</div>
					</div>
				</div>
	</div>
			
 
	
	<div class="container">
		<div class="row">
			<div class = "col-md-3">
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
					<div id="mission">
                        <?php
                          
                            $sql="SELECT mission_content FROM mission";
                            $result=$link->query($sql);
                            
                            if($result->num_rows>0){
                                //output data of each row
                                while($row=$result->fetch_assoc()){
                                    echo "<p>{$row['mission_content']}</p>";
                                    
                                    }
                            }
                            else 
                                {
                                echo "0 results";
                                }
                            ?>
                    </div>
                    
				</div>
				
					
				
			</div>
		</div>
	</div>

<div class="container">
		<div class="row">
			<div class="box">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<div class = "h4">Dream Gardens</div>					
							<img src="img/dg.jpg" class="img-circle" alt="dream gardens" width="304" height="236">						
						<p>Information about Dream Gardens here</p>
						<div class="ficon">
							<a href="dreams_garden.php" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
						<div class = "h4">Bus Trips</div>
							<img src="img/bus trips.jpg" class="img-circle" alt="bus trips" width="304" height="236">
						<p>Information about Bus Trips here</p>
						<div class="ficon">
							<a href="bus_trip.php" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
						<div class = "h4">Meetings</div>
						<img src="img/meetings.jpg" class="img-circle" alt="meetings" width="304" height="236">
						<p>Information about Meetings here</p>
						<div class="ficon">
							<a href="meetings.php" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
</div>

	
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<div class="h2">Galleries</div>
				</div>
				<hr>
			</div>
		</div>
	</div>
	
	<div class="container" align = "center">
		<div class = "row">
			<div class = "col-md-4">
				<div class = "img-responsive">
					<img src="img/img1.JPG" alt="img1">
				</div>
			</div>
			<div class = "col-md-4">
				<div class = "img-responsive">
					<img src="img/DSC_6999.JPG" alt="img2">
				</div>
			</div>
			<div class = "col-md-4">
				<div class = "img-responsive">
					<img src = "img/DSC_6911.JPG" alt="img3">
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class = "container" align = "center">
	 	<div class = "row">
	 		<div class = "col-md-4">
	 			<div class = "img-responsive">
	 				<img src="img/DSC_1353.JPG" alt="img4">	
	 			</div>
	 		</div>
	 		<div class = "col-md-4">
	 			<div class = "img-responsive">
	 				<img src="img/DSC_1217.JPG" alt="img5">	
	 			</div>
	 		</div>
	 		<div class = "col-md-4">
	 			<div class = "img-responsive">
	 				<img src="img/1.JPG" alt="img6">	
	 			</div>
	 		</div>
	 	</div>
	 </div>
	<br>
	
	<div class = "container" align = "center">
		<div class="ficon">
			<a href="gallery_user.php" class="btn btn-default" role="button">View More Images</a>
		</div>
	</div>
	

<?php include 'footer.php';?>
	
	   
		