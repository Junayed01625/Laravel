<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BoloController extends Controller
{
  public function Post()
  {
    return view('posts.student');

  }
  public function add_category()
  {
    return view('posts.add_category');

  }
  public function store_category(Request $request)
  {
    $data=array();
    $data['name']=$request->name;
    $data['slug']=$request->slug;
    $category=DB::table('categories')->insert($data);
    if($category){
      $notification=array(
        'message'=>'Successfully Category Inserted',
        'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);
    }else{
      $notification=array(
        'message'=>'Something Went Wrong',
        'alert-type'=>'error'
      );
      return Redirect()->back()->with($notification);
    }

  }
}
