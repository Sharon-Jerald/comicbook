<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmith</title>


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



    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
td,th,h2{
  color:black;
}
{
        position: absolute;
        top:360px;
        left: 37%;
        transform: translate(-50%,-50%);
        width: 830px;
        height: 550px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.7);
       color:white; 
    }
    body {
     
     background-image: url('https://mocah.org/uploads/posts/1084051-illustration-Batman-cartoon-Grant-Morrison-Batman-and-Robin-Damian-Wayne-Dick-Grayson-Frank-Quitely-font.jpg');
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-size: cover;
   }
}
</style>

</head>

<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/custhome">Home</a></li>
       
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
          <li><a class="nav-link scrollto" href="/cartlist">Cart</a></li>
          <li><a class="nav-link scrollto active" href="/profile">Profile</a></li>
          <li><a class="getstarted scrollto" href="/logout">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<body>
   <br><br><br><br>

<div class="container">
    <div class="row">
    
    <div class="s1">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
        <center><h2>MY ORDERS</h2></center>
            <table style="width:750px;" class="table ">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th >Price</th>
                        <th>Total</th>
                        <th>Date </th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($orders as $t)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ URL ::asset('assets/book_img/'.$t->book->bimage) }}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $t->book->bname }}</h4>
                                <h5 class="media-heading"> by  {{ $t->book->bauthor }}</h5>
                               <span class="text">{{ $t->book->bpublisher }}</span>
                            </div>
                        </div></td>
                        <td >
                        <h4 class="media-heading">{{ $t->oqty }}</h4>
                        </td>
                        <td ><strong>Rs. {{ $t->book->bprice }}</strong></td>
                        <td ><strong>Rs. {{ $t->ototal }}</strong></td>
                        <td><strong> {{ $t->odate }}</strong></td>
                        <td><strong> {{ $t->ostatus }}</strong></td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div> 
</div>

</body>
</html>