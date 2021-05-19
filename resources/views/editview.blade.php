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
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin - v4.1.0
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">Comic Book</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/adminhome">Home</a></li>
              
          <li><a class="nav-link scrollto" href="/viewcustomer">Customers</a></li>
          
          <li class="dropdown "><a href="#"><span>Add</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/genre">Add Genre</a></li>
              <li><a href="/addbook">Add Books</a></li>            
            </ul>
          </li>
          <li class="dropdown  active"><a href="#"><span>View</span> <i class="bi bi-chevron-down"></i></a>
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

<br><br><br>
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
<br>

<form action="/bookeditprocess/{{ $books->id }}" method="post" enctype="multipart/form-data">

{{ csrf_field() }}

<table class="table">

 <tr>
     <td> Name </td>
     <td>
      <input value="{{   $books->bname }}" name="bname" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>Author</td>
     <td>       <input value="{{   $books->bauthor}}" name="bauthor" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Genre</td>
     <td>      <input value="{{   $books->bgenre}}" name="bgenre" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Publisher </td>
     <td>      <input value="{{   $books->bpublisher}}" name="bpublisher" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Description </td>
     <td>      <input value="{{   $books->bdescription}}" name="bdescription" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Image</td>
     <td>       <input value="{{   $books->bimage}}" name="bimage" type="file" class="form-control">
</td>
 </tr>
 <tr>
     <td>Price</td>
     <td>      <input value="{{   $books->bprice }}" name="bprice" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Stock </td>
     <td>      <input value="{{   $books->bstock }}" name="bstock" type="text" class="form-control">
</td>
 </tr>

 <tr>
     <td></td>
     <td> <button class="btn btn-success"> SUBMIT </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>