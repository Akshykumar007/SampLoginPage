<?php 
 $con=new mysqli("localhost:3306","root","","sample");

 $sql="INSERT INTO database1 (username,password) VALUES ('$_POST[username]','$_POST[password]')";
 
     if (!mysqli_query($con,$sql))
       {
       die('Error: ' . mysqli_error($con));
       }
     echo "1 record added";
   
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "welcome.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login " style = 'margin-right:30px'/>
                  <input type = "submit" value = " Cancel "/><br /> <br/>
                <div style="text-align: justify">  <a href="register.php" >New User? SignIn</a> </div>
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
