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
	$phone = $_POST ['num'];
	$email = $_POST ['mail'];
	$birth = $_POST['dob'];
	$bgroup = $_POST ['bgroup'];
    $location = $_POST ['location'];
    $address = $_POST ['addr'];
	
	$sql = ("INSERT INTO donate (pname,phone_no,email,bdate,blood_group,ulocation,uaddress) VALUES ('$name','$phone','$email','$birth','$bgroup','$location','$address')");
		if ($cnn->query($sql) === TRUE) 
            {
               echo "Request made successfully!!!";
               echo " We will contact you soon regarding appointment:)";
  			//sleep(10);
			 
  			 header('Refresh: 10; URL=http://localhost/bdms/home.html');
  			
           //echo"<meta http-equiv="refresh" content="5;url=login.html">"
            } 
            else {
               echo "Error: " . "" . mysqli_error($cnn);
            }

	

 ?>
