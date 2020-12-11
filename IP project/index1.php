<?php
session_start();
    $con = mysqli_connect('localhost','root','','contact');

    if($con){
        //   echo "connection successful";
    }else {
        echo "no connection";
    }


if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    $query = "INSERT INTO contact_us(id,name, email,mobile,message) VALUES('','$name','$email','$mobile','$message')";

    $run = mysqli_query($con,$query);

    

}
    
?> 


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />

        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
        

        <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
        <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
    
    <title>Child Safety GPS shoes</title>

  </head>
  <body>
    <div id="home" class="home">
        <nav>
            <div class="navbar">
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                  <i class="fas fa-bars"></i>
                </label>
            <img src="images/quip.png" alt="">
            <ul>
                <li><a class="active"  href="#home">Home</a></li>
                <!-- <li><a href="">track</a></li> -->
                <li><a href="#intro">How it Works</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#contact">Contact US</a></li><p></p>
                <li><?php echo "<h2><b>Welcome! " .$_SESSION['username'] ."</b></h2>" ?></li>
              </ul>
        </nav>

        <div class="left">
            
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>  
            
            <div class="txt desc">
              Lorem, ipsum dolor Lorem ipsum dolor sit amet, consectetur
              adipisicing elit. 
            </div>
            <div class="buttons">
              <!-- <a class="button" href="register.php" id="register">register</a> -->
              <a class="button" href="logout.php" id="login" >logout</a>
            <a   style="text-decoration:none; background-color: blue; padding: 10px; border-radius: 0.3cm; color: white;color:white; font-size: 22px; text-transform: capitalize;" href="order.php">Order Now</a>

            </div>
          </div>

    </div>

    <!-- intro -->
<h2 id="intro" class="h2">How it Works</h2>
<section class="how" >
  <div class="outer">
    <div class="inner">
      <div class="img">
        <img src="images/mockup.png" alt="">
      </div>
      <div class="desc" style="font-size:20px">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, sed.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet debitis, quibusdam sunt quaerat repellendus suscipit. Est in autem labore dolorem quam ducimus, reiciendis nam facilis exercitationem et beatae quo temporibus.
      </div>
    </div>
  </div>
  <div class="outer">
    <div class="inner">
      <div class="img">
        <img src="images/mockup.png" alt="">
      </div>
      <div class="desc" style="font-size:20px">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, sed.
        lore323
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid quod incidunt, cupiditate pariatur dolorem, assumenda ut ad maiores itaque corporis natus id ab nam molestiae modi. Odit, est rem.
      </div>
    </div>
  </div>
  <div class="outer">
    <div class="inner">
      <div class="img">
        <img src="images/mockup.png" alt="">
      </div>
      <div class="desc" style="font-size:20px">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nostrum vitae, quae quod quisquam dolorum consequatur cum tenetur eum nihil vero nobis harum velit quaerat voluptatum laudantium eaque recusandae id odit facere!
      </div>
    </div>
  </div>
</section>

<!-- about us -->
<H2 class="h2" id="about">About Us</H2>
<div class="outer">
</div>

      <!-- Contact us -->
      <section class="contact" id="contact">
        <div class="conatiner">
            <div class="content">
                <div class="box form">
                <form method="POST" action="">
                        <input type="text" id="name"  name="name"  style="font-size:20px" placeholder="Enter Name">
                        <input type="text" id="email"  name="email"  style="font-size:20px" placeholder="Enter Email">
                        <input type="text" id="mobile"  name="mobile"  style="font-size:20px" placeholder="Enter Mobile">
                        <textarea id="message" name="message"  style="font-size:20px" placeholder="Enter Message"></textarea>
                        <button class="login" id="submit"   type="submit">Send Message</button>
                    </form><br>
                    <div  style="font-size:20px" id="display"></div>
                </div>
                <div class="box text">
                    <h2>Get Connected</h2>
                    <p class="title-p">Mangaldeep CHS F1 - 1/2 ,Sector-14 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam nesciunt minus </corporis>
                    </p>
                    <div class="info">
                        <ul>
                        <li><span class="fa fa-map-marker"></span> Airoli Navi Mumbai - 400708</li>
                            <li><span class="fa fa-phone"></span> 91 9999999999</li>
                            <li><span class="fa fa-envelope"></span> info@shoe.com</li>
                        </ul>
                    </div>
                    <div class="social">
                      <a href=""><span class="fa fa-facebook"></span></a>
                      <a href=""><span class="fa fa-linkedin"></span></a>
                      <a href=""><span class="fa fa-instagram"></span></a>
                      <a href=""><span class="fa fa-youtube-play"></span></a>
                  </div>
                </div>

            </div>
        </div>
    </section>
    <footer style="background-color: #222 ;margin-top:0;padding-bottom:50px">
    <div id='map' style="margin-top:-20px;margin-left:30px;margin-right:20px ;width: 90%; height: 310px; display:flex ;flex-wrap:wrap"></div>
    </footer>
    <script>

var map = L.map('map');

map.addControl(new L.Control.Fullscreen({
    title: {
        'false': 'View Fullscreen',
        'true': 'Exit Fullscreen'
    }
}));

map.setView([19.15244092423333, 72.98859716429641], 16);

const myBasemap = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    opacity: 0.5,
});
myBasemap.addTo(map);
    address = L.marker([19.15244092423333, 72.98859716429641]).bindPopup('homes');
    address.addTo(map);

var baseLayer = {
    "OpenStreetMap": myBasemap,
};

L.control.layers(baseLayer).addTo(map);

      $(document).ready(function(){
$("#submit").click(function(){
  var sub = $("#name").val();
  var em = $("#email").val();
  var com = $("#message").val();
  var spm = $("#mobile").val();
  var dataString = 'em1='+ em + '&sub1='+ sub + '&com1='+ com + '&spm=' + spm;
if(em==''||sub==''||com==''|| spm=='')
{
$("#display").html("<div class='alert alert-warning'>Please Fill All Fields.</div>");
}
else
{
$.ajax({
type: "POST",
url: "processor.php",
data: dataString,
cache: false,
success: function(result){
$("#display").html(result);
}
});
}
return false;
});
});
</script>

</body>
</html>
