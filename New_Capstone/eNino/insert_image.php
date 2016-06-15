<?php require_once("connection.php"); ?>
<?php
        

if(isset($_POST['upload']))
{
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp_name = $_FILES['image']['tmp_name'];
	$folder="photo/";
	$file_path=$folder.basename($_FILES['image']['name']);
	
	if($image_name=='') {
		header("Location:upload.php?msg=Please select an image");

		
		
		
	}
	else
	{
		move_uploaded_file($image_tmp_name,$file_path);
		 $sql="INSERT INTO gallery(image_path, image_name) VALUES('$file_path','$image_name')";
 $result=$link->query($sql); 
	
		header("Location:gallery_admin.php?msg=Image Uploaded Successfully");
	
	}
}

?>