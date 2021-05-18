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
td,h2{
  color:white;
}
.s1{
        position: absolute;
        top:300px;
        left: 40%;
        transform: translate(-50%,-50%);
        width: 600px;
        height: 100px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.1);
       color:burlywood; 
    }
    body {
  background-image: url('https://wallpapercave.com/wp/Fs4Umml.jpg');
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
          <li><a class="nav-link scrollto" href="/adminhome">Home</a></li>
                  
          <li><a class="nav-link scrollto" href="/viewcustomer">Customers</a></li>
          <li class="dropdown  active"><a href="#"><span>Add</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/genre">Add Genre</a></li>
              <li><a href="/addbook">Add Books</a></li>            
            </ul>
          </li>
          <li class="dropdown  "><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="/viewbook">View Books</a></li>
              <li><a href="/adminviewrequest">Requested books</a></li>
              
            </ul>
          </li>
          <li class="dropdown  "><a href="#"><span>Orders</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a href="/adminvieworder">View orders</a></li>
              <li><a href="/report">Generate Report</a></li>
              
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="/logout">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    
<br><br><br><br><br>
<div class="container">
<center><h2>ADD GENRE</h2></center>

    <div class="row">
    <div class="s1">
    
        <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
        
        <form action="/genreadd" method="post" >
       
       {{ csrf_field() }}


        <table style="width:420px" class="table table-borderless">
        
          <tr>
              <td>Name:</td>
              <td><input name="gname" type="text" class="form-control"></td>
          </tr>

          <tr>
              <td><center><button class="btn btn-danger">SUBMIT</button></center></td>
              <td><center><a class="btn btn-danger"  href="/adminhome">CANCEL</a></center></td>
          </tr>
          </table>
          </form>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>