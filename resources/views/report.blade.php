<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booksmith</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/minty/bootstrap.min.css"
    />
    <style>

body {
  background-image: url('https://images.unsplash.com/photo-1547555999-14e818e09e33?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

    </style>

</head>

<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" style=" background-image:url('https://wallpapercave.com/wp/wp4825790.jpg');   " id="accordionSidebar">


           

          
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style=" background-image:url();   ">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">BOOKSMITH</h1>

                        
                        <a class="nav-link " href="/adminhome" role="button"
                                aria-haspopup="true">
                                <button class="btn btn-primary">Home</button>
                
                            </a>
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <button class="btn btn-primary">Generate Reports</button>
                
                            </a>
                            <li class="nav-item dropdown no-arrow">
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                              Download
                                 
                                </a>
                            </div>
                        </li>
                   
                    </div>

                    

                    <!-- Content Row -->
                    <div class="row" >

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-10">
                                <div class="card-body"  style="background: rgba(0,0,0,0.9);">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$customercount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-11">
                                <div class="card-body" style="background: rgba(0,0,0,0.9);">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Orders</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$ordercount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-10">
                                <div class="card-body" style="background: rgba(0,0,0,0.9);">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Books
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$bookcount}}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-10">
                                <div class="card-body" style="background: rgba(0,0,0,0.9);">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$requestcount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <br>
                    <br> <br> <br> 
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-9"  style="width:1300px;">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#006680;">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                           <h5><b>  Order Report</b></h5></div>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           
                                        </a>
                                       
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body"  style="background: rgba(0,0,0,0.9);">
                                   


                                    <form action="orderreport" method="post" > 
                                    
                                     {{csrf_field()}}

                                    <input type="text" value="Bookings" class="form-control" disabled>
                                <br>
                                                   
                             <h5 class="form-control"  >Type :
                             <input id="a" type="radio" name="type" value="Daily">Daily 
                             <input id="b" type="radio" name="type" value="Monthly">Monthly
                             <input id="c" type="radio" name="type" value="Yearly">Yearly
                             <input id="d" type="radio" name="type" value="Range">Between Two Dates</h5>

                             
                                
                                <div class="customer" >
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="date" name="date" class="form-control" placeholder="Date" />
                                    </div>
                                    </div>

                                    <div class="year" >
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="number" name="year" class="form-control" placeholder="Year" />
                                    </div>
                                    </div>

                                    <div class="range" >
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="date" name="date1" class="form-control" placeholder="Start date" />
                                        <br>
                                        <input type="date" name="date2" class="form-control" placeholder="End date" />
                                
                                    </div>
                                    </div>

                                    <div class="month" >
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                          <select class="form-control" name="month"  >
                                          <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                   
                                </select>
                                </div>
                                    </div>
                        
                              <br>
                                <button  class="btn btn-primary">View</button>
                                    </form>
                                    <br>
                                    <br>
                                    
                                    <section id="booking">
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>View <b>Orders</b></h2>
					</div>
					<div class="col-sm-6">
							
					</div>
				</div>
			</div>
			<table id="example" class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Book Name</th>
                        <th>Order Quantity</th>
                        <th>Order Price</th>
                        <th>Total</th>
                        <th>Date</th>
                        
					</tr>
				</thead>
				<tbody>
					      
                @foreach($bookings as $booking)
                    <tr>
                   
                        <td>{{$booking->id}}</td>
                        <td>{{$booking->customer->cname}} </td>
                        <td>{{$booking->book->bname}} </td>
                        <td>{{$booking->oqty}}</td>
                        <td>{{$booking->oprice}}</td>
                        <td>{{$booking->ototal}}</td>
                        <td>{{$booking->odate}}</td>
                        
						<td>
					    </td>
                        </tr>
                        @endforeach
				</tbody>
			</table>
			
		</div>
	</div>     
    </ul>   
</div>

</section>



                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose the format</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                <button class="btn btn-primary" style="margin-left:150px;" id="pdf">Download in PDF</button>
                <br>
                <br>
                <button class="btn btn-primary" style="margin-left:150px;" id="json">Download in JSON</button>
                <br>
                <br>
                <button class="btn btn-primary" style="margin-left:150px;" id="csv">Download in CSV</button>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        $(document).ready(function(){
 
 $(".customer").toggle();
 
 $(".month").toggle();

 $(".range").toggle();

 $(".year").toggle();


});

$(document).ready(function(){
$("#a").click(function(){
 $(".customer").show();
 $(".month").hide();
 $(".year").hide();
 $(".range").hide();
});
});

$(document).ready(function(){
$("#b").click(function(){
  $(".month").show();
  $(".customer").hide();
  $(".year").hide();
  $(".range").hide();
});
});

$(document).ready(function(){
$("#c").click(function(){
 $(".customer").hide();
 $(".year").show();
 $(".month").hide();
 $(".range").hide();
});
});

$(document).ready(function(){
$("#d").click(function(){
 $(".customer").hide();
 $(".year").hide();
 $(".month").hide();
 $(".range").show();
});
});


</script>
<script type="text/javascript" src="src/jquery-3.3.1.slim.min.js"></script>

<script type="text/javascript" src="src/jspdf.min.js"></script>

<script type="text/javascript" src="src/jspdf.plugin.autotable.min.js"></script>

<script type="text/javascript" src="src/tableHTMLExport.js"></script>

<script type="text/javascript">
  
  $("#json").on("click",function(){
    $("#example").tableHTMLExport({
      type:'json',
      filename:'sample.json'
    });
  });

  $("#pdf").on("click",function(){
    $("#example").tableHTMLExport({
      type:'pdf',
      filename:'sample.pdf'
    });
  });

  $("#csv").on("click",function(){
    $("#example").tableHTMLExport({
      type:'csv',
      filename:'sample.csv'
    });
  });

</script>

</body>

</html>