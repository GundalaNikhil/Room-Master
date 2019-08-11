<?php 

$conn = mysqli_connect("localhost","root","") 
			or die("cannot connected");


@mysqli_select_db("hotel",$conn);
 
 function SignIn() 
 { session_start();
   
    
    

   if(!empty($_POST['name']) AND !empty($_POST['password'])) 
    { 
           $query = mysqli_query($conn,"SELECT * FROM userinfo where name = '$_POST[name]' AND password = '$_POST[password]'");
      	  
           $row = mysqli_fetch_array($query) or die( "Usename Or Password Error");


          echo"<br>";
           echo "<a href='"."login.php"."''>Login</a>";



         


     


      if(!empty($row['name']) AND !empty($row['password'])) 
       { 
      
             $_SESSION['name'] = $row['password'];
             $fname=$row['name'];
             $_SESSION['name'] = $fname ;
	       
	        if($fname == 'admin')
	          {
		       header("Location:adminhome.php");  
	           }
	   
	       else
	        {
		       header("Location:index.php");  
		   
	         }


     
       }
   }
	
   

	
	     
			 
	   
  

  else
  	{echo "Username or Password Empty !!!";
    echo"<br>";
     echo "<a href='"."login.php"."''>Login</a>";}

	
 }
		 if(isset($_POST['btn-login'])) 
		 { 
           SignIn(); 


	     } 
 ?>