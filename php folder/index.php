<?php
include ("connection.php");//google api
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
     <title>home</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!--font icon link-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
		*
	   {
		     margin: 0;
		     padding: 0;
		     font-family: 'Josefin Sans', sans-serif;
       }
.fa 
{
  padding: 20px;
  font-size: 20px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
/*.carousel-control-prev
       {
         background-image: url("rb13.jpg");
         background-size: cover;
       }
.carousel-control-next
       {
         background-image: url("rb13.jpg");
         background-size: cover;
       }*/
.carousel-inner .carousel-item> img 
      {
           height: 600px;
           width: 100%;
           -webkit-animation: zoom 20s;
           animation: zoom 20s;
      }
          .nav-item:hover
          {
                background-color:dodgerblue;
          }

.dropdown-item:hover
          {
                background-color:green;
          }

/*.mb-4:hover
          {
            transition:all 1s ease-in-out;
            transform:scale(1.1);
          }*/
.sidenav
          {
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

  .sidenav a 
        {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 16px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

  .sidenav a:hover
         {
          color: white;
        }
.sidenav .dropdown-item:hover
          {
            color:black;
          }


  .sidenav .closebtn 
        {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

  #main 
        {
          transition: margin-left .5s;
          padding: 16px;
        }

@media screen and (max-height: 450px)
     {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }
      /*for zoom img*/
 @-webkit-keyframes zoom 
     {
      from {
              -webkit-transform: scale(1, 1);
           }
        to {
              -webkit-transform: scale(1.5, 1.5);
           }
     }

 @keyframes zoom 
     {
      from {
               transform: scale(1, 1);
           }
        to {
               transform: scale(1.5, 1.5);
           }
     }
     /*zoom end*/
</style>
</head>
<body>
  <!--<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?GTM-N9639L9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
 </noscript>-->
<header>
	   <!--navbar start-->
<div class="container-fluid-full">
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">HOME</a>
      <a href="about.php">ABOUT US</a>
      <a href="#">GALLERY</a>
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
<span style="font-size:30px;cursor:pointer;color: white;" onclick="openNav()">&#9776;</span>&nbsp;&nbsp;
      <a class="navbar-brand" href="#">Goinadz</a>
      <!--for collapse icon-->
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsiblenavbar">
        <i class="navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse" id="collapsiblenavbar">
        <!--end-->
           <ul class="navbar-nav ml-auto">
             <li class="nav-item">
             <a class="nav-link active" href="#">HOME</a>
             </li>
             <li class="nav-item">
             <a class="nav-link active" href="about.php">ABOUT US</a>
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
           </ul>
    
  </nav>
</div>
</div>
   <!--navbar end-->
<div id="demo" class="carousel slide container-fluid-full" data-ride="carousel">
   <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
        </ul>
   <!-- The slideshow -->
<div class="carousel-inner">
    <div class="carousel-item active">
          <img src="rb13.jpg" alt="Los Angeles">
        <div class="carousel-caption">
          <h1>Los angels</h1>
          <p>we has such great time in los angles.</p>
        </div>
    </div>
    <div class="carousel-item">
          <img src="rb9.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>we has such great time in Chicago.</p>
        </div>
    </div>
    <div class="carousel-item">
          <img src="rb14.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>we has such great time in New York.</p>
        </div>
    </div>
    <div class="carousel-item">
          <img src="rb8.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>we has such great time in New York.</p>
        </div>
    </div>    
</div>
    <!-- Left and right controls -->
       <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
       </a>
       <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
       </a>
</div>
</div>
</header>
<section>
	<div class="container-fluid-full">
		<h1 class="text-center text-capitalize pt-5">About us</h1>
		<hr class="w-25 mx-auto pt-5">
	</div>
<div class="container-fluid">
	<div class="row mx-auto">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="tanishq.jpg" class="img-fluid img-thumbnail">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h1>Who Am I?</h1>
			<hr>
			<p>
     Hello ,My name is Tanishq Sharma.I am a profesinal artist and i would like to create my imaginession into a card board.thanks to visit my site and if you have any suggestion or any question releted to my website or my draw painting so please message or contact me.
     <span>Thank you</span> 
     <h4>~Tanishq sharma</h4>
      </p>
        <button class="btn btn-primary">Wanna Know Me</button>
		</div>
	</div>
</div>
</section>
<!--about us end-->
<!--service-->
<section>
	<div class="container-fluid-full">
		<h1 class="text-center text-capitalize pt-5">Services</h1>
		<hr class="w-25 mx-auto pt-5">
	</div>
	<div class="container">
    <div class="row text-center mb-5">
	<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
          <img class="card-img-top" src="rb6.jpg" alt="Card image">
              <div class="card-body">
               <h4 class="card-title">Sketch</h4>
               <p class="card-text">This img draw by tanishq sharma</p>
               <a href="#" class="btn btn-primary">Buy now</a>
           </div>
        </div>
    </div>
	<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
          <img class="card-img-top" src="rb7.jpg" alt="Card image">
              <div class="card-body">
              <h4 class="card-title">Imaginesion</h4>
             <p class="card-text">This img draw by tanishq sharma</p>
           <a href="#" class="btn btn-primary">Buy now</a>
       </div>
    </div>
    </div>
	<div class="col-lg-4 col-md-4 col-12">
		<div class="card">
          <img class="card-img-top" src="rb11.jpg" alt="Card image">
              <div class="card-body">
              <h4 class="card-title">Shadow</h4>
             <p class="card-text">This img draw by tanishq sharma</p>
           <a href="#" class="btn btn-primary">Buy now</a>
       </div>
    </div>
    </div>
</div>
</div>
</section>
<!--service end-->

<!--contact start-->
<section class="bg-primary">
    <article class="text-center py-5 text-white">
    <div>
      <h3 class="display-4 ">+91 6264708828</h3>
      <p>If You Want Best Services Call Us Know</p>
      <a class="btn btn-warning" href="contact.php">contact now</a>
    </div>
    </article>
</section>
<!--contact demo end-->

<!--gallery start-->
<section>
<div class="container">
    <h1 class="text-center text-capitalize pt-5">Gallery</h1>
    <hr class="w-25 mx-auto pt-5">
     <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="#"><img src="rb6.jpg" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="#"><img src="rb4.jpg" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="#"><img src="rb1.jpg" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="#"><img src="rb11.jpg" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="#"><img src="rb7.jpg" class="img-fluid img-thumbnail"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-12 mb-4">
            <a href="#"><img src="rb5.jpg" class="img-fluid img-thumbnail"></a>
        </div>
     </div>
</div>
</section>
<!--gallery end-->

<!--register start-->
<section class="bg-primary container">
    <article class="py-5">
       <div class="text-center  text-white">
         <h3 class="display-4 ">Want To Join</h3>
         <p>Be a part of Goinadz Family</p>
         <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">join now</button>
       </div>
<!-- The Modal -->
 <div class="modal fade" id="myModal">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
<!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Signup</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>

       </div> 
<!-- Modal body -->
       <form action="" class="m-4" method="GET">
         <div class="form-group">
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
         </div>
         <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Create password" name="password">
         </div>
         <div class="form-group form-check">
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember me
          </label>
         </div>
         <input type="submit" class="btn btn-primary" name="submit" value="submit">
         <input type="reset" class="btn btn-success" name="reset" value="reset">
       </form>
 <?php
 
if($_GET['submit']) 
{
  $em=$_GET['email'];
  $pa=$_GET['password'];
  
  if ($em!="" && $pa!="" ) 
  {
     
    $query = "INSERT INTO SIGNUP VALUES('$em','$pa')";
    $data=mysqli_query($conn, $query);

    if ($data)
    {
      echo "Data Inserted into database";
    }
  }
  else
  {
    echo "All fields are required";
  }
  
}

?>
<!-- Modal footer -->
       <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
      </div>        
    </div>
  </div>
</article>
</section>
<!--register end-->

<!--contact us start-->
<section>
        <div class="container">
          <h1 class="text-center text-capitalize pt-5">Contact Us</h1>
          <hr class="w-25 mx-auto pt-5">
        </div>
        <div class="w-50 mx-auto mb-5">
 <form action="#" method="GET">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="mobile">Mobile No:</label>
            <input type="number" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="textarea">message:</label>
            <textarea class="form-control" placeholder="Enter message" name="message"></textarea>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember">Remember me
            </label>
        </div>
        <a href='display1.php'><script type="text/javascript"> alert ('Your from has submited')</script><input type="submit" class="btn btn-primary" name="submit" value="submit">&nbsp;&nbsp;check list</a>
 </form>
 <?php

if($_GET['submit']) 
{
  $na=$_GET['name'];
  $mo=$_GET['mobile'];
  $em=$_GET['email'];
  $me=$_GET['message'];

  if ($na!="" && $mo!="" && $em!="" && $me!="") 
  {
     
    $query = "INSERT INTO CONTACT VALUES('$na','$mo','$em','$me')";
    $data=mysqli_query($conn, $query);

    if ($data)
    {
      //echo "Data Inserted into database";
    }
  }
  else
  {
    //echo "All fields are required";
  }
  
}

?>
</div>

</section>
  <footer class="text-white text-center text-lg-start bg-dark">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">About company</h5>

          <p>
            You can write here your company detail in short
          </p>

          <p>
            also you can write about your privacy policy and term & conditions.
          </p>

          <div class="mt-4">
           <a href="#" class="fa fa-facebook"></a>
           <a href="#" class="fa fa-twitter"></a>
           <a href="#" class="fa fa-google"></a>
           <a href="#" class="fa fa-linkedin"></a>
           <a href="#" class="fa fa-youtube"></a>
           <a href="#" class="fa fa-instagram"></a>         
        </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">Search something</h5>

          <div class="form-outline form-white mb-4">
            <input type="text" id="formControlLg" class="form-control form-control-lg" />
            <label class="form-label" for="formControlLg">Search</label>
          </div>
          
          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fa fa-home"></i></span><span class="ms-2">House no. 11,Athner, Dist.-Betul(M.P.)</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fa fa-envelope"></i></span><span class="ms-2">ritiksahu0321@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fa fa-phone"></i></span><span class="ms-2">+91 6264708828</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Opening hours</h5>

          <table class="table text-center text-white">
            <tbody class="fw-normal">
              <tr>
                <td>Mon - Thu:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Fri - Sat:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Sunday:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://Goinadz.com/">Goinadz.com</a>
    </div>
    <!-- Copyright -->
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