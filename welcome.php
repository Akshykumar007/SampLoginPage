<?php 
$con=new mysqli("localhost:3306","root","","sample");
$sql = "SELECT * FROM database1";
$result = $con->query($sql);
$row=$result->fetch_assoc();
 echo "Hi" $row["username"];       
?>
<html>
    <head>
        <title>Welcome Page</title>

    </head>        
    <body>
        
    </body>
</html>