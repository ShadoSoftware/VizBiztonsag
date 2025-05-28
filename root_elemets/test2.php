		<?php 	session_start();?>
		<!DOCTYPE HTML>
		<?php
			
			   include("config.php");
			  			   			   
			   if($_SERVER["REQUEST_METHOD"] == "POST") {
				  // username and password sent from form 
				  
				  $myusername = mysqli_real_escape_string($db,$_POST['username']);
				  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
				  $mypass5= md5($mypassword);
				  
				  $sql =  "SELECT * FROM `users` WHERE username='$myusername' and passw='$mypass5'";
				  $result = mysqli_query($db,$sql);
				  if (!$result) {
						//printf("Error: %s\n", mysqli_error($db));
						echo mysqli_error($db);
						exit();
					}
				  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				  //$active = $row['active'];
				  
				  $count = mysqli_num_rows($result);
				  
				  // If result matched $myusername and $mypassword, table row must be 1 row
					
				  if($count == 1) {
					  $_SESSION['loggedin'] = true;
					  $_SESSION[]=$myusername;
					 $_SESSION['user'] = $myusername;
					 echo "Sikeres bejelentkezés";
					header("location: index_open.php");
				  }else {
					 $error = "Hibás felhasználónév vagy jelszó!";
					 echo $error;
					header("location: index.php");
				  }
			   }
			   mysqli_close($db);
			?>

	
	