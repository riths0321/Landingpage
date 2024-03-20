<!DOCTYPE html>
<html>
<head>
	<title>about</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style type="text/css">
		*
		{
			margin: 0;
			padding: 0;
			font-family: 'Josefin Sans', sans-serif;

		}
    .nav-item:hover
          {
                background-color:dodgerblue;
          }

.dropdown-item:hover
          {
                background-color:green;
          }
           .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    </style>
</head>
<body>
<header>
	<!--nevbar start-->
	<div class="container-fluid-full">
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark bg-li">
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">HOME</a>
  <a href="#">ABOUT US</a>
  <a href="gallery.php">GALLERY</a>
  <div class="dropdown">
  <a class="dropdown dropdown-toggle" href="service.php" data-toggle="dropdown">SERVICE</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">TRAVELEING</a>
        <a class="dropdown-item" href="#">TRANSPORT</a>
        <a class="dropdown-item" href="#">GALLERY</a>
        <a class="dropdown-item" href="contact.php">CONTACT</a>
      </div>
    </div>
  <a href="contact.php"><span class="#">CONTACT</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>&nbsp;&nbsp;
      <a class="navbar-brand" href="#">Goinadz</a>
       <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsiblenavbar">
        <i class="navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse" id="collapsiblenavbar">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link active" href="index.php">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">ABOUT US</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="gallery.php">GALLERY</a>
    </li>
    <!--dropdown-->
    <li class="nav-item  dropdown">
      <a class="nav-link dropdown-toggle active" href="service.php" id="navbardrop" data-toggle="dropdown">SERVICE</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">TRAVELEING</a>
        <a class="dropdown-item" href="#">TRANSPORT</a>
        <a class="dropdown-item" href="gallery.php">GALLERY</a>
        <a class="dropdown-item" href="contact.php">CONTACT</a>
      </div>
    </li>
    <li class="nav-item">
     <a class="nav-link active" href="contact.php">CONTACT</a>
     </li>
     
    </li>
  </ul>
	
</nav>
</div>
</div>
  <!--navbar end-->
  	<div class="container-fluid-full">
	<div class="jumbotron">
		<h1 class="text-left text-capitalize pt-5">About Us Section</h1>
		<p>This is a about us section of Goinadz.</p>
		<hr class="w-25 mx-auto pt-5">
	</div>
   </div>
		<div class="container-fluid-full">
		<h1 class="text-center text-capitalize pt-5">About us</h1>
		<hr class="w-25 mx-auto pt-5">
	</div>
  <div class="container-fluid">
	<div class="row mb-5">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="rb2.jpg" class="img-fluid img-thumbnail">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h1>Who Am I?</h1>
			<hr>
			<p>
     Hello ,My name is Tanishq Sharma.I am a profesinal artist and i would like to create my imaginession into a card board.thanks to visit my site and if you have any suggestion or any question releted to my website or my painting so please message or contact me.
     <span>Thank you</span> 
     <h4>~Tanishq sharma</h4>
      </p>
      <button class="btn btn-primary">Wanna Know Me</button>
		</div>
	</div>
</div>
</header>
<!--about us end-->
<footer>
  <p class="text-center text-white bg-dark">@copyright by Goinadz 2023</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <!-- script for side nav -->
  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>