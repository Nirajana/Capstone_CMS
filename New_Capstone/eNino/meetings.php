 <?php require_once("connection2.php"); ?>
 
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
					    <div class = "row">
					        <div class = "col-md-12">
					            <div class = "table-responsive">
					                    <table id = "mytable" class = "table table-striped">
					                        <div class = "pricing hover-effect">
					                            <div class = "pricing-head">
					                            <h3>Galt Horticulture Society<span>
					                             Location: Chartwell Queen's Square Retirement Residence, <br>
                                                 10 Melville St North, Cambridge, ON N1S 1H5 <br>
                                                 519-621-2777 <br>
                                                 Social Time: 7:00 – 7:15.  Times are suggested
                                                 <br>
                                                 <i>Speakers, topics and prices are subject to change</i>
                                                 <br>
                                                 For more information email:  info@galthort.com
                                                 </span></h3>
					                            <h4><i>Meetings-2016</i></h4>
					                            <tr class = "table table-hover">
					                                 <th>Date</th>
					                                 <th>Topic</th>
					                                 <th>Speaker</th>
					                             </tr>
					                             <?php       

                                                $sql="SELECT DATE_FORMAT(date, '%M %e') date,topic,speaker FROM meetings ORDER BY YEAR(date) ASC, MONTH(date) ASC, DAY(date) ASC";
                                                $result=$link->query($sql);

                                                if($result->num_rows>0){
                                                //output data of each row
                                                while($row=$result->fetch_assoc()){
                                    echo "<tr><td>{$row['date']}</td><td>{$row['topic']}</td><td>{$row['speaker']}</td></tr>";
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
					               <?php
					               if(isset($_GET['msg']))
					               {
					               	$message=$_GET['msg'];
					               	echo "<script language='javascript' type='text/javascript'>";
                                    echo "alert('$message');";
                                    echo "</script>";
					               }
					               ?>
					         </div>
					      </div>
				    </div>
				   
				</div>
			</div>
				
				    
	
    

<?php include 'footer.php';?>
	
	   
		