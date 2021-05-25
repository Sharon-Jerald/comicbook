<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\BookModel;

use App\Models\RequestbookModel;

use App\Models\CustomerModel;

use Illuminate\Support\Facades\Session;

use Nexmo\Laravel\Facade\Nexmo;

use App\Models\LoginModel;

use App\Models\OrderModel;

use App\Models\GenreModel;


use Carbon\Carbon;

use App\Models\CartModel;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count=BookModel::count();
        if($count==0)
        {
            return view('error');
        }
        $books=BookModel::all();

        return view('viewbook',compact('books'));
    }

    public function custbookview()
    {
        $books=BookModel::all();

        return view('customerbook',compact('books'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addbook');
    }

    public function success()
    {
        return view('success');
    }

    public function createg()
    {
        return view('genre');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function getAllGenre()
    {
        $bgenre=GenreModel::all();

        return view('addbook',compact('bgenre'));

    }

    public function storeg(Request $request)
    {
        $getGenre= request('gname');
        $genre=new GenreModel();
        $genre->gname=$getGenre;
        $genre->save();
        return view('adminhome');
    }

    public function store(Request $request)
    {
        $customMessages = [
            'bname.required'  => 'The name field is required to be filled',
            'bauthor.required' => 'The author field is required to be filled',
            'bgenre.required'  => 'The genre field is required to be filled',
            'bpublisher.required' => 'The publisher field is required to be filled',
            'bdescription.required'  => 'The description no field is required to be filled',
            'bimage.required' => 'The image field is required to be filled',
            'bprice.required'  => 'The price field is required to be filled',
            'bstock.required' => 'The stock field is required to be filled'
          ];
       $request->validate([
           'bname'=>'required',
           'bauthor'=>'required',
           'bgenre'=>'required',
           'bpublisher'=>'required',
           'bdescription'=>'required',
           'bimage'=>'required',
           'bprice'=>'required',
           'bstock'=>'required'
       ], $customMessages);


        $getBName= request('bname');
        $getBAuthor= request('bauthor');
        $getBGenre= request('bgenre');
        $getBPublisher= request('bpublisher');
        $getBDescription= request('bdescription');
        $getBImage=$request->file('bimage');
        $getBPrice=request('bprice');
        $getBStock= request('bstock');
       $name=$getBImage->getClientOriginalName();

        $getBImage->move(public_path('assets/book_img'),$name);        

      

        $book=new BookModel();
        $book->bname=$getBName;
        $book->bauthor= $getBAuthor;
        $book->bgenre=$getBGenre;
        $book->bpublisher=$getBPublisher;
        $book->bdescription=$getBDescription;
        $book->bimage=$name;
        $book->bprice=$getBPrice;
        $book->bstock=$getBStock;
        

        $save=$book->save();
        if($save){
            echo "<script>alert('Successfully Added');window.location='/viewbook';</script>";
        }else{
            return back()->with('fail','Something went wrong,try again!!!');
        }
      
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function search(Request $request)
    {
        
        $getBname=request('bname');
   
        $books=BookModel::query()
        ->where('bname', 'LIKE' , "%{$getBname}%")
        ->get();
        return view('customerbook',compact('books'));
          
    }

    public function searchauthor(Request $request)
    {
        
        $getBname=request('bauthor');
   
        $books=BookModel::query()
        ->where('bauthor', 'LIKE' , "%{$getBname}%")
        ->get();
        return view('customerbook',compact('books'));
          
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books=BookModel::find($id);
        return view('editview',compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customMessages = [
            'bname.required'  => 'The name field is required to be filled',
            'bauthor.required' => 'The author field is required to be filled',
            'bgenre.required'  => 'The genre field is required to be filled',
            'bpublisher.required' => 'The publisher field is required to be filled',
            'bdescription.required'  => 'The description no field is required to be filled',
            'bimage.required' => 'The image field is required to be filled',
            'bprice.required'  => 'The price field is required to be filled',
            'bstock.required' => 'The stock field is required to be filled'
          ];
       $request->validate([
           'bname'=>'required',
           'bauthor'=>'required',
           'bgenre'=>'required',
           'bpublisher'=>'required',
           'bdescription'=>'required',
           'bimage'=>'required',
           'bprice'=>'required',
           'bstock'=>'required'
       ], $customMessages);


        $book=BookModel::find($id);

        $getBName= request('bname');
        $getBAuthor= request('bauthor');
        $getBGenre= request('bgenre');
        $getBPublisher= request('bpublisher');
        $getBDescription= request('bdescription');
        $getBImage=$request->file('bimage');
        $getBPrice=request('bprice');
        $getBStock= request('bstock');
       $name=$getBImage->getClientOriginalName();

        
       $book->bname=$getBName;
       $book->bauthor= $getBAuthor;
       $book->bgenre=$getBGenre;
       $book->bpublisher=$getBPublisher;
       $book->bdescription=$getBDescription;
       $book->bimage=$name;
       $book->bprice=$getBPrice;
       $book->bstock=$getBStock;

        $book->save();
        $save=$book->save();
        if($save){
            echo "<script>alert('Successfully Added');window.location='/viewbook';</script>";
        }else{
            return back()->with('fail','Something went wrong,try again!!!');
        }

        return redirect('/viewbook');

    }


    public function productdetails($id)
    {
        $data=BookModel::find($id);
        return view('productdetails',['product'=>$data]);
    }

    public function deleteview($id)
    {
        
          
            
        try{
        $data=BookModel::find($id);
        $data->delete();
        return redirect('/adminhome');
             } catch (\Illuminate\Database\QueryException $e) {
        echo "<script>alert('Cannot delete or update a parent row: a foreign key constraint fails');window.location='/adminhome';</script>"; 
    }
    }

    public function removecart($id)
    {
        $data=CartModel::find($id);
        $data->delete();
        return redirect('/customerbook');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=BookModel::find($id);

        $book->delete();

        return redirect('/adminhome');
    }

    public function addtocart(Request $request)
    {
        $data = CustomerModel::where('cmail','=', session('LoggedUser'))->first();
       if($request->session()->has('LoggedUser'))
       {
           $cart=new CartModel;

           $getQty= request('qty');

           $cart->qty=$getQty;

           $cart->customer_id=$data->id;
           $cart->book_id=$request->book_id;

           $data=BookModel::select('bprice')->where ('id','=',$request->book_id)->first();
           $price=$data->bprice*$getQty;

           $cart->qtyprice=$price;

           $stock=BookModel::where ('id','=',$cart->book_id)->first();
       
              if($stock->bstock==0){
                echo "<script>alert('Product is out of stock!!!');window.location='/customerbook';</script>";
               }
            else{
               $cart->save();
               return redirect('/customerbook');
           }
        }
       else{
        return redirect('/login');
       }
    }

    function cartlist(){
       $custid= CustomerModel::where('cmail','=', session('LoggedUser'))->first();
       $count=CartModel::where ('customer_id','=',$custid->id)->count();
       if($count==0)
       {
           return view('error');
       }
       
       $customerId=$custid->id;
       $data=DB::table('cart_models')
       ->join('book_models','cart_models.book_id','=','book_models.id') 
       ->where('cart_models.customer_id',$customerId)
       ->select('cart_models.*')
       ->get();

    //    $total=$products=DB::table('cart_models')
    //     ->join('book_models','cart_models.book_id','=','book_models.id') 
    //     ->where('cart_models.customer_id',$customerId)
    //     ->sum('cart_models.qtyprice');

      $test = CartModel::with('book')
      ->join('book_models','cart_models.book_id','=','book_models.id') 
       ->where('cart_models.customer_id',$customerId)
       ->select('cart_models.*')
      ->get();
   

       return view('cartlist',['data'=>$data,'test'=>$test]);
    }


function payment()
{
    $custid= CustomerModel::where('cmail','=', session('LoggedUser'))->first();
    $customerId=$custid->id;
    
    $total=$products=DB::table('cart_models')
    ->join('book_models','cart_models.book_id','=','book_models.id') 
    ->where('cart_models.customer_id',$customerId)
    ->sum('cart_models.qtyprice');

   
    return view('payment',['total'=>$total]);
    
}

public function order(Request $request)
    {
        $userId= CustomerModel::where('cmail','=', session('LoggedUser'))->first();
        $carts=DB::table('cart_models')
        ->where('customer_id','=',$userId->id)->get();
        $cdate = Carbon::now();
        $odate=$cdate->toDateString();
        foreach($carts as $cart)
        {
            $products=DB::table('book_models')
            ->where('id','=',$cart->book_id)->get();
            foreach($products as $product)
            {
                $order=new OrderModel();
                $order->cid=$userId->id;
                $order->proid=$cart->book_id;
                $order->oqty=$cart->qty;
                $order->oprice=$product->bprice;
                $order->ototal=($cart->qty)*($product->bprice);
                $order->odate=$cdate;
                
               
                $order->save(); 

                Nexmo::message()->send([
                    'to' => $userId->cphone,
                    'from' => '16105552344',
                    'text' => 'Thank You!Your order has been placed.'
                ]);
        
                DB::table('book_models')
                ->where('id', $cart->book_id)
                ->update(['bstock' => ($product->bstock-$cart->qty)]);

                DB::table('cart_models')->delete($cart->id);
            }
        }
        return redirect('/success');
    }
    function myorder(){
        $data = CustomerModel::where('cmail','=', session('LoggedUser'))->first();
        $count=OrderModel::where ('cid','=',$data->id)->count();
        if($count==0)
        {
            return view('error');
        }
        
        $orders=OrderModel::where('cid','=',$data->id)-> with('customer','book')->get();
        return view('/orders',compact('orders'));
    }


    public function vieworder()
    {
        $count=OrderModel::count();
        if($count==0)
        {
            return view('error');
        }
        $vieworder = OrderModel::with('customer','book')->get();
        return view('adminvieworder',compact('vieworder'));
    }

    public function report()
    {

        $ordercount=OrderModel::count();
      $customercount=CustomerModel::count();
      $bookcount=BookModel::count();
      $requestcount=RequestbookModel::count();
        $bookings = OrderModel::with('customer','book')->get();
        return view('report',compact('bookings','ordercount','customercount','bookcount','requestcount'));
    }


    public function orderreport(Request $request)
    {
    
        $ordercount=OrderModel::count();
      $customercount=CustomerModel::count();
      $bookcount=BookModel::count();
      $requestcount=RequestbookModel::count();
      $gettype=request('type');
      
      
      if($request->type=="Daily")
      {
          $getdate=request('date');
        
          $bookings=OrderModel::select('*')
          ->whereDate('odate','=',$getdate)
          ->get();
          return view('report',compact('bookings','ordercount','customercount','bookcount','requestcount'));
        }

      if($request->type=="Monthly")
      {
          $getmonth=request('month');
            
          $bookings=OrderModel::select('*')
          ->whereMonth('odate',$getmonth)
          ->get();
          return view('report',compact('bookings','ordercount','customercount','bookcount','requestcount'));
      }

      
      if($request->type=="Yearly")
      {
          $getyear=request('year');
            
          $bookings=OrderModel::select('*')
          ->whereYear('odate',$getyear)
          ->get();
          return view('report',compact('bookings','ordercount','customercount','bookcount','requestcount'));
      }

      if($request->type=="Range")
      {
          $getdate1=request('date1');
          $getdate2=request('date2');
            
          $bookings=OrderModel::select('*')
          ->whereBetween('odate', [$getdate1, $getdate2])->get();
          
          return view('report',compact('bookings','ordercount','customercount','bookcount','requestcount'));
      }

      
         
       } 

}
