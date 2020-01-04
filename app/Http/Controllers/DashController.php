<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use App\Notice;
use App\Foot;
use App\Slider;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::all();
    $foots=Foot::all();
    $notices=Notice::all();
     $new=Citizen::all();
     return view('newdash', compact('new','notices','foots','sliders'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
     $new=Citizen::all();
     return view('newdash', compact('new'));
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

    public function adminnotice()

    {
        $notices=Notice::all();
       return view('admin.admindash', compact('notices'));
    }

    public function services(){
        $services=Citizen::all();
        return view('admin.service', compact('services'));
    }

    public function editservice(){
        
    }
}
