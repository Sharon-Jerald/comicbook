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
        top:350px;
        left: 25%;
        transform: translate(-50%,-50%);
        width: 450px;
        height: 500px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.5);
       color:burlywood; 
    }
    body {
  background-image: url('https://wallpapercave.com/wp/wp1816224.jpg');
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
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="/login">Login</a></li>
          <li><a class="nav-link scrollto active" href="/register">Register</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>

  <br><br><br><br><br>

<div class="container">
    <div class="row">
    <div class="s1">
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

        <form action="/customerread" method="post">
       @if(Session::get('success'))
       <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::get('fail'))
       <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif

        {{ csrf_field() }}

        <table class="table table-borderless" style="width:440px;">
        
        <tr>
            
            <td><input name="name" placeholder="Name" type="text" class="form-control"></td>
           
        </tr>
        <tr>
            
            <td><input name="address" placeholder="Address" type="text" class="form-control"></td>
           
        </tr>
        <tr>
          
            <td><input name="city" placeholder="City" type="text" class="form-control"></td>
            
        </tr>
        <tr>
          
            <td><input name="district" placeholder="District" type="text" class="form-control"></td>
            
        </tr>
        <tr>
           
            <td><input name="phone" placeholder="Phone No" type="number" pattern=".{10}" class="form-control"></td>
           
        </tr>
        <tr>
           
            <td><input name="cmail" placeholder="Email Id" type="text" class="form-control"></td>
          
        </tr>
        <tr>
            
            <td><input name="password" placeholder="Password" type="password" class="form-control"></td>
           
        </tr>
        <tr>
           
            <td><input name="confirmpassword" placeholder="Confirm Password" type="password" class="form-control"></td>
           
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><button style="width:200px;" class="btn btn-success">REGISTER</button>
            <a class="btn btn-success" style="width:200px;"  href="/">CANCEL</a></td>
        </tr>
        </table>
        </form>
        </div>
        </div>
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror 
        @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        @error('city')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        @error('district')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        @error('cmail')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        @error('confirmpassword')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>