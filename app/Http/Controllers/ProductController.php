<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;

class ProductController extends Controller
{

    //Listar
    public function index(){
        $products = Product::paginate(10);  
        return view('admin.products.index')->with(compact('products'));
    }

    //formulario create
    public function create(){
        return view('admin.products.create');
    }

    //registrar en la bd new
    public function store(Request $request){
        //dd($request->all());
        $product= new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save();//insert
        return redirect('/admin/products');
    }

    //formulario de edición
    public function edit($id){
        //return "Mostrar aquí el formulario de edición para el producto con $id";
        $product=Product::find($id);
        return view('admin.products.edit')->with(compact('product'));
    }

    //registrar en la bd edit
    public function update(Request $request,$id){
        //dd($request->all());
        $product= Product::find($id);
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save();//insert - Update
        return redirect('/admin/products');
    }

    //en la bd eliminar
    public function destroy($id){

        $product= Product::find($id);
        $image = ProductImage::where("product_id",$id)->get();            
        
            if(count($image)>=1){
                foreach($image as $img){
                    $img->delete();
                }
                
            }
            $product->delete();
            return redirect('/admin/products');
        }    
}

