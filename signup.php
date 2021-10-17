<?php 
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
	$name = $_POST ['name'];
	$uname= $_POST ['uname'];
	$phone = $_POST ['phone'];
	$email = $_POST ['email'];
	$password1 = $_POST['npassword'];
	$password = $_POST ['cpassword'];
	if($password==$password1)
	{
	$sql = ("INSERT INTO credentials (pname,uname,phone_no,email,pass) VALUES ('$name','$uname','$phone','$email','$password')");
		if ($cnn->query($sql) === TRUE) 
            {
               echo "Account created successfully";
  			//sleep(10);
			 
  			header('Refresh: 5; URL=http://localhost/bdms/login.html');
  			
           //echo"<meta http-equiv="refresh" content="5;url=login.html">"
            } 
            else {
               echo "Error: " . "" . mysqli_error($cnn);
            }

	}
	else
	{

		die("<h1>passwords do not match please check!!!</h1>");
	}






//	if($name and $email and $sem and $enroll and $user_name and $password)
//	{
//echo "name:--$name";
//echo "user_name:--$user_name";
//echo "password:--$password";
//	}
















	//$con = mysql_connect("localhost","root","") or die();
	//$mysql = new mysqli("localhost","root","","student_info");
	//mysql_select_db("student_info") or die(mysql_error());
	//$pdo = new PDO('mysql:host=localhost;dbname=student_info ', 'root', '');
	//echo "connected to database";



 ?>