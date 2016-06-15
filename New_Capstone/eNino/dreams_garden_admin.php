<?php require_once("connection.php"); ?>

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
					
					<div class = "col-md-9">
 
		<div id="poster" align="center">
    		<div class = "h2">Dream Gardens 2016</div>
  				<embed src="pdf/Poster_DREAM_GARDEN_2016.pdf">
					<div class="ficon">
							<a href="http://www.eventbrite.ca/e/25th-annual-dream-garden-conference-tickets-19448978418" class="btn btn-default" role="button">Book Now</a>
					</div>
		</div>
					</div>
	</div>
</div>

	
				
    

<script type="text/javascript">
	function image(){
		alert("hey");
	}
</script>
	<?php include 'footer.php';?>	
  
