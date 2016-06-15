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
  				<div class = "col-md-2"></div>
  				<div class = "col-md-5">
  				    <div class = "row">
  				        
  				            <div class = "panel panel-login">
  				                    <div class = "panel-heading">
  				                            <div class = "row">
  				                                <div class = "center">
  				                                 ADD ADMIN
  				                                </div>
  				                                
  				                           </div>
  				                            <hr>
  				                  </div>
  				                  <div class = "panel-body">
  				                      <div class = "row">
  				                          <div class = "col-xs-12">
  				                              <form id = "login-form" action = "add_admin2.php" method = "post" role = "form" id = "login-form-link" style = "display: block;">
  				                                  <div class = "form-group">
  				                                      <input type = "text" name = "username" id ="username" tabindex = "1" class ="form-control" placeholder = "Username" value = "" required>
  				                                  </div>
  				                                  <div class = "form-group">
  				                                      <input type = "password" name = "password" id = "password" tabindex = "2" class = "form-control" placeholder="Password" required>
  				                                  </div>
  				                                  </div>
  				                                  <div class = "form-group">
  				                                      <div class = "row">
  				                                          <div class = "col-sm-6 col-sm-offset-3">
  				                                              <input type = "submit" name="login-submit" id="login-submit" tabindex="4" class = "form-control btn btn-login" value="Add Admin">
  				                                          <!--<button onclick="logged_in()" >hidden</button>-->
  				                                          </div>
  				                                          
  				                                      </div>
  				                                  </div>
  				                                  
  				                                  </form>
  				                                 
  				                                  
  				                                  
  				                                  
  				                        </div>
  				                    </div>
  				                </div>
  				  
  				        
  				            
  				        </div>
  				    </div>
  				</div>
          </div>
    </div>
  		<script>
  		function logged_in(){
  		    
  		}
  		
  		</script>
		
		
	<?php include 'footer.php';?>