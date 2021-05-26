<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmith</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

.s1{
        position: absolute;
        top:330px;
        left: 36%;
        transform: translate(-50%,-50%);
        width: 940px;
        height: 620px;
       border-radius:5px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.8);
       color:white; 
    }
    body {
     
   background-image: url('https://mocah.org/uploads/posts/1084051-illustration-Batman-cartoon-Grant-Morrison-Batman-and-Robin-Damian-Wayne-Dick-Grayson-Frank-Quitely-font.jpg');
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
 

</head>
<body>
<?php
use App\Http\Controllers\BookController;
$tp=BookController::totalprice();
?>
<br><br>
<div class="container">
    <div class="row">
    <div class="s1">
    <center><h2>CART DETAILS</h2></center>
    <b><hr><hr></b>
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($test as $t)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ URL ::asset('assets/book_img/'.$t->book->bimage) }}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $t->book->bname }}</h4>
                                <h5 class="media-heading"> by  {{ $t->book->bauthor }}</h5>
                                <span>Publisher: </span><span class="text-success"><strong>{{ $t->book->bpublisher }}</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <h4 class="media-heading">{{ $t->qty }}</h4>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>Rs. {{ $t->book->bprice }}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>Rs. {{ $t->qtyprice }}</strong></td>
                        <td class="col-sm-1 col-md-1">
                        
                        
                        <span class="glyphicon glyphicon-remove"></span> 
                        <a class="btn btn-danger"  href={{"/removebook/".$t->id}}>Remove </a>
                           </td>
                    </tr>
                    @endforeach
                    
                        <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>Rs.{{ $tp }} </strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <span class="glyphicon glyphicon-shopping-cart"></span> 
                        <a class="btn btn-default"  href="/customerbook">Continue Shopping</a>
                        </td>
                        <td>
                        
                        <span class="glyphicon glyphicon-play"></span> 
                        <a class="btn btn-success"  href="/payment">Checkout </a>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 
</div>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Delete!!</h4>	
				<p>Are you sure want to remove ????</p>
				<a href={{"/removebook/".$t->book->id}}>Confirm</a>
			</div>
		</div>
	</div>
</div>   

</body>
</html>