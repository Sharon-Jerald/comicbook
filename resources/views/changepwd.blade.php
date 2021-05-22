<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.nav-pills-custom .nav-link {
    color: #000000;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #050505;
    background: #050505;
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}


body {
  
    min-height: 100vh;
    
}
</style>
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">Comic Book</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/custhome">Home</a></li>
          
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
              <li class="dropdown"><a href="#"><span>By Author name</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <form action="searchauthor" method="post">
                {{csrf_field()}}
                  <table class="table table borderless" style="width:300px;">
                   <tr>
                      <td><input type="text" class="form-control" placeholder="Enter author name" name="bauthor" required></td>       
                     <td><button class="btn btn-dark">Search</button></td>
                   </tr>
                 </table>
                </form>
              </ul>
              </li>
              <li class="dropdown"><a href="#"><span>By Book name</span> <i class="bi bi-chevron-right"></i></a>
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
         </ul>
          <li><a class="nav-link scrollto active" href="/cartlist">Cart</a></li>
          <li><a class="nav-link scrollto" href="/profile">Profile</a></li>
          <li><a class="getstarted scrollto" href="/logout">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<body>
  <br><br>
<section class="py-5 header">
    <div class="container py-4">
        

        <div class="row">
       
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom"  role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Change Password</span></a>

                    <a class="nav-link mb-3 p-3 shadow"  data-toggle="pill" href="/profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Profile</span></a>

                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  
                        <h4 class="font-italic mb-4"> </h4>
                        <form action="/change" method="post" >
       
       {{ csrf_field() }}
      
               <table class="table table-borderless">
    <tr>
        <td>Old Password:</td>
        <td><input type="text"  name="oldpass" class="form-control"></td>
    </tr>
    <tr>
        <td>New Password:</td>
        <td><input type="text"  name="newpass" class="form-control"></td>
    </tr>
    <tr>
        <td>Confirm Password:</td>
        <td><input type="text"  name="cnewpass" class="form-control"></td>
    </tr>
    <tr>
        <td><button class="btn btn-success">RESET</button></td>
        <td><button class="btn btn-success">CANCEL</button></td>
    </tr>
    </table>
    </form>
            </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>  

</body>
</html>