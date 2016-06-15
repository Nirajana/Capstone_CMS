<?php require_once("connection.php"); ?>
<?php session_start(); 

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($link,$_POST['username']);
      $password = mysqli_real_escape_string($link,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$username' and password = '$password'";
      $result=$link->query($sql);
      
      
      
      if($result->num_rows>0){
    //output data of each row
     while($row=$result->fetch_assoc()){
         session_register("username");
         $_SESSION['login_user'] = $username;
        $_SESSION["message"]="You have logged in successfully!"
         
         header("location: welcome.php");
     } 
     
     }
    else 
    {
    $error = "Your Login Name or Password is invalid";
    }
      
   }

?>



    