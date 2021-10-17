<?php
session_start();
define("DB_SERVER", "localhost:3306");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "bdms");

$cnn =	new mysqli(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno()) 
{
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
if(isset($_POST["user"], $_POST["pass"])) 
    {     
      $name = $_POST["user"]; 
      $password_login = $_POST["pass"]; 
      $sql = "SELECT uname,pass,email FROM credentials WHERE username = '".$name."' AND  pass = '".$password_login."'";
      $result1 = $cnn->query($sql);  
      header('Refresh:0; URL=home.html');
         	 
  			

   }
	


else 
{
  header('Refresh:0; URL=login.html');
}      ?>