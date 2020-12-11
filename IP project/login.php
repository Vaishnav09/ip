<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

If($username&&$password)
{
$connect=mysqli_connect("localhost", "root", "","phplogin")or die("couldn't find server");	

//echo "Connected successfully";
$query=mysqli_query($connect,"SELECT * FROM login1 where username='$username'");
//$query="SELECT * FROM login";	
$numrows=mysqli_num_rows($query);
//echo $numrows;
//$result = mysqli_query($connect, $query);
if ($numrows!=0)
{
	while($rows=mysqli_fetch_assoc($query))
	{
		$dbusername=$rows['username'];
		$dbpassword=$rows['password'];
		
		if($username==$dbusername &&$password==$dbpassword)
			
			{
			// echo "You are in! <a href=index1.php>Click to continue</a>";	
			header("location:index1.php");
			$_SESSION['username']=$dbusername;	
			}
			else echo("Incorrect password");
	}
}
else die("This user does not exists");
}
else die("please enter username and password");
?>