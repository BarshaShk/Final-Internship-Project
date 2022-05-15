<?php

$host="localhost";
$user="root";
$password="";
$db="user";


$data=mysqli_connect($host, $user, $password, $db);
if($data===false)
{
	die("connection_error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username= '".$username."' AND password='".$password."'";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="Ken")
	{
		$_SESSION["username"]=$username;

		header("location:student.php");
	}

	elseif($row["usertype"]=="Freya")
	{
		$_SESSION["username"]=$username;

		header("location:student2.php");
	}

	elseif($row["usertype"]=="Anna")
	{
		$_SESSION["username"]=$username;

		header("location:student3.php");
	}
	elseif($row["usertype"]=="teacher")
	{
		$_SESSION["username"]=$username;

		header("location:teacher.php");
	}

	else
	{
		header("location:loginconnection.php");
	}
}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="Style1.css">
<title>Oshawa ECampus</title>
</head>
<body>
	    <section class="header">
        <nav>
            
            <div class="nav-links">
                <ul>
                    <li><a href="Main.html">HOME</a></li>
                    <li><a href="loginconnection.php">LOGIN</a></li>
                     
                </ul>
            </div>
        </nav>
 <link rel="stylesheet" href="Style1.css">
<center>
	
	<div class="text-box">
		<center>
	<h1>Login Form</h1>
	<br><br>
	<div style="background-color: lightblue; width: 500px;">
		
		<br><br>

		<form action="#" method="POST">

	<div>		
		
		<label>Username</label>
		<input class="loginstyle" type="text" name="username" required>
	</div>
	<br><br>

	<div>
		<label>Password</label>
		<input class="loginstyle" type="password" name="password" required>
	</div>
	<br><br>

	<div>
		<input class="btn btn-primary" type="submit" value="Login">
	</div>
	<br><br>

	</center>
	</form>


	<br><br>
</div>
</center>

</body>
</html>
