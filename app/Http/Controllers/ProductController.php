<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //Show Add Product Page
    public function ShowAddProductPage(){
        return view('AddProduct');
    }

    // Show Product to Product Page
    public function ShowProductPage(){
        $Product = Product::all();
        return view('ViewProduct',compact('Product'));
    }

    //Add Product
    public function AddProduct(Request $request){
        $request->validate([
            'Product_Name' => ['required'],
            'Product_Type' => ['required'],
            'Model_Number' => ['required'],
            'Price' => ['required'],
        ]);

        Product::create([
            'Product_Name' => $request->Product_Name,
            'Product_Type' =>$request->Product_Type,
            'Model_Number' =>$request->Model_Number,
            'Price' =>$request->Price
        ]);
        return redirect('/product');
    }

    //Edit Product
    public function EditProduct($id){
        $Product = Product::find($id);
        return view('EditProduct',compact('Product'));
    }

    //Update Product
    public function UpdateProduct(Request $request, $id){
        $request->validate([
            'Product_Name' => ['required'],
            'Product_Type' => ['required'],
            'Model_Number' => ['required'],
            'Price' => ['required'],
        ]);

        Product::find($id)->update([
            'Product_Name' => $request->Product_Name,
            'Product_Type' =>$request->Product_Type,
            'Model_Number' =>$request->Model_Number,
            'Price' =>$request->Price
        ]);
        return redirect('/product');
    }

    //Delete Product
    public function DeleteProduct($id){
        Product::find($id);
        Product::destroy($id);
        return redirect('/product');
    }
    

}
