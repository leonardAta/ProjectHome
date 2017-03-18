<html>
<head>

<title>login page </title> </head>
<body>


<?php

if(array_key_exists(login, $_POST))
{
	$error = array();

#this initialize and authenticate user with firstname
	if(empty($_POST["user"]))
	{
		$error[]="please enter firstname";
	}else{
		$user=mysqli_real_escape_string($db, $_POST["user"]);
	}


#this initialize and authenticate password
	if(empty($_POST["password"])) 
	{
		$error []= "please enter password";
	}else{
		$password= md5($db, mysqli_real_escape_string($_POST["password"]));
	}




if(empty($error))
{
	$query = mysqli_query($db, "SELECT * FROM login WHERE 
		                   user= '".$firstname."' AND 
		                   secured_password= '".password."'")
	                       or die (mysqli_error($db));

	 if(mysqli_num_rows($query) ==1)//as expected one row return 
	 {
	 	while($result = mysqli_fetch_array($query)) 
	 	{
	 		$_SESSION ["id"]= $result["id"];
	 		$_SESSION ["uName"]= $result["firstname"];
	 		header("location: home.php?");
	 	}

	 }else{
	 	$err_msg = "invalid username and/or password";
	 	header("location: loginpage.php?err_msg =$err_msg");
	 }

	 }else{
	 foreach($error as $err)
	 {
	 	echo "<p>".$err."</p>";
	 

	 }
}




}





 ?>




<h3>LOGIN PAGE</h3>
<p>please enter the field below </p>

<form action="" method="post">

<p> Username: <input type="text" name="user" placeholder="firstname"> </p>

<p> Password: <input type="text" name="password" placeholder="password"> </p>

   <input type="submit" name="login" value="login">

</form>




</body>
</html>
