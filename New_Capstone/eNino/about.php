<?php include 'connection2.php';?>

<div class="container">
				<div class = "row">
	                <div class = "col-md-3">
						<div class = "mission">
							<div class = "img-responsive">
								<img src = "img/Galt-Horticulture-Banner.jpg" alt = "GHS Banner">
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
					</div>	
					
				
	
	
	
		      
				    <div class="col-md-9">
				        <div class="text-center">
					           <div id="main">
                                <?php
                          
                            $sql="SELECT content FROM about";
                            $result=$link->query($sql);
                            
                            if($result->num_rows>0){
                                //output data of each row
                                while($row=$result->fetch_assoc()){
                                    echo "<p>{$row['content']}</p>";
                                    
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
	
	<?php include 'footer.php';?>
	
	
	
