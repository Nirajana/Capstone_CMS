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
 
 	<div id="poster">
   	    
    <div class="btn-group">
       
      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Choose Year
  </button>
 
  
  <div class="dropdown-menu">
       <a class="dropdown-item" href="bus_trip_admin.php">2016</a>
       <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="bus_trip2015_admin.php">2015</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="bus_trip2014_admin.php">2014</a>
    
	
  </div>
  
</div>
<br/>
<br/>
 <?php
					           $sql="SELECT * FROM bus_trips WHERE trip_year=2014";
                            $result=$link->query($sql);
                            
                            if($result->num_rows>0){
                                //output data of each row
                                while($row=$result->fetch_assoc()){
                                    echo "<embed src={$row['trip_image']}>";
                                    
                                    }
                            }
                            else 
                                {
                                echo "0 results";
                                }
		    ?>
			
					
		
	
	</div>

</div>

<script type="text/javascript">
	function image(){
		alert("hey");
	}
</script>

	<?php include 'footer.php';?>	
  
