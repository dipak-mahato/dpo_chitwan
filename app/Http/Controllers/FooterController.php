<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foot;

class FooterController extends Controller
{
  public function index(){
  	$footers=Foot::all();
  	return view('admin.footer',compact('footers'));
  }
  public function addfooter(Request $request){
  	$footer=new Foot;
  	$footer->footer=$request->footer;
  	$footer->save();
  	return redirect()->back();
  }
    public function editfooter(Request $request){
  	$footer=Foot::find($request->id);
  	$footer->footer=$request->footer;
  	$footer->save();
  	return redirect()->back();
  }
      public function destroy($id){
    $footer=Foot::find($id);
     $footer->delete();
    return redirect()->back();
  }
}
