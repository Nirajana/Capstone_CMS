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
					    <div class = "row">
					        <div class = "col-md-12">
					            <div class = "table-responsive">
					                    <table id = "mytable" class = "table table-striped">
					                        <div class = "pricing hover-effect">
					                            <div class = "pricing-head">
					                            <h3>Galt Horticulture Society</h3>
					                            <h4><i>Update Meetings</i></h4>
					                            
					                            <div id="contacts_container">
					                                
					                                
                                                        <?php
                                                            $meetings_id=mysqli_real_escape_string($link, $_POST['meetings_id']);
                                                            $sql="SELECT meetings_id,DATE_FORMAT(date, '%M %e') date,topic,speaker FROM meetings ORDER BY YEAR(date) ASC, MONTH(date) ASC, DAY(date) ASC";
                                                            $result=$link->query($sql);
                                                        
                                                            if($result->num_rows>0){
                                                            //output data of each row
                                                            while($row=$result->fetch_assoc()){
                                                                
                                                                echo "<tr><td>{$row['date']}</td><td>{$row['topic']}</td><td>{$row['speaker']}</td> <td> <a href='update_meetings2.php?id={$row['meetings_id']}'>Update</a> </td> </tr>";
                                                             
                                                            }
                                                        }
                                                        else {
                                                            echo "0 results";
                                                        }
                                                        
                                                        
                                                            
                                                        ?>
                                                            </div>
                                        </div>
					                          
					                   </table>
					               </div>
					         </div>
					      </div>
				    </div>
				
   
<?php include 'footer.php';?>