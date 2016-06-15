<?php require_once("connection.php"); ?>
  
	<br>
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
					    <div class = "edit_mission">
		                    <form action="insert_mission.php" method="post">
		  	<b>Edit: MISSION</b>
		 
		  <textarea id='ta1' rows='15' cols='100' name='mission_content'>
		     <?php
      
                $sql="SELECT * FROM mission";
                $result=$link->query($sql);
                
                if($result->num_rows>0){
                    //output data of each row
                    while($row=$result->fetch_assoc()){
                        echo "{$row['mission_content']}<br>";
                        
                        }
                }
                        
                		  ?>
		 </textarea>
		  <input type="submit" name="submit" value="Submit" class="btn btn-success" />
		</form>
		<br />
		 </div>
        </div>
         </div>
        </div>
	  <?php include 'footer.php';?>
		
		<script type="text/javascript" src="scripts/jquery-1.3.2.js"></script>
        <script type="text/javascript" src="scripts/jHtmlArea-0.7.5.js"></script>
        <link rel="Stylesheet" type="text/css" href="style/jHtmlArea.css" />

        <script type="text/javascript">
            $(function()
            {
                $("#ta1").htmlarea({
                    toolbar: [
                        ["bold", "italic", "underline", "|", "forecolor"],
                        ["p", "h1", "h2", "h3", "h4", "h5", "h6"],
                        ["link", "unlink", "|"]],
                    toolbarText: $.extend({}, jHtmlArea.defaultOptions.toolbarText, {
                        "bold": "bold",
                        "italic": "italic",
                        "underline": "underline"
                        
                    })
                });
            });
        </script>
     
