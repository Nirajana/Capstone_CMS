<!DOCTYPE html>
<html class = full lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GHS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set1.css" />
	<link href="css/overwrite.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
		<link href="/CSS/print.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>

  
<?php
        
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "ghs";
    $dbport = 3306;

$link = mysqli_connect($servername, $username, $password, $database, $dbport);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

<body>	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
		
			<div class="navbar-collapse collapse">	

                <div class="menu">
					
					<ul class="nav nav-tabs nav_font" style="	font-size: 13px!important;" role="tablist">
    
    <?php
//$sql="SELECT menu_name FROM pages";
$sql="SELECT menu_name, url FROM nav ORDER BY  `nav`.`position` ASC ";
$result=$link->query($sql);

if($result->num_rows>0){
    //output data of each row
    while($row=$result->fetch_assoc()){
        echo "<li><a href={$row['url']}>{$row['menu_name']}</a></li>";
        
        }
}
else 
    {
    echo "0 results";
    }
?>
	</ul>
				</div>
			</div>
		</div>
	</nav>
</body>
</html>
	
	