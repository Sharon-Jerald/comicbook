<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RequestbookModel;

use App\Models\CustomerModel;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function abc()
    {
        $abc = RequestbookModel::with('customer')->get();
        return view('adminviewrequest',compact('abc'));
    }

   
    public function index()
    {
        $data = CustomerModel::where('cmail','=', session('LoggedUser'))->first();
        $rbooks = RequestbookModel::where('cid','=',$data->id)-> with('customer')->get();
        return view('viewrequest',compact('rbooks'));
    }

    public function adminindex()
    {
        $rbooks=RequestbookModel::all();

        return view('adminviewrequest',compact('rbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rqstcreate()
    {
        return view('rqstbook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    public function rqststore(Request $request)
    {
        $getRBCid= request('cid');
        $getRBName= request('rbname');
        $getRBAuthor= request('rbauthor');
        $getRBPublisher= request('rbpublisher');
        $getRBQty= request('rbqty');   

        $rqstbook=new RequestbookModel();

        $rqstbook->cid=$getRBCid;
        $rqstbook->rbname=$getRBName;
        $rqstbook->rbauthor= $getRBAuthor;
        $rqstbook->rbpublisher=$getRBPublisher;
        $rqstbook->rbqty=$getRBQty;
        
        $rqstbook->save();

        return view('custhome');
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
       
        $rbooks=RequestbookModel::find($id);
        return view('editrequest',compact('rbooks'));
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
        $rbook=RequestbookModel::find($id);

        $getRBCid= request('cid');
        $getRBName= request('rbname');
        $getRBAuthor= request('rbauthor');
        $getRBPublisher= request('rbpublisher');
        $getRBQty= request('rbqty');   

    
        $rbook->cid=$getRBCid;
        $rbook->rbname=$getRBName;
        $rbook->rbauthor= $getRBAuthor;
        $rbook->rbpublisher=$getRBPublisher;
        $rbook->rbqty=$getRBQty;
        
        $rbook->save();

        return redirect('/viewrequest');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteview($id)
    {
        
            $data=RequestbookModel::find($id);
            $data->delete();
            return redirect('/viewrequest');
         

    }

    public function destroy($id)
    {
        $rbook=RequestbookModel::find($id);

        $rbook->delete();

        return redirect('/viewrequest');
    }
}
