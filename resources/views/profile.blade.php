<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Booksmith</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin - v4.1.0
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style>
td,h3,h6,h2{
  color:white;
}
.s1{
        position: absolute;
        top:300px;
        left: 35%;
        transform: translate(-50%,-50%);
        width: 600px;
        height: 400px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.8);
       color:burlywood; 
    }
    body {
  background-image: url('https://wallpaperaccess.com/full/183215.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">Comic Book</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/custhome">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown "><a href="#"><span>Book</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/customerbook">Book</a></li>
             
              <li class="dropdown"><a href="#"><span>Request a book</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/rqstbook">Add Request</a></li>
                  <li><a href="/viewrequest">View Request</a></li>
                  </ul>
              </li> 

             <li class="dropdown"><a href="#"><span>Search</span> <i class="bi bi-chevron-right"></i></a>            
              <ul>
                <form action="search" method="post">
                {{csrf_field()}}
                  <table class="table table borderless" style="width:300px;">
                   <tr>
                      <td><input type="text" class="form-control" placeholder="Enter book name" name="bname" required></td>       
                     <td><button class="btn btn-dark">Search</button></td>
                   </tr>
                 </table>
                </form>
              </ul>
            </li>
        
                </ul>
          </li>
          <li><a class="nav-link scrollto" href="/myorder">My orders</a></li>
          <li><a class="nav-link scrollto" href="/cartlist">Cart</a></li>
          <li><a class="nav-link scrollto" href="/profile">Profile</a></li>
          <li><a class="getstarted scrollto" href="/logout">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    
<br><br><br>
<br><br>
<div class="container">
    <div class="row">
        <div class="s1">
        <br>
            
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            </div>
             <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <table class="table table-borderless" style="width: 500px;">
            @foreach($customer as $customer)
              <center><h3> {{ $customer->cname }} </h3></center>
                
            <tr>
                <td>Mail</td>
                <td>{{ $customer->cmail }}</td>
            </tr>
            <tr>
                <td>House Name</td>
                <td>{{ $customer->caddress }}</td>
            </tr>
            <tr>
                <td>City</td>
                <td> {{ $customer->ccity }} </td>
            </tr>
            <tr>
                <td>District</td>
                <td> {{ $customer->cstate }} </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td> {{ $customer->cphone }}</td>
            </tr>
            @endforeach
            </table>
            
          
             </div>
        </div>
    </div>
</div>
</body>
</html>