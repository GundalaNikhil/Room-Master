<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");
$conn = mysqli_connect("localhost","root","") ;
@mysqli_select_db("hotel",$conn);

	$title= $_POST['title'];
	$name= $_POST['name'];
	$email= $_POST['email'];
	$pass= $_POST['pass'];
	$add= $_POST['address'];
    $con= $_POST['con'];

	//echo "select email from userinfo where email='".$email."';";	
	   $sql_check = mysqli_query($conn,"select email from userinfo where email='".$email."';");
       
              if($sql_check) {
              echo '<font color="red">The email <strong>'.$email.'</strong>'.
                   ' is already in use.</font>';
                }
                else {
                
                $result = mysqli_query($conn,"INSERT INTO userinfo(title,name,email,password,address,contact) VALUES('$title','$name','$email','$pass','$address','$con');");
					//mysqli_query($conn,"commit;");
		             //display success message
		              echo "<font color='green'>User Registered Successfully";
		               echo "<br/><a href='login.php'>Login</a>";
                   }
		
	

?>
</body>
</html>