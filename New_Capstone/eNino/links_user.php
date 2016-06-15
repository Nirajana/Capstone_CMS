<?php include 'connection2.php';?>

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
				                <div class="text-center">
					                    <div id="main">
    
    <?php
//$sql="SELECT menu_name FROM pages";
$sql="SELECT link_name, link_url, link_content FROM links";
$result=$link->query($sql);

if($result->num_rows>0){
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo "<a href={$row['link_url']}>{$row['link_name']}</a><pre>{$row['link_content']}</pre>";
        
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
</div>
</div>

<?php include 'footer.php';?>