<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Citizen;
class CititzenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function addservice(Request $request)
    {
               $find= new Citizen;
        $find->s_n=$request->s_n;

        $find->service=$request->service;
        $find->document=$request->document;
        $find->rate=$request->rate;
        $find->responsible=$request->responsible;
        $find->listener=$request->listener;
        $find->time=$request->time;
        $find->related_office=$request->related_office;
        $find->remarks=$request->remarks;
        $find->save();
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editService(Request $request)
    {
        $find=Citizen::find($request->id);
        $find->service=$request->service;
        $find->document=$request->document;
        $find->rate=$request->rate;
        $find->responsible=$request->responsible;
        $find->listener=$request->listener;
        $find->time=$request->time;
        $find->related_office=$request->related_office;
        $find->remarks=$request->remarks;
        $find->save();
        return redirect()->back();
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
        $del= Citizen::find($id);
        $del->delete();
        return redirect()->back();
    }
}
