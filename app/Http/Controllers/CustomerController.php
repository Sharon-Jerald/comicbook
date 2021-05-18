<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CustomerModel;

use App\Models\LoginModel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=CustomerModel::all();

        return view('viewcustomer',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }
    
    public function adminhome()
    {
        $data = ['LoggedUserInfo'=>CustomerModel::where('cmail','=', session('LoggedUser'))->first()];
        return view('adminhome',$data);
    }

     public function custhome()
    {
        $data = ['LoggedUserInfo'=>CustomerModel::where('cmail','=', session('LoggedUser'))->first()];
        return view('custhome',$data);
    }

    public function create()
    {
        return view('register');
    }

    public function custid()
    {
        $data = ['LoggedUserInfo'=>CustomerModel::where('cmail','=', session('LoggedUser'))->first()];
        return view('rqstbook',$data);
    }

    public function custidedit()
    {
        $data = ['LoggedUserInfo'=>CustomerModel::where('cmail','=', session('LoggedUser'))->first()];
        return view('editrequest',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customMessages = [
            'name.required'  => 'The name field is required to be filled',
            'address.required' => 'The address field is required to be filled',
            'city.required'  => 'The city field is required to be filled',
            'district.required' => 'The district field is required to be filled',
            'phone.required'  => 'The phone no field is required to be filled',
            'mail.required' => 'The mail id field is required to be filled',
            'password.required'  => 'The password field is required to be filled',
            'confirmpassword.required' => 'The confirm password field is required to be filled'
          ];
       $request->validate([
           'name'=>'required',
           'address'=>'required',
           'city'=>'required',
           'district'=>'required',
           'phone'=>'required|regex:/(01)[0-9]{9}/',
           'mail'=>'required|email|unique:customer_models',
           'password'=>'required|min:5|max:12',
           'confirmpassword'=>'required'
       ], $customMessages);


        $getName= request('name');
        $getAddress= request('address');
        $getCity= request('city');
        $getState= request('district');
        $getPhone=request('phone');
        $getMail= request('mail');
        $getPwd= request('password');
        $getCpwd= request('confirmpassword');

        $customer=new CustomerModel();

        $customer->cname=$getName;
        $customer->caddress=$getAddress;
        $customer->ccity=$getCity;
        $customer->cstate=$getState;
        $customer->cphone=$getPhone;
        $customer->cmail=$getMail;
        

        $customer->save();

        $user=new LoginModel();

        
        $user->username=$getMail;
        $user->password=$getPwd;
        $user->usertype="customer";

        $save=$user->save();
        if($save){
            return back()->with('success','You have successfully registered!!!!');
            return view('login');
        }else{
            return back()->with('fail','Something went wrong,try again!!!');
        }
        
    }

    function check(Request $request){
        //Validate requests

        
        $userInfo = LoginModel::where('username','=', $request->uname)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if($request->pass== $userInfo->password){
                $request->session()->put('LoggedUser', $userInfo->username);

                if($userInfo->usertype=="customer")
                {
                    return redirect('custhome');
                }
                if($userInfo->usertype=="Admin")
                {
                    return redirect('/adminhome');
                }

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/login');
        }
    }
    public function dashboard()
    {
        $data = ['LoggedUserInfo'=>CustomerModel::where('cmail','=', session('LoggedUser'))->first()];
        return view ('welcome',$data);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
