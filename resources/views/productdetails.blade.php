<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booksmith</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>

.product_view .modal-dialog{max-width: 800px; width: 100%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}
</style>
</head>
<body>

    <div class="modal-dialog">
        <div class="modal-content">
        
            <div class="modal-header">
                <a href="/customerbook" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">{{$product['bname']  }}</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 product_img">
                        <img src="{{ URL ::asset('assets/book_img/'.$product->bimage) }}" class="img-responsive">
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>Genre: <span>{{$product['bgenre']  }}</span></h4>
                        <h4>Author: <span>{{$product['bauthor'] }}</span></h4>
                        <p>{{$product['bdescription'] }}</p>
                        <h4 > Rs.{{$product['bprice'] }} </h4>
                        <div class="row">
                           
                            <div class="col-md-4 col-sm-12">
                                
                            </div>
                            <!-- end col -->
                        </div>
                        
                        <div class="btn-ground" >
                        <form action="/add_to_cart" method="POST">
                        {{ csrf_field() }}
                        <select class="form-control" name="qty">
                                    
                                    <option value="1"  selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
<br>
                        <input type="hidden" name="book_id" value={{ $product['id']  }}>
                        
                        <button class="btn btn-primary">Add to cart</button>
                        
                        </form>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

  
</body>
</html>