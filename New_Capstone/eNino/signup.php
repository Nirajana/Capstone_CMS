<?php require_once("connection.php"); ?>
    <div id="main">
    
        <form action="form1.php" method="POST">
    
        <label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="name">
    

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="lastName">

        <label for="emailAddress">Email Address:</label>
        <input type="email" name="email" id="emailAddress">
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" name="cpassword" id="cPassword"><br>
    
    <input type="submit" value="Submit">
</form>
</div>
</body>
</html>

