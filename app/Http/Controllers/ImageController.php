<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;

class ImageController extends Controller
{
    public function index($id){
        $product = Product::find($id);  
        $images = $product->images;
        return view('admin.products.image.index')->with(compact('product','images'));
    }

    public function store(Request $request,$id){
        $file=$request->file('photo');
        $path=public_path().'/images/products';
        $file_name=uniqid().$file->getClientOriginalName();
        $file->move($path,$file_name);
        
        $product_image = new ProductImage();
        $product_image->image = $file_name;
        $product_image->product_id = $id;
        $product_image->save();
        return back();
    
    }

    public function destroy(){
    }
}
