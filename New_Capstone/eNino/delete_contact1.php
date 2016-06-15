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
					                            <h4><i>Delete Contact</i></h4>
					                            <div id="contacts_container">
                                                        <?php
                                                            $contact_id=mysqli_real_escape_string($link, $_POST['contact_id']);
                                                            $sql="SELECT contact_id,name FROM contact";
                                                            $result=$link->query($sql);
                                                        
                                                            if($result->num_rows>0){
                                                            //output data of each row
                                                            while($row=$result->fetch_assoc()){
                                                                
                                                                echo "<tr><td>{$row['name']}</td> <td> <a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='delete_contact2.php?id={$row['contact_id']}'>Delete</a> </td> </tr>";
                                                             
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