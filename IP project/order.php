<?php
    $con = mysqli_connect('localhost','root','','contact');

    if($con){
        //    echo "connection successful";
    }else {
        echo "no connection";
    }
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $noOfdev = $_POST['noOfdev'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $payment = $_POST['payment'];

    $query = "INSERT INTO orders(id,name,noofdev,phone, email,payment) VALUES('','$name','$noOfdev','$phone','$email','$payment')";
    $run = mysqli_query($con,$query);
//     echo "<br><br><br><div class=head1>Your Order Placed Sucessfully</div>";
// echo "<br><div class=head1>Click <a href=home.php>here</a> to go back to the home page.</div>";
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="order.css" />

    <title>Order Placement</title>
</head>
<style>

body{
    background-image: url('images/travel-2650303_1920.jpg');
    background-position: center;
    background-repeat: no-repeat;
}

</style>
<body>

    
    <form style="margin-top:70px ; border:2px solid white" method= "POST" action="placeOrder.php" onsubmit="return emailValidate();">

			<div  class="container2">
				<center>
					<h1 > Order Placement Form </h1>
				</center>
				<hr>
				<label> Firstname : 
				<input type="text" name="firstname" id="firstname" placeholder="Firstname" size="15" required></label><p></p>
				<label> Lastname : 
				<input type="text" name="lastname" placeholder="Lastname" size="15" required></label>
				<div>
					<label>
						Number of Devices : 
					

					<select id="noOfdev" name="noOfdev" required>
						<option value="Number">Choose a number : </option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select></label>
				</div>
				<label>
					Phone : 
                    </label>
				<input type="text" name="phone" placeholder="Phone no." id="tel" size="10"/ required></label><br>
				<label for="email"><b>Email : </b>
				<input type="text" placeholder="Enter Email" name="email" id="email" required></label><br>
				
                
                    
				<button type="submit" style="   margin-left: 160px;padding:6px;background:red;color:white" class="submitbtn"> Place Order</button>
				<br><br>
					<?php 
					session_start();
					if(isset($_SESSION['message']))
					{
						
						$mess = $_SESSION['message']; 
						echo  $mess;
						
					}
						
					?>

				
				

		<script>
		function emailValidate() {
			var mail = document.getElementById("email").value
			var number = document.getElementById("tel").value
			var devices = document.getElementById("noOfdev").value 
			var fname = document.getElementById("firstname").value 
			var reg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if(!mail.match(reg)){
                alert("Please enter a valid email ID.");
                return false;
			}
			var reg = /^[0-9]+$/;
            if(!number.match(reg)){
                alert("Please enter only digits");
			    return false;
			}
			if(document.getElementById("noOfdev").selectedIndex== 0 ){
                alert("Please select number of devices");
			    return false;
			}
			if(fname == "")
			{
				alert("Enter name");
				return false;
			}
			}

		function pleaseLogin(){
			window.location.href='login.php'

		}	
		// document.getElementById("menu").style.display = "none";
		// if(screen.width > 768) {
		// 	document.getElementById("menu").style.display = "flex";
		// }
		// else {
		// 	document.getElementById("menu").style.display = "none";
		// }
		function myFunction() {
  var x = document.getElementById("menu");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
	
  

		</script>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script> -->
</body>
<html>