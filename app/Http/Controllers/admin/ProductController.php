<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cat;
class ProductController extends Controller
{
    public function categories(){
        $data['cats']=Cat::get();
        return view('admin.products.cats')->with($data);
    }
    public function index($cat){
        $data['products']=Product::where('cat_id','=',$cat)->get();
        $data['cat']=Cat::where('id','=',$cat)->get();
        return view('admin.products.index')->with($data);

    }
    public function cat($cat){
       
        $data['cat']=Cat::where('id','=',$cat)->get();
        // dd(Cat::where('id','=',$cat)->get());
        return view('admin.products.store')->with($data);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:200',
            'price'=>'required|numeric',
            'img'=>'required|image|max:2048',
        ]);
        if($request->hasFile('img')){
            $destination_Path='public\uploads\products';
            $image=$request->file('img');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('img')->storeAs( $destination_Path, $image_name);

        }
        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'img'=>$image_name,
            'cat_id' =>$request->cat_id,
        ]);
        // dd($request->all());

       return redirect("dashboard/product/index/$request->cat_id");
    }
}
