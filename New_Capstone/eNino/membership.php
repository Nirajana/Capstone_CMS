<?php include 'connection2.php';?>
<div class="container">
				<div class = "row">
	                <div class = "col-md-3">
						<div class = "mission">
							<div class = "img-responsive">
								<img src = "img/Galt-Horticulture-Banner.jpg" alt = "GHS Banner">
							</div>
						</div>
						
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
	<div class = "membership">
				
					<div class="h2">Membership</div>
					
				
      
 <?php
                          
                            $sql="SELECT membership_content FROM membership";
                            $result=$link->query($sql);
                            
                            if($result->num_rows>0){
                                //output data of each row
                                while($row=$result->fetch_assoc()){
                                    echo "<p>{$row['membership_content']}</p>";
                                    
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


<?php include 'footer.php';?>